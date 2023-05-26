<header>
    <div class="container h-100 d-flex justify-content-between align-items-center">
        <div class="box-logo py-1">
            <img src="/img/logo.png" alt="">
        </div>
        <ul class="d-flex justify-content-center align-items-center list-unstyled gap-4 pt-3">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('characters.index')}}">Characters</a></li>
            <li><a href="#">Rules</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="box-search">
            <i class="fa-solid fa-magnifying-glass pe-1"></i>
            <input name="search" type="search" placeholder="Search your characters">
        </div>
    </div>
</header>
