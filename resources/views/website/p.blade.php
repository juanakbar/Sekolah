<x-main-layout>
    <div class="container recent-blog-posts mt-5 mb-5" data-aos="slide-up">
        <header class="section-header berita">
            <p>PANJI</p>
        </header>
        <div class="row">
            <div class="container">
                <div class="border rounded shadow-sm">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light-lighten p-2 mb-0 text-decoration-none">
                            <li class="breadcrumb-item"><a href="#"><i class="uil-home-alt"></i> Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Prestasi</li>
                        </ol>
                    </nav>

                </div>
            </div>
            {{-- <div class="container recent-blog-posts mt-3 mb-5"> --}}
                @foreach ($prestasis as $prestasi)
                <div class="col-sm-6 col-md-4 mt-5 mb-3">
                    <div class="post-box">
                        <div class="post-img"><img src="/img/portal/no-image.png" class="img-fluid" alt=""></div>
                        <span class="post-date"> {{ $prestasi -> judul }} </span>
                        <h3 class="post-title">{{ $prestasi -> excerpt}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</x-main-layout>