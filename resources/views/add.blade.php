<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Add Post</title>
</head>

<body>
    <div id="heading">
        <h1>Create a new post</h1>
    </div>

    <div>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="title">
                <div id="title" class="form-text">Insert an eye-catching title</div>
            </div>
            <div class="mb-3">
                <label for="inputDescription" class="form-label">Description</label>
                <textarea name="description" id="inputDescription" class="form-control"></textarea>
                <div id="title" class="form-text">Give us more details</div>
            </div>
            <div>
                @if ($errors->any())
                    <div class="error-div">
                        <div class="icon">
                            <i class="bi bi-x-circle-fill"></i>
                        </div>
                        <div class="text">
                            <ul class="error-ul">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-danger">
                Add
            </button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
