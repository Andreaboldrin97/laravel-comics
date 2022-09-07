<footer class="container-fluid">
    <div class="row px-5 footer-top">
        <div class="col-2 py-5">
            <h5 class="text-white">DC COMICS</h5>
            <ul class="p-0">
                @foreach ($dcComicLink as $link)
                <li>
                    <a class="text-muted" href="{{ $link->href }}"> {{ $link->text }} </a>
                </li>
                @endforeach
            </ul>
            <h5 class="text-white">SHOP</h5>
            <ul class="p-0">
                @foreach ($shopLink as $link)
                <li>
                    <a class="text-muted" href="{{ $link->href }}"> {{ $link->text }} </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-2 py-5">
            <h5 class="text-white">DC</h5>
            <ul class="p-0">
                @foreach ($dcLink as $link)
                <li>
                    <a class="text-muted" href="{{ $link->href }}"> {{ $link->text }} </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-2 py-5">
            <h5 class="text-white">SITES</h5>
            <ul class="p-0">
                @foreach ($siteLink as $link)
                <li>
                    <a class="text-muted" href="{{ $link->href }}"> {{ $link->text }} </a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="col-6 logo-bg-breand p-0">
        </div>

    </div>
    <div class="footer-bottom p-5 d-flex justify-content-between align-items-center">
        <div class="follow">
            <a class="text-white button-footer p-3" href="#">SING-UP NOW!</a>
        </div>
        <div>
            <a class="me-3" href="#">FOLLOW US</a>
            <a class="me-3" href="#">
                <img src="../assets/img/footer-facebook.png" alt="">
            </a>
            <a class="me-3" href="#">
                <img src="../assets/img/footer-twitter.png" alt="">
            </a>
            <a class="me-3" href="#">
                <img src="../assets/img/footer-youtube.png" alt="">
            </a>
            <a class="me-3" href="#">
                <img src="../assets/img/footer-pinterest.png" alt="">
            </a>
            <a class="me-3" href="#">
                <img src="../assets/img/footer-periscope.png" alt="">
            </a>
        </div>
    </div>
</footer>