<div class="card" style="width: 25rem; height: 100%;">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p>{{ $post->formatted_data }}</p>
        <p class="card-text">{{ $post->description }}</p>
        <div id="buttons">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $post->id }}">Edit
            </button>
            <form action={{ route('posts.destroy', $post->id) }} method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
