<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','support_ticket_id','body','image'];

    public function creator(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function getImagePathAttribute(){
        return Storage::disk('public')->url($this->image);
    }
}
