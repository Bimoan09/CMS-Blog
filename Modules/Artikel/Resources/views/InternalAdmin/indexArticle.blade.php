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
                    <table class="table table-bordered datatable">
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

            <!-- Delete Product Modal -->
            <div class="modal" id="DeleteArticleModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Article Delete</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <h4>Are you sure want to delete this Article?</h4>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" id="SubmitDeleteArticleForm">Yes</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Page -->
</body>
@endsection


@section('javascript')
<script src="{{asset('assets/remark/global/vendor/jquery/jquery.js')}}"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready(function() {
    // init datatable.
    var dataTable = $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: true,
        pageLength: 5,
        // scrollX: true,
        "order": [[ 0, "desc" ]],
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


    var deleteID;
    var $button = $(this);

        $('body').on('click', '#getDeleteId', function(){
        deleteID = $(this).data('id');
    })

    $('#SubmitDeleteArticleForm').click(function(e) {
        e.preventDefault();
        var id = deleteID;

    $.ajax({
        url: "/admin/artikel/delete/" + id,
        method: 'GET',
        data : {"_token":"{{ csrf_token() }}"},
        success: function(result)
        {
            dataTable.row( $button.parents('tr') ).remove().draw();
            $('#DeleteArticleModal').modal('hide');
        },
    });
});

});
</script>
@endsection
