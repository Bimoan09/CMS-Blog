@extends('masterfrontend::layouts.main')

@section('title', 'List Artikel')


@section('content')

<body class="animsition site-navbar-small ">
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">DataTables</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('member.home')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Artikel</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary btn-round" href="http://datatables.net" target="_blank">
                    <i class="icon md-link" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Buat Artikel</span>
                </a>
            </div>
        </div>

        @include('masterfrontend::partials.alert')

        <div class="page-content">

            <!-- Panel Table Individual column searching -->
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">Daftar Artikel</h3>
                </header>
                <div class="panel-body">
                    <table class="table table-hover dataTable table-striped w-full" id="exampleTableSearch">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                {{-- <th>Tags</th> --}}
                                <th>Jumlah Pembaca</th>
                                <th>Penulis</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>

                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                {{-- <th>Tags</th> --}}
                                <th>Jumlah Pembaca</th>
                                <th>Penulis</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($articleAdmin as $value)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$value->tittle}}</td>
                                <td>{{$value->category->name}}</td>

                                <td>26</td>
                                <td><a href="http://example.com">{{$value->users->name}}</a>
                                </td>
                                <td>
                                    @if($value->status == 1)
                                    <span class="badge badge-success">Terbit</span>
                                    @elseif($value->status == 2)
                                    <span class="badge badge-warning">Pending</span>
                                    @elseif($value->status == 3)
                                    <span class="badge badge-danger">Reject</span>
                                    @endif
                                </td>
                                <td> <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                        data-toggle="tooltip" data-original-title="Rincian">
                                        <a href="{{route('admin.artikel.detail', Str::slug($value->tittle))}}" <i
                                            class="icon md-book" aria-hidden="true"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                        data-toggle="tooltip" data-original-title="Ubah">
                                        <a href="{{route('admin.artikel.edit', $value->slug)}}" <i class="icon md-wrench"
                                            aria-hidden="true"></i></a>
                                    </button>
                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$value->id}})"
                                        data-target="#DeleteModal" class="btn btn-xs btn-danger"><i
                                            class="fa fa-trash"></i>Hapus</a>
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


@section('javascript')
<script src="{{asset('assets/remark/global/vendor/jquery/jquery.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });

    function deleteData(id) {
        var id = id;
        var url = '{{ route("admin.artikel.delete", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit() {
        $("#deleteForm").submit();
    }
</script>
@endsection