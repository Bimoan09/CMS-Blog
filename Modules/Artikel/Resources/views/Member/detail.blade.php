@extends('masterfrontend::layouts.main')

@section('title', 'Beranda')

@section('content')

<body class="animsition site-navbar-small dashboard">
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Programming</td>
                        <td>Belajar Laravel</td>
                        <td>Abdullah</td>
                        <td> <span class="badge badge-warning">Review</span></td>
                    </tr>
            </table>
        </div>
        <div class="page-content">
            <div class="documents-wrap article">
                <div class="article-content">
                    <section>
                        <center>
                            <h4>Lorem ipsum</h4>
                        </center>
                    </section>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis cursus orci, nec convallis
                        turpis. Sed volutpat mi eget metus euismod aliquet. Morbi aliquet molestie felis, id porta lacus
                        commodo ac. Nunc a lobortis lectus, a pretium quam. Vestibulum bibendum convallis mi, sed
                        pulvinar massa ullamcorper non. Aliquam erat volutpat. Nam molestie arcu eros, vel semper massa
                        vestibulum lacinia. Ut et turpis tortor. Donec orci eros, dapibus sed vehicula quis, pharetra
                        imperdiet urna.

                        Quisque euismod fringilla dui, non cursus sapien maximus quis. Praesent mauris ex, pharetra id
                        massa eget, pellentesque rutrum orci. Nullam ut nunc et tellus tincidunt consequat in finibus
                        lorem. Ut porttitor purus vel maximus porta. Proin vel laoreet nunc. Curabitur eu blandit
                        mauris. Vivamus sit amet volutpat magna, et consequat elit. Vestibulum tincidunt faucibus enim
                        in ultricies. Integer suscipit, nisl ut eleifend mollis, lectus nunc ultrices ex, quis egestas
                        ex sem sit amet sem. Quisque tristique semper nulla. Nullam nec tincidunt neque. Morbi lacinia
                        libero non molestie laoreet.

                        Morbi ullamcorper sapien vitae lectus efficitur, ac congue ipsum egestas. Cras vehicula eget
                        justo quis sodales. Sed et massa tristique, lobortis elit sit amet, aliquam tortor. Pellentesque
                        porttitor, urna at rhoncus laoreet, magna neque consectetur nulla, nec commodo arcu nunc et
                        nisi. Maecenas consectetur, nisl ut mollis molestie, nulla sapien consequat augue, nec posuere
                        magna velit blandit ante. Cras sagittis velit consequat augue mollis posuere. Quisque magna
                        turpis, sollicitudin ut ultrices sit amet, gravida a dolor. Nullam faucibus nunc nec massa
                        aliquet, et elementum magna ultrices. Proin sit amet sagittis turpis, in dapibus arcu. Nunc
                        volutpat et nunc vitae laoreet.

                        Donec suscipit tempor augue, non malesuada nunc pretium quis. Ut pulvinar sapien vel est varius,
                        eget sagittis orci tincidunt. Vivamus luctus convallis nibh, id placerat lorem faucibus non.
                        Curabitur felis nulla, mattis eu tincidunt ultrices, lacinia nec felis. Quisque non eleifend
                        lacus, a efficitur tellus. Sed lobortis bibendum ipsum, ac fringilla nisi posuere at. Curabitur
                        maximus dui risus, vel finibus tortor accumsan quis. Donec malesuada dolor non varius tempus.
                        Nulla rhoncus neque arcu, ac luctus mi faucibus in. Mauris id dictum orci, eu posuere nisl.

                        Morbi vel magna fermentum arcu malesuada rutrum vitae non elit. Praesent vulputate hendrerit
                        metus. Praesent id pellentesque nisi. Fusce fermentum velit non ante efficitur dictum. Aliquam
                        fringilla, mi sit amet consequat dapibus, nisl nisi convallis eros, quis commodo nibh libero
                        dignissim nisi. Praesent egestas nibh nibh, et lobortis nibh convallis eget. Ut felis nisi,
                        sagittis convallis luctus a, eleifend ac nisi. Quisque efficitur quam lacus, id condimentum ante
                        egestas in. Sed et imperdiet justo, sed venenatis velit. Mauris id eros nec ligula lacinia
                        fermentum vitae in metus. Aliquam congue, nisl non posuere placerat, diam orci luctus justo, ac
                        molestie odio sapien eget eros. Sed finibus, magna eu molestie euismod, ipsum felis mollis
                        dolor, eget finibus lorem massa sit amet nunc. In in arcu nisl. Suspendisse nunc massa, bibendum
                        a dui suscipit, condimentum dignissim turpis. Duis vitae efficitur ligula.
                    </p>
                    </section>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-block btn-round"><i class="icon wb-menu" aria-hidden="true"></i>Terbitkan Artikel</button>
        </div>
        <br>
    </div>
    <!-- End Page -->

</body>
@endsection
