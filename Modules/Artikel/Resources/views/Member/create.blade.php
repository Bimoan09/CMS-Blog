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
                <form class="form-horizontal" id="exampleSummaryForm" autocomplete="off">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Judul</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="tittle" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Kategori</label>
                        <div class="col-md-9">
                            <select class="form-control" data-plugin="select2" name=category_id>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Content</label>
                        <div class="col-md-9">
                            <textarea id="konten" class="form-control" name="konten" rows="10" cols="50"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" id="validateButton3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Panel Summary Mode -->
</body>

<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('konten');
</script>
@endsection
