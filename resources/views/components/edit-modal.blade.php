<div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Edit post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-modal" action={{ route('posts.update', $post->id) }} method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="updatedTitle" class="col-form-label">Title:</label>
                        <input name="title" type="text" class="form-control" id="updatedTitle"
                            placeholder="{{ $post->title }}" value="{{ $post->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="updatedDescription" class="col-form-label">Message:</label>
                        <textarea name="description" class="form-control" id="updatedDescription" placeholder="{{ $post->description }}">{{ $post->description }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
