<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/initial.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Posts CRUD</title>
</head>

<body>

    <main>
        <div>

            <div class="search">

                @include('components.search-bar')

                <button class="btn-icon">
                    <a href="{{ route('add') }}">
                        <i class="bi bi-patch-plus-fill"></i>
                    </a>
                </button>

                <button class="btn-icon">
                    <a href="{{ route('home') }}">
                        <i class="bi bi-house-door-fill"></i>
                    </a>
                </button>
            </div>

            <div class="grid">
                @foreach ($posts as $post)
                    @include('components.card')
                    @include('components.edit-modal')
                @endforeach
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
