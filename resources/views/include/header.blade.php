<header class="container-fluid">
    <div class="d-flex py-3 px-5 justify-content-between">
        <div>
            <img class="logoBreand" src="../assets/img/dc-logo.png" alt="Main logo DC">
        </div>
        <nav>
            <ul class="d-flex justify-content-around">
                @foreach ($navLink as $link)
                <li class="m-2">
                    <a class="fw-bolder" href="{{ $link->href }}"> {{ $link->text }} </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>