<form method="GET" action="{{ route('posts.index') }}">
    <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
            <input class="search_input" type="text" name="search" placeholder="Search..." value="{{ request('search') }}"
                autocomplete="off">
        </div>
    </div>

    <button class="btn-icon" id="btn-search" type="submit">
        <a><i class="bi bi-search-heart-fill"></i> </a>
    </button>
</form>
