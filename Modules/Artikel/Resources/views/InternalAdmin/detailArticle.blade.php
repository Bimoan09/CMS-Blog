@extends('masterfrontend::layouts.main')

@section('title', 'Detail Artikel')

@section('content')

<body class="animsition site-navbar-small dashboard">
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$detail->category->name}}</td>
                        <td>{{$detail->tittle}}</td>
                        <td>{{$detail->users->name}}</td>
                        <td>
                            @if($detail->status == 1)
                            <span class="badge badge-success">Terbit</span>
                            @elseif($detail->status == 2)
                            <span class="badge badge-warning">Review</span>
                            @elseif($detail->status == 3)
                            <span class="badge badge-danger">Reject</span>
                            @endif

                        </td>
                    </tr>
            </table>
        </div>
        <div class="page-content">
            <div class="documents-wrap article">
                <div class="article-content">
                    <section>
                        <center>
                            <h4>{{$detail->tittle}}</h4>

                            <img src="{{ $detail->featured_image }}" width="640px" height="360px" />
                            <br>
                            <br>
                            <p>{{$detail->featuredimage_description}}</p>
                            <br>
                        </center>
                    </section>
                    <br>
                    <p>
                        <center>
                            {!! $detail->content !!}

                        </center>
                    </p>
                    </section>
                </div>
            </div>
        </div>

        <div class="text-center">
            @if($detail->status == 2)
            <button type="submit" class="btn btn-warning btn-block btn-round"><i class="icon wb-menu"
                    aria-hidden="true"></i>Terbitkan Artikel</button>
            @endif
        </div>
        <br>
    </div>
    <!-- End Page -->

</body>
@endsection
