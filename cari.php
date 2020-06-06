<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta charset="utf-8">
                <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                    <link href="assets\bootstrap\css\bootstrap.min.css" rel="stylesheet">
                        <link href="assets\css\fontawesome-free\css\all.min.css" rel="stylesheet">
                            <link href="assets\css\style.css" rel="stylesheet">
                                <title>
                                    Cari Editor
                                </title>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " style="background-color: purple">
            <a style="color: black" class="navbar-brand font-weight-bold" href="index.php">
                <i class="fas fa-edit">
                </i>
                DATA EDITOR
            </a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a style="color: black" class="nav-link" href="cari.php">
                            PENCARIAN EDITOR
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a style="color: black" class="nav-link" href="tampil.php">
                            TAMPILKAN EDITOR
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a style="color: black" class="nav-link" href="about.php">
                            ABOUT ME
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="input-group mb-3 mt-5 w-50 mx-auto">
                        <input aria-describedby="button-addon2" aria-label="Recipient's username" class="form-control input" placeholder="Nama Editor" type="text">
                            <div class="input-group-append">
                                <a class="btn btn-primary search text-white" id="button-addon2" type="button">
                                    <li class="fas fa-search">
                                    </li>
                                </a>
                            </div>
                        </input>
                    </div>
                    <hr class="my-4">
                    </hr>
                    <div class="result text-center">
                    </div>
                </div>
            </div>
        </div>
        <script src="assets\bootstrap\js\bootstrap.min.js">
        </script>
        <script src="assets\bootstrap\js\jquery.min.js">
        </script>
        <script>
            $(".search").click(function(){
                let loading = '<img alt="loading......" class="ml-auto" src="assets\\img\\loading.gif" width="30%">'
                $(".result").html(loading);
            loadData();
        });

        function loadData(){
            $.get('core/get.php?q="'+$(".input").val()+'"', function(data){
                $(".result").html(data);
            });
        }
        </script>
    </body>
</html>
