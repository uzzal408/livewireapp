<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;
//    public $comments;
    public $new_comment;
    public $image;
    public $ticket_id = 1;
    protected $listeners = [
        'fileStore' => 'handleFileStore',
        'selectedTicket'
        ];
    public function handleFileStore($imageData)
    {
        $this->image = $imageData;
    }

    public function selectedTicket($ticketId){
        $this->ticket_id = $ticketId;
    }

    public function addNewComment(){
        $this->validate([
            'new_comment' => 'required|string|max:255'
        ]);
        $store_image = $this->storeImage();

        $comment = new \App\Models\Comments() ;
        $comment->body = $this->new_comment;
        $comment->user_id = 1;
        $comment->support_ticket_id = $this->ticket_id;
        $comment->image = $store_image;
        $comment->save();

        $this->new_comment = '';
        $this->image = '';
        session()->flash('message', 'Comment Inserted Successfully Successfully.');
    }

    public function storeImage(){
        if(!$this->image) return null;
        $img = ImageManagerStatic::make($this->image)->encode('jpg');
        $name = Str::random().'.jpg';
        Storage::disk('public')->put($name,$img);
        return $name;

    }
    public function updated()
    {
        $this->validate([
            'new_comment' => 'required|string|max:255'
        ]);
    }

    public function remove($id){
        $comment = \App\Models\Comments::find($id);
        Storage::disk('public')->delete($comment->image);
        $comment->delete();
//        $this->comments = $this->comments->where('id','!=',$id);
        session()->flash('message', 'Comment Deleted Successfully.');
    }

//    public function mount(){
//        $this->comments = \App\Models\Comments::latest()->get();
//    }

    public function render()
    {
        $comments = \App\Models\Comments::where('support_ticket_id',$this->ticket_id)->orderBy('created_at','DESC')->paginate(2);
        return view('livewire.comments',compact('comments'));
    }
}
