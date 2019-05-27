
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}" media="screen,projection" />

        <!--Let browser know website is optimized for mobile-->
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Gerir Contrataçãoes') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
       
        <style>
            .figuretion {

                width: 50%;  
                text-align: center;
            }
            .figuretion img{
                width: 60%;
                border-radius: 55%;
                margin: auto;
                margin-top: 5%;


            }
            .frm1{
                margin: auto;
            }
            html
            {
                height: 100%;
                text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
                box-shadow: inset 0 0 5rem rgba(0, 0, 0, .3);
            }
        </style>


        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
google.charts.load("current", {packages: ['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ["Element", "Density", {role: "style"}],
        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "silver"],
        ["Gold", 19.30, "gold"],
        ["Platinum", 21.45, "color: #e5e4e2"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
        {calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation"},
        2]);

    var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 1050,
        height: 700,
        bar: {groupWidth: "95%"},
        legend: {position: "none"},
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
}
        </script>
        <script type="text/javascript">
            google.charts.load("current", {packages: ['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ["Element", "Density", {role: "style"}],
                    ["Copper", 8.94, "blue"],
                    ["Silver", 10.49, "green"],
                    ["Gold", 19.30, "red"],
                    ["Platinum", 21.45, "color: #e5e4e2"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                    {calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation"},
                    2]);

                var options = {
                    title: "Density of Precious Metals, in g/cm^3",
                    width: 1050,
                    height: 700,
                    bar: {groupWidth: "95%"},
                    legend: {position: "none"},
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_material"));
                chart.draw(view, options);
            }
        </script>
        <script type="text/javascript">
            google.charts.load("current", {packages: ['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ["Element", "Density", {role: "style"}],
                    ["Copper", 8.94, "#b87333"],
                    ["Silver", 10.49, "silver"],
                    ["Gold", 19.30, "gold"],
                    ["Platinum", 21.45, "color: #e5e4e2"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                    {calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation"},
                    2]);

                var options = {
                    title: "Density of Precious Metals, in g/cm^3",
                    width: 1050,
                    height: 700,
                    bar: {groupWidth: "95%"},
                    legend: {position: "none"},
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_canes"));
                chart.draw(view, options);
            }
        </script>
    </head>

    <body>
        <div id="app">
            <nav >
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="{{ url('/') }}" class="brand-logo">{{ config('app.name', 'Gerir Contrataçãoes') }}</a>
                        <a class="button-collapse" data-activates="mobile-nav" href="#">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            @guest
                            @else
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>

                            <!-- DROPDOWN TRIGGER -->
                            <li >
                                <a class="dropdown-button" 
                                   data-activates="cadastrar" href="#!">Cadastrar
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-button" 
                                   data-activates="consultar" href="#!">Consultar
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-button" 
                                   data-activates="my-dropdown" href="#!">Dropdown
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-button" 
                                   data-activates="my-dropdown" href="#!">Dropdown
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                            @endguest
                            <!-- BUTTON LINK -->
                            @guest <!-- não logado  -->
                            <li>
                                <a class="btn waves-effect waves-light"  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li>
                                <a class="btn waves-effect waves-light"  href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            <!-- ICON LINK PERSON -->
                            @else
                            <li >
                                <a class="dropdown-button" 
                                   data-activates="my-person" href="#!"> {{ Auth::user()->name }}
                                    <i class="material-icons right">person</i>
                                </a>
                            </li>
                            @endguest
                        </ul>
                        @guest
                        @else
                        <ul class="side-nav" id="mobile-nav">
                            <li>
                                <a href="#"><i class=" material-icons">home</i></a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                        @endguest
                    </div>
                </div>

            </nav>

            <!-- DROPDOWN MENU -->
            @guest
            @else
            <ul id="cadastrar" class="dropdown-content">              
                <li>
                    <a href="#">Colaboradores</a>
                </li>
                <li>
                    <a href="#">Entidades</a>
                </li>
                <li>
                    <a href="#">Contratos</a>
                </li>
            </ul>
            <ul id="consultar" class="dropdown-content">
                <li>
               
                    <a href="{{route('usuarios.index')}}"><i class="material-icons">people</i> Usuários</a>
                </li>
                <li>
                    <a href="{{route('colaboradores.index')}}"><i class="material-icons">people_outline</i> Colaboradores</a>
                </li>
                <li>
                    <a href="#">Entidades</a>
                </li>
                <li>
                    <a href="#">Contratos</a>
                </li>
            </ul>
            <ul id="my-person" class="dropdown-content">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        {{ __('Logout')}} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>


            <main >
                @yield('content')
            </main>

        </div>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/materialize.min.js')}}"></script>

        <script>
                           $(document).ready(function () {
                               $('.dropdown-button').dropdown({
                                   constrainWidth: false,
                                   hover: true,
                                   belowOrigin: true,
                                   alignment: 'left'
                               });

                               // JAVASCRIPT START HERE //
                               $('.button-collapse').sideNav();



                           });
        </script>
    </body>
</html>





