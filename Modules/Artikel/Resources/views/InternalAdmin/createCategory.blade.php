@extends('masterfrontend::layouts.main')

@if($mode =='create')
@section('title', 'Buat Kategori')
@elseif($mode =='edit')
@section('title', 'Edit Kategori')
@endif

@section('content')

<body class="animsition site-navbar-small ">
    <br>
    <div class="col-lg-12">
        <!-- Panel Summary Mode -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{$mode == 'create' ?'Tambah baru' : 'Edit Data'}}</h3>
            </div>
            <div class="panel-body">
            <form action="{{$mode=='create' ?route('admin.category.store'):route('admin.category.update', $findCategory->id)}}" method="POST" class="form-horizontal" id="exampleSummaryForm" autocomplete="on">
                {{ csrf_field() }}
                {{ $mode=='edit'? method_field('PUT'):'' }}
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">kategori</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name"  value="{{$findCategory ? $findCategory->name : old('name')}}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Meta Description</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="meta_tag_description"  value="{{$findCategory ? $findCategory->meta_tag_description : old('meta_tag_description')}}" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Slug</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="slug"  value="{{$findCategory ? $findCategory->slug : old('slug')}}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-12 form-group">
                            <label class="col-md-3Pweb form-control-label">Terbitkan ke member</label>
                            <select class="custom-select custom-select-lg mb-12" name="asigned">
                                <option selected>Terbitkan ke member ?</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>

                            </select>
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
