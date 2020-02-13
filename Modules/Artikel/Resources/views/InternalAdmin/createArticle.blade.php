@extends('masterfrontend::layouts.main')

@section('title', 'Buat Artikel')

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
                <form action="{{$mode== 'create' ?route('admin.artikel.store'):route('admin.artikel.update', $findArticle->slug)}}" method="POST" class="form-horizontal" autocomplete="on" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ $mode=='edit'? method_field('PUT'):'' }}
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Judul</label>
                        <div class="col-md-9">
                        <input type="text" class="form-control" name="tittle" value="{{$findArticle ? $findArticle->tittle : old('tittle')}}" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Meta Description</label>
                        <div class="col-md-9">
                        <input type="text" class="form-control" name="meta_tag_description" value="{{$findArticle ? $findArticle->meta_tag_description : old('meta_tag_description')}}" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Meta Keyword</label>
                        <div class="col-md-9">
                        <input type="text" class="form-control" name="meta_tag_keyword" value="{{$findArticle ? $findArticle->meta_tag_keyword : old('meta_tag_keyword')}}" required />
                        </div>
                    </div>
                  
                    <!-- Example Default -->
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Gambar cover</label>
                        <div class="col-md-9">
                            <input type="file" name="featured_image" id="input-file-now" data-plugin="dropify"
                                data-default-file="" required />
                        </div>
                    </div>
                    <!-- End Example Default -->

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Deskripsi Gambar cover</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="featuredimage_description"  rows="5" cols="5">{{$findArticle ? $findArticle->featuredimage_description : old('featuredimage_description')}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Kategori</label>
                        <div class="col-md-9">
                            <select class="form-control" data-plugin="select2" name="category_id" required>
                                @foreach($getCategory as $data)
                                <optgroup label="Kategori">
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                </optgroup>
                                </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tags</label>
                        <div class="col-md-9">
                            <select class="form-control" multiple data-plugin="select2" name="tags[]" required>
                                <optgroup label="Pilih Tags">
                                @foreach($getTags as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Konten</label>
                        <div class="col-md-9">
                            <textarea id="konten" class="form-control" name="content" rows="30" cols="30">{{$findArticle ? $findArticle->content : old('content')}}</textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-block btn-round"><i class="icon wb-menu"
                                aria-hidden="true"></i>Unggah Artikel</button>
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
