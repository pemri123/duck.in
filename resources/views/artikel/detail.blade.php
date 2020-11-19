  
@extends('layouts.blog')
@push('nav')
    <ul class="nav-menu nav navbar-nav">
        @foreach($categori as $item)
        <li><a href="{{ route('perawatan.kategori',$item->slug) }}">{{ $item->nama_kategori }}</a></li>
        @endforeach
    </ul>
@endpush
@section('content')

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                    <div class="main-post">
                        <h3>{{ $artikel_detail->judul }}</h3>
                        <figure class="figure-img">
                            <img class="img-responsive" src="{{asset('uploads/'.$artikel_detail->gambar)}}" widht= "600px" height="600px" alt="">
                        </figure>
                       {!! $artikel_detail->body !!}
                    </div>
                    <div class="post-shares sticky-shares">
                        <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>


                
            </div>
            <!-- /Post content -->

            <!-- aside -->
            <div class="col-md-4">
                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Featured Posts</h2>
                    </div>
                    @foreach($artikelterkait as $item)
                    <div class="post post-thumb">
                        <a class="post-img" href="blog-post.html"><img src="{{asset('uploads/'.$item->gambar)}}" widht= "200px" height="200px" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-3" href="#">{{ $item->kategori->nama_kategori }}</a>
                                <span class="post-date">{{ $item->created_at->diffforHumans() }}</span>
                            </div>
                            <h3 class="post-title"><a href="{{ route('perawatan.show', $item->judul) }}">{{ $item->judul }}</a>
                            </h3>
                        </div>
                    </div>
                    @endforeach


                </div>
                <!-- /post widget -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            @foreach($categori as $cat)
                            <li><a href="{{ route('perawatan.kategori',$cat->slug) }}" class="cat-1">{{ $cat->nama_kategori }}<span>{{ $cat->perawatan_count }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- /catagories -->
            </div>
            <!-- /aside -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

@push('categoris')
    <ul class="footer-links">
    @foreach($categori as $item)
        <li><a href="{{ route('perawatan.kategori',$item->slug) }}">{{ $item->nama_kategori }}</a></li>
    @endforeach
    </ul>
@endpush

@endsection