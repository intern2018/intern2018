<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sidebar-menu.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
             <div id="wrapper">
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand"> <a href="#">Home </a></li>
                        <li> <a href="issued">issued </a></li>
                        <li> <a href="user">User </a></li>
                        <li> <a href="form">form </a></li>
                    </ul>
                </div>

                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <div>
                                    <h1>Sidebar <small>menu </small></h1>
                                </div>
                                <p>Paragraph</p>
                                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>   
    </body>
</html>

