@extends('masterfrontend::layouts.main')

@section('title', 'Buat Artikel')

@section('content')

<body class="animsition site-navbar-small ">
    <br>
    <div class="col-lg-12">
        <!-- Panel Summary Mode -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Buat Kategori</h3>
            </div>
            <div class="panel-body">
            <form action="{{route('admin.category.store')}}" method="POST" class="form-horizontal" id="exampleSummaryForm" autocomplete="on">
                {{csrf_field()}}
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">kategori</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Slug</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="slug" required/>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-block btn-round"><i class="icon wb-menu" aria-hidden="true"></i>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Panel Summary Mode -->
</body>

<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/ckeditor/plugins/ckfinder/ckfinder.js')}}"></script>
<script>
    var editor = CKEDITOR.replace('konten');
    CKFinder.setupCKEditor(editor);
</script>
@endsection
