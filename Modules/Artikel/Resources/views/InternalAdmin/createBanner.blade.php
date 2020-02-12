@extends('masterfrontend::layouts.main')

@section('title', 'Buat Banner')

@section('content')

<body class="animsition site-navbar-small ">
    <br>
    <div class="col-lg-12">
        <!-- Panel Summary Mode -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Buat Banner</h3>
            </div>
            <div class="panel-body">
            <form action="{{route('admin.banner.store')}}" method="POST" class="form-horizontal" id="exampleSummaryForm" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" required />
                        </div>
                    </div>
                    <!-- Example Default -->
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Banner</label>
                        <div class="col-md-9">
                            <input type="file" name="image" id="input-file-now" data-plugin="dropify"
                                data-default-file="" required />
                        </div>
                    </div>
                    <!-- End Example Default -->

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Deskripsi Banner</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="description" rows="5" cols="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Posisi</label>
                        <div class="col-md-9">
                            <select class="form-control" data-plugin="select2" name="location" required>
                                <optgroup label="Pilih Posisi">
                                    <option value="1">Top</option>
                                    <option value="2">Bottom</option>
                                    <option value="3">Left</option>
                                    <option value="4">Right</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-block btn-round"><i class="icon wb-menu"
                                aria-hidden="true"></i>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Panel Summary Mode -->
</body>
@endsection
