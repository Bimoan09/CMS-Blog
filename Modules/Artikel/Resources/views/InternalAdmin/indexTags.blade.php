@extends('masterfrontend::layouts.main')

@section('title', 'List Tags')


@section('content')

<body class="animsition site-navbar-small ">
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">DataTables</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('member.home')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Tags</li>
            </ol>
            <div class="page-header-actions">
                <button type="button" class="btn btn-info btn-sm" data-target="#modalTags" data-toggle="modal">Buat
                    Tags</button>

            </div>
        </div>

        @include('masterfrontend::partials.alert')

        <div class="page-content">

            <!-- Panel Table Individual column searching -->
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">Daftar Tags</h3>
                </header>
                <div class="panel-body">
                    <table class="table table-hover dataTable table-striped" id="exampleTableSearch">
                        <thead>
                            <tr>

                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($getTags as $tag)
                            <tr class="datas{{$tag->id}}">
                                <td>{{$tag->name}}</td>
                                <td> <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                        data-toggle="tooltip" data-original-title="Rincian">
                                        <a href="#" <i class="icon md-book" aria-hidden="true"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                        data-toggle="tooltip" data-original-title="Ubah">
                                        <a href="#" <i class="icon md-wrench" aria-hidden="true"></i></a>
                                    </button>
                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$tag->id}})"
                                        data-target="#DeleteModalTags" class="btn btn-xs btn-danger"><i
                                            class="fa fa-trash"></i>Hapus</a>
                                    {{-- <a class="btn btn-danger delete_user" href="{{route('admin.category.deleteCategory', $tag->id)}}"
                                    id="{{$value->id}}">Delete</a> --}}
                                </td>
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
        var url = '{{ route("admin.tags.delete", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }
    function formSubmit() {
        $("#deleteForm").submit();
    }
</script>
@endsection