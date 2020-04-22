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
                    <table id="article-table" class="table table-hover dataTable table-striped w-full" id="exampleTableSearch">
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
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>

$('#article-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{route('admin.artikel.json')}}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'tittle', name: 'tittle'},
            {data: 'category.name', name: 'category.name'},
            {data: 'view_count', name: 'view_count'},
            {data: 'article_owner', name: 'article_owner'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

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