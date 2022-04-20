<x-main-layout>
    <div class="container berita mt-4 mb-4 border rounded isi shadow">
        <h1 class="text-center mt-1 bt">{{$berita-> judul}}</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mt-2 margin-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/beranda/">Home</a></li>
                <li class="breadcrumb-item"><a href="/beranda/berita">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$berita-> judul}}</li>
            </ol>
        </nav>
        <img src="/img/website/maxresdefault.jpeg" class="img-fluid mt-3 rounded" alt=" {{$berita->judul}} ">
        <p class="text-muted mt-2"><i class="fa-regular fa-calendar"></i> {{$berita-> created_at}} </p>
        <p class="fs-5"> {{$berita-> isi}} </p>
    </div>
</x-main-layout>