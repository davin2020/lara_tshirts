<html>

<head>
    <!-- where does title come from -->
    <!-- <title>App Name - @yield('title')</title> -->
    <title>TShirt Collection App - Laravel 8 CRUD</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        /* lighter cfc9dd c6bae0 978daa ad97db 8977ad darker */
        body {
            background-color: #cfc9dd;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #5a2faf;
            color: white;
            text-align: center;
            padding: 5px;
        }
        .container {
            margin-top: 20px
        }
        /* darker purple footer 572eaa */
    </style>

</head>

<body>
    @section('sidebar')

    @show

    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">

        <h5>Created by <a href="https://davin2020.github.io/" target="_blank">Davin Stirling</a></h5>

    </div>
</body>

</html>