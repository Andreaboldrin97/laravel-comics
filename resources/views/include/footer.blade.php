<footer class="container-fluid">
    <div class="row px-5 footer-top">
        <div class="col-2 py-5">
            <h5 class="text-white">DC COMICS</h5>
            <ul class="p-0">
                <li v-for="(link , index) in comicsLink" :key="index">
                    <a class="text-muted" :href="link.href">footer</a>
                </li>
            </ul>


            <div class="col-6 logo-bg-breand p-0">
            </div>

        </div>

    </div>
</footer>