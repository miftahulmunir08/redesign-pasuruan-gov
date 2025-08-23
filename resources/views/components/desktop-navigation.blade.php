<nav class="navbar navbar-expand-sm w-100 justify-content-center p-0 d-none d-lg-flex">
    <ul class="navbar-nav">
        @foreach ($menuItems as $item)
            @include('components._menu-item', ['item' => $item])
        @endforeach
    </ul>
</nav>
