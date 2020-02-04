@extends('masterfrontend::layouts.main')

@section('title', 'List Kategori')


@section('content')

<body class="animsition site-navbar-small ">
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">DataTables</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('member.home')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Kategori</li>
            </ol>
            <div class="page-header-actions">
                <button type="button" class="btn btn-info btn-sm" data-target="#modalCategory" data-toggle="modal">Buat Kategori</button>
                <button type="button"  class="btn btn-info btn-sm" data-target="#modalSUbcategory" data-toggle="modal">Buat Sub-Kategori</button>
            </div>
        </div>

        <div class="page-content">

            <!-- Panel Table Individual column searching -->
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">Daftar kategori</h3>
                </header>
                <div class="panel-body">
                    <table class="table table-hover dataTable table-striped w-full" id="exampleTableSearch">
                        <thead>
                            <tr>
                
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Meta tag description</th>
                                <th>Jumlah Artikel</th>
                                <th>Jumlah sub kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Meta tag description</th>
                                <th>Jumlah Artikel</th>
                                <th>Jumlah sub kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($getCategory as $value)
                            <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->slug}}</td>
                            <td>{{$value->meta_tag_description}}</td>
                            <td>1</td>
                            <td>1</td>
                            <td> <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                data-toggle="tooltip" data-original-title="Rincian">
                                <a href="#" <i class="icon md-book"
                                    aria-hidden="true"></i></a>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                data-toggle="tooltip" data-original-title="Ubah">
                                <a href="#" <i class="icon md-wrench"
                                    aria-hidden="true"></i></a>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                data-toggle="tooltip" data-original-title="Hapus">
                                <i class="icon md-close" aria-hidden="true"></i>
                            </button>
                        </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Panel Table Individual column searching -->

        </div>
    </div>
    <!-- End Page -->
</body>
@endsection
