<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
        <style>
            html {
                font-size: 14px;
                scroll-behavior: smooth
            }
            @media (min-width: 768px) {
                html {
                    font-size: 16px;
                }
            }

            body{
                background: #7171710d 
            }
            img{
                height:150px;
                width:100%;
            }

            div [class^="col-"]{
                padding-left:5px;
                padding-right:5px;
            }

            th { 
                position: sticky; 
                top: 0; 
                background:#fff; 
            }
            footer{
                font-size: 15px;
                color: #888;
                padding: 5px 5px 5px 10px;
            }
            a {color: #5a5a5a;}
            a:hover {color: #b3b0b0; text-decoration: none}
            .bg-white{
                background: white
            }
            .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
            .card{
                transition:0.5s;
                /* cursor:pointer; */
                border: none;
                overflow: hidden;
            }
            .card-title{  
                font-size:15px;
                transition:1s;
                /* cursor:pointer; */
            }
            .card-title i{  
                font-size:15px;
                transition:1s;
                cursor:pointer;
                color:#ffa710
            }
            .card-title i:hover{
                transform: scale(1.25) rotate(100deg); 
                color:#18d4ca;
            
            }
            .card:hover{
                transform: scale(1.05);
                box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
            }
            .card-text{
                height:80px;  
            }

            .card::before, .card::after {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                transform: scale3d(0, 0, 1);
                transition: transform .3s ease-out 0s;
                background: rgba(255, 255, 255, 0.1);
                content: '';
                pointer-events: none;
            }
            .card::before {
                transform-origin: left top;
            }
            .card::after {
                transform-origin: right bottom;
            }
            .card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
                transform: scale3d(1, 1, 1);
            }
            .row-cards {
                padding: 15px 10px 15px 10px;
                background: #ffffff;
            }
            .table-responsive{
                display: block;
                width: 100%;
                height: 550px;
                overflow-y: auto; 
                overflow-x: auto; 
                font-size: 14px;
            }

            /* width */
            .table-responsive::-webkit-scrollbar {
                width: 5px;
                height: 5px;
                border-radius: 10px
            }

            /* Track */
            .table-responsive::-webkit-scrollbar-track {
                background: #f1f1f1; 
            }
            
            /* Handle */
            .table-responsive::-webkit-scrollbar-thumb {
                background: rgb(189, 189, 189); 
            }

            /* Handle on hover */
            .table-responsive::-webkit-scrollbar-thumb:hover {
                background: #888; 
            }
            .input-group-append {
                position: absolute;
                z-index: 4;
                margin-top: 6px;
                margin-left: 10px;
                color: #bdbdbd;
            }
        </style>

        @laravelPWA
    </head>
    <body>

        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white shadow-sm text-default fixed-top">
            <h5 class="my-0 mr-md-auto font-weight-normal" > 
                <a href="#home">Covid-19</a>
            </h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="#grafik">Grafik</a>
                <a class="p-2 text-dark" href="#indonesia">Indonesia</a>
                <a class="p-2 text-dark" href="#global">Global</a>
                <a class="p-2 text-dark" href="#informasi">Informasi</a>
            </nav>
            
            {{-- <form class="form-inline mt-2 mt-md-0" _lpchecked="1">
                <input class="form-control mr-sm-2 col-sm-8" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </div>
        <div class="mt-5" id="home">
            @yield('container')
        </div>

        <footer class="bg-white mt-3">
            <div class="container">
                &copy;<span>Covid-19 - Tidak ada jaminan data yang ditampilkan akurat 100%</span>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script type="text/javascript">
            // Initialize the service worker
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('/serviceworker.js', {
                    scope: '.'
                }).then(function (registration) {
                    // Registration was successful
                    console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
                }, function (err) {
                    // registration failed :(
                    console.log('Laravel PWA: ServiceWorker registration failed: ', err);
                });
            }
        </script>
        <script>
            function searchFunction(inputId, tableId) {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById(inputId);
                filter = input.value.toUpperCase();
                table = document.getElementById(tableId);
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                    }
                }
            }
        </script>
    </body>
</html>
