<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            @if($image)
            <img src="{{ $image }}" width="200px">
                @endif

        <form wire:submit.prevent="addNewComment">
            <div class="input-group mb-3">
            <input type="file" class="form-control" id="image" wire:change="$emit('fileUpload')">
            </div>
            @error('new_comment') <span class="alert alert-danger">{{ $message }}</span> @enderror
            <div class="input-group mb-3">
                <input type="text" class="form-control" wire:model="new_comment" placeholder="Enter Comments" aria-label="Enter comments" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </div>
        </form>
            @if($comments!=null)
            @foreach($comments as $comment)
                <div class="card">
            <div class="card-body">
                <button type="button" class="close" aria-label="Close" wire:click="remove({{ $comment->id }})">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="card-title">{{ $comment->creator->name  }},<span style="font-size: 13px">{{ $comment->created_at->diffForHumans() }}</span></h5>
                <p class="card-text">{{ $comment->body }}</p>
                @if($comment->image)
                    <img src="{{ $comment->imagePath }}" width="200px">
                    @endif

            </div>
                </div>
                @endforeach
                {{ $comments->links('custom-pagination') }}
                @else
            <div class="card">
                <div class="card-body">
                    <p>There is no comments</p>
                </div>
            </div>
                @endif
        </div>
    </div>
    <div class="col-md-2"></div>

</div>
<script>
    Livewire.on('fileUpload', () => {
        let inputImage = document.getElementById('image');
        let file = inputImage.files[0];
        let reader = new FileReader();
        reader.onload=()=>{
            console.log(reader.result);
            Livewire.emit('fileStore',reader.result);
        }

        reader.readAsDataURL(file);
    })
</script>
