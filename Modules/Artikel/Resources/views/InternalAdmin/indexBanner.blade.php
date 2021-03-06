@extends('masterfrontend::layouts.main')

@section('title', 'List Baner')


@section('content')

<body class="animsition site-navbar-small ">
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">DataTables</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('member.home')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Banner</li>
            </ol>
            <div class="page-header-actions">
                <button type="button" class="btn btn-info btn-sm" data-target="#modalCategory" data-toggle="modal">Buat
                    Banner</button>

            </div>
        </div>

        @include('masterfrontend::partials.alert')

        <div class="page-content">

            <!-- Panel Table Individual column searching -->
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">Daftar Banner</h3>
                </header>
                <div class="panel-body">
                    <table class="table table-hover dataTable table-striped w-full" id="exampleTableSearch">
                        <thead>
                            <tr>

                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($banner as $value)
                            <tr class="datas{{$value->id}}">
                                <td>{{$value->name}}</td>
                                <td> <img src="{{asset('storage/' . $value->file)}}" width="20%" height="20%" /></td>
                                <td>{{$value->description}}</td>
                                <td>{{$value->location}}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                        data-toggle="tooltip" data-original-title="Ubah">
                                        <a href="{{route('admin.banner.edit', $value->id)}}" <i class="icon md-wrench"
                                            aria-hidden="true"></i></a>
                                    </button>
                                    {{-- <button type="button" class="delete-modal btn btn-sm btn-icon btn-pure btn-default"
                                        data-name="{{$value->name}}" data-toggle="tooltip" data-original-title="Hapus">
                                    <i class="icon md-close" aria-hidden="true"></i>
                                    </button> --}}
                                    {{-- <a class="btn btn-danger delete_user" href="{{route('admin.category.deleteCategory', $value->id)}}"
                                    id="{{$value->id}}">Delete</a> --}}
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
        var url = '{{ route("admin.category.deleteCategory", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit() {
        $("#deleteForm").submit();
    }
</script>
@endsection
