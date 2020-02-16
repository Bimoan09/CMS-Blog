@extends('masterfrontend::layouts.main')

@section('title', 'Detail Kategori')

@section('content')

<body class="animsition site-navbar-small dashboard">
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Slug</th>
                        <th>Meta_tag_description</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$detail->name}}</td>
                        <td>{{$detail->slug}}</td>
                        <td>{{$detail->meta_tag_description}}</td>
                    </tr>
            </table>
        </div>
        <div class="page-content">
            <div class="row">

                <!-- Example Card Decks -->
                <div class="example-wrap">
                    <h4 class="example-title">Artikel</h4>
                    <br>
                    <div class="card-deck">
                        @foreach($getRelatedArticle as $value)
                        <div class="col-4">
                            <div class="card">
                                <img class="card-img-top w-full" src="{{asset('storage/' . $value->featured_image)}}"
                                    width="640px" height="360px" />
                                <div class="card-block">
                                    <h4 class="card-title">{{$value->tittle}}</h4>
                                    <p class="card-text"> {!! \Illuminate\Support\Str::words($value->content, 25) !!}
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Created :
                                            {{Carbon\Carbon::parse($value->created_at)->diffForHumans()}}</small>
                                    </p>
                                <a href="{{route('admin.artikel.detail', $value->slug)}}" class="btn btn-primary">Rincian</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End Example Card Decks -->
            </div>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success btn-block btn-round"><i class="icon wb-menu"
                aria-hidden="true"></i>Terbitkan Artikel</button>
    </div>
    <br>
    </div>
    <!-- End Page -->

</body>
@endsection
