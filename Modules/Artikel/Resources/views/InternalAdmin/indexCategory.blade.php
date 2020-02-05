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
                <button type="button" class="btn btn-info btn-sm" data-target="#modalCategory" data-toggle="modal">Buat
                    Kategori</button>

            </div>
        </div>

        @include('masterfrontend::partials.alert')

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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Meta tag description</th>
                                <th>Jumlah Artikel</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($getCategory as $value)
                            <tr class="datas{{$value->id}}">
                                <td>{{$value->name}}</td>
                                <td>{{$value->slug}}</td>
                                <td>{{$value->meta_tag_description}}</td>
                                <td>{{$value->articles_count}}</td>
                                <td> <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                        data-toggle="tooltip" data-original-title="Rincian">
                                        <a href="#" <i class="icon md-book" aria-hidden="true"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                        data-toggle="tooltip" data-original-title="Ubah">
                                        <a href="#" <i class="icon md-wrench" aria-hidden="true"></i></a>
                                    </button>
                                    <button type="button" class="delete-modal btn btn-sm btn-icon btn-pure btn-default"
                                        data-name="{{$value->name}}" data-toggle="tooltip" data-original-title="Hapus">
                                        <i class="icon md-close" aria-hidden="true"></i>
                                    </button>
                                    {{-- <a class="btn btn-danger delete_user" href="{{route('admin.category.deleteCategory', $value->id)}}"
                                    id="{{$value->id}}">Delete</a> --}}




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


    $('.delete-modal').on('click', function () {
        $(document).on('click', '.delete-modal', function () {
            // $('#footer_action_button').text(" Delete");
            $('#footer_action_button').removeClass('glyphicon-check');
            $('#footer_action_button').addClass('glyphicon-trash');
            $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('delete');
            $('.modal-title').text('Hapus Kategori');
            $('.did').text($(this).data('id'));
            $('.deleteContent').show();
            $('.form-horizontal').hide();
            $('.categoryName').html($(this).data('name'));
            $('#categoryDelete').modal('show');
        });
    });
</script>
@endsection
