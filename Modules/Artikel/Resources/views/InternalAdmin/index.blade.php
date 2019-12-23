@extends('masterfrontend::layouts.main')

@section('title', 'Daftar Artikel')

<body class="app-ui layout-has-drawer layout-has-fixed-header">

    <main class="app-layout-content">

        <!-- Page Content -->
        <div class="container-fluid p-y-md">
            <!-- Dynamic Table Full -->
            <div class="card">
                <div class="card-header">
                    @if(Auth::user()->user_type == 'member')
                    <h4>Semua Artikel <b style="color:green;">{{Auth::user()->name}}</b></h4>
                    <button onclick="window.location.href = '{{route('member.artikel.create')}}';"
                        class="btn btn-app-outline pull-right" type="submit">Buat artikel</button>
                    @elseif(Auth::user()->user_type == 'internaladmin')
                    <p><b>Manage Artikel Member</b></p>
                    <button onclick="window.location.href = '{{route('member.artikel.create')}}';"
                        class="btn btn-app-outline" type="submit" style="margin-left: 545px;">Buat artikel</button>
                    <button onclick="window.location.href = '{{route('member.artikel.create')}}';"
                        class="btn btn-app-outline pull-right" type="submit">Daftar Artikel
                        {{Auth::user()->name}}</button>
                    @endif
                </div>
                <div class="card-block">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="table">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Judul</th>
                                <th class="hidden-xs">Penulis</th>
                                <th class="hidden-xs">Tanggal jadi</th>
                                <th class="hidden-xs w-20">Status</th>
                                <th class="text-center" style="width: 10%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="font-500">Fungsional Programming</td>
                                <td class="font-500">Marko simic</td>
                                <td class="hidden-xs">9 September 2019 </td>
                                <td> <button type="button" class="btn btn-primary btn-sm" disabled>Terbit</button></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Lihat Content"><i class="fa fa-file-o"></i></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Hapus Content"><i class="ion-close"></i></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Edit Content"><i class="ion-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="font-500">Belajar Golang dasar</td>
                                <td class="font-500">Riko simanjuntak</td>
                                <td class="hidden-xs">10 September 2019</td>
                                <td> <button type="button" class="btn btn-primary btn-sm" disabled>Terbit</button></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Lihat Content"><i class="fa fa-file-o"></i></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Hapus Content"><i class="ion-close"></i></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Edit Content"><i class="ion-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="font-500">Pengertian Microservices</td>
                                <td class="font-500">Xandao</td>
                                <td class="hidden-xs">9 Oktober 2019</td>
                                <td> <button type="button" class="btn btn-warning btn-sm" disabled>Pending</button></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Lihat Content"><i class="fa fa-file-o"></i></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Hapus Content"><i class="ion-close"></i></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Edit Content"><i class="ion-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="font-500">Belajar Cisco</td>
                                <td class="font-500">Bambang pamungkas</td>
                                <td class="hidden-xs">8 november 2019</td>
                                <td><button type="button" class="btn btn-danger btn-sm" disabled>Ditolak</button></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Lihat Content"><i class="fa fa-file-o"></i></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Hapus Content"><i class="ion-close"></i></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"
                                            title="Edit Content"><i class="ion-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- .card-block -->
            </div>
            <!-- .card -->
            <!-- End Dynamic Table Full -->


        </div>
        <!-- .container-fluid -->
        <!-- End Page Content -->
    </main>

    <div class="app-ui-mask-modal"></div>
    <script>
        $(function () {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('slick');
        });

        $('#table').DataTable({
            "columnDefs": [{
                'targets': [0],
                'visible': true,
                'searchable': true,
            }]
        });
    </script>

</body>

</html>