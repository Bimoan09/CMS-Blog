@extends('masterfrontend::layouts.main')

@section('title', 'Buat Artikel')

<body class="app-ui layout-has-drawer layout-has-fixed-header">

    <main class="app-layout-content">

        <!-- Page Content -->
        <div class="container-fluid p-y-md">
            <!-- Dynamic Table Full -->
            <div class="col-md-12">
                <!-- Normal Form -->
                <div class="card">
                    <div class="card-header">
                        <h4>Buat Artikel</h4>
                        <ul class="card-actions">
                            <li>
                                <button type="button"><i class="ion-more"></i></button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <form action="base_forms_elements.html" method="post" onsubmit="return false;">
                            <div class="form-group">
                                <label for="tittle">Judul</label>
                                <input class="form-control" type="text" id="tittle" name="tittle"
                                    placeholder="Masukan judul..." />
                            </div>
                            <div class="form-group">
                                <label for="cover" />Cover</label>
                                <input class="form-control" type="file" id="cover" name="cover">
                            </div>
                            <div class="form-group">
                                <label for="konten">Konten</label>
                                <textarea class="form-control" id="konten" rows="10"></textarea>
                            </div>
                            <div class="form-group m-b-0">
                                <button class="btn btn-app" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>

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