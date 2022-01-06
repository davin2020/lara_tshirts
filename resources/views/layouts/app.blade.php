<html lang="en">

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
            /*pos fixed means footer covers pagination button on page1 but is ok on page2 for some reason ??*/
            position: inherit;
            left: 0;
            bottom: 0;
            width: 100%;
            /*light blues #61ccec or #c5f2ff */
            background-color: #5a2faf;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .footer a {
            color: yellow;
        }
        .footer a:visited {
            color: white;
        }
        /*hover option needs to come AFTER visited option */
        .footer a:hover {
            color: #61ccec;
        }
        
        .container {
            margin-top: 20px
        }
        h1 {
            margin-bottom: 20px;
        }
        .table {
            border-color: #5a2faf;
        }
        table.table-bordered{
            border:1px solid #5a2faf;
            /*margin-top:20px;*/
        }
        table.table-bordered > tbody > tr > th{
            border:1px solid #5a2faf;
        }
        table.table-bordered > tbody > tr > td{
            border:1px solid #5a2faf;
        }
        /* darker purple footer 572eaa */
        /* to improve contrast for WAVE accessibility of pagnation controls */
        .page-link {
            font-weight: 700;
            font-size: 1.2rem;
        }
    </style>

</head>

<body>
    @section('sidebar')

    @show

    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">

        <!-- <h5>Created by <a href="https://davin2020.github.io/" target="_blank">Davin Stirling</a></h5> -->
        <p>Created by <a href="https://davin2020.github.io/" target="_blank">Davin Stirling</a></p>
    </div>
</body>

</html>