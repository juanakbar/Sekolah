<x-main-layout>
    <div class="container berita mt-2">
        <header class="section-header">
            <p>Prestasi</p>
        </header>
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>'; " aria-label="breadcrumb"
                class="mt-5 margin-auto justify-content-center">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="/beranda/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/beranda/prestasi">Prestasi</a></li>
                </ol>
            </nav>
            @foreach ($beritas as $berita)
            <div class="container recent-blog-posts mt-3 mb-5">
                <div class="col-sm-6 col-md-4 mt-2 mb-3">
                    <div class="post-box">
                        <div class="post-img"><img src="/img/portal/no-image.png" class="img-fluid" alt=""></div>
                        <span class="post-date"> {{ $prestasi -> judul }} </span>
                        <h3 class="post-title">{{ $prestasi -> excerpt}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-main-layout>