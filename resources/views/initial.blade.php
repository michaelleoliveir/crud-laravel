<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/initial.css') }}">
    <title>Posts CRUD</title>
</head>

<body>

    <main>
        <div class="grid">
            <div>
                <button type="button" class="btn btn-secondary" id="addButton">
                    <i class="bi bi-plus" style="font-size: 2rem; position: absolute"></i>
                </button>
            </div>
            @foreach ($posts as $post)
                <div class="card" style="width: 25rem; height: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <div id="buttons">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editModal{{ $post->id }}">Edit
                            </button>

                            <form action={{ route('delete', $post->id) }} method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1"
                    aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="editModalLabel">Edit post</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action={{ route('update', $post->id) }} method="post">
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
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
