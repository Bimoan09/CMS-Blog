@extends('masterfrontend::layouts.main')

@section('title', 'Daftar Artikel')

@section('content')
<body class="app-ui layout-has-drawer layout-has-fixed-header">

  


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
@endsection