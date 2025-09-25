<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Welcome</title>

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>

<body>
    <header>
        <h1 id="title">CRUD</h1>
        <h2 id="subtitle">Laravel</h2>
    </header>

    <main>
        <p>This application was built to demonstrate the basic CRUD operations
            (<span>Create</span>, <span>Read</span>, <span>Update</span>, and <span>Delete</span>) using Laravel.
            You can create new posts, browse the list, edit existing ones,
            or delete them with a single click.</p>
    </main>

    <footer>
        <button id="btn-animated">
            <a href={{ route('posts.index') }}>
                <i class="bi bi-arrow-right-circle-fill"></i>
            </a>
        </button>
    </footer>
</body>

</html>
