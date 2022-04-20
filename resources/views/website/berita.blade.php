<x-main-layout>
    <div class="container berita mt-2">
        <header class="section-header">
            <p>Berita</p>
        </header>
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>'; " aria-label="breadcrumb"
                class="mt-5 margin-auto justify-content-center">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="/beranda/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/beranda/berita">Berita</a></li>
                </ol>
            </nav>
            @foreach ($beritas as $berita)
            <div class="col-sm-6 col-md-4 mt-2 mb-3">
                <div class="card">
                    <img src="/img/portal/no-image.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$berita -> judul}}</h5>
                        <p class="card-text"> {{$berita -> excerpt}} </p>
                        <a href="/berita/{{$berita -> slug}}" class="btn btn-outline-primary"> Read More</a>
                        <hr class="hr-content">
                        <p class="card-text"><small class="text-muted">{{$berita -> created_at}}</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-main-layout>