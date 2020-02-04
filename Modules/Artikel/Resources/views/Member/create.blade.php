@extends('masterfrontend::layouts.main')

@section('title', 'Buat Artikel')

@section('content')

<body class="animsition site-navbar-small ">
    <br>
    <div class="col-lg-12">
        <!-- Panel Summary Mode -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Buat Artikel</h3>
            </div>
            <div class="panel-body">
                <form action="{{route('member.artikel.store')}}" method="POST" class="form-horizontal"
                    id="exampleSummaryForm" autocomplete="off" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Judul</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="tittle" required />
                        </div>
                    </div>
                    <!-- Example Default -->
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Gambar cover</label>
                        <div class="col-md-9">
                            <input type="file" name="featured_image" id="input-file-now" data-plugin="dropify"
                                required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Deskripsi Gambar</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="featuredimage_description" rows="10"
                                cols="10"></textarea>
                        </div>
                    </div>
                    <!-- End Example Default -->
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Kategori</label>
                        <div class="col-md-9">
                            <select class="form-control" data-plugin="select2" name="category_id" required>
                                <optgroup label="Kategori">
                                    @foreach($getCategory as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                </optgroup>
                                </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Konten</label>
                        <div class="col-md-9">
                            <textarea id="konten" class="form-control" name="content" rows="30" cols="30"></textarea>
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
