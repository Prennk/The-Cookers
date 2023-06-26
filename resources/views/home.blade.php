<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="icon" type="image/png" href="{{ asset('assets/cookers.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-home.css') }}" />
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="sweetalert2.min.css">

    <title>HOME</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="{{ asset('assets/logo.png') }}" alt="" />
            <!-- <a class="navbar-brand text-white" href="index.html"><strong>Bakso</strong> Solo Baru</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="/recipes/search-recipe/">RESEP</a>
                    </li>
                    <li>
                        <button class="upload-resep">
                            <a href="{{ route('recipes.upload-image') }}">Upload Resep</a>
                        </button>
                    </li>
                    <li>
                        <button class="profil">
                            <a href="{{ route('profiles.index') }}">Profil</a>
                        </button>
                    </li>
                    <li>
                        <button class="profil">
                            <a href="#" onclick="logoutConfirmation()">Keluar</a>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="hamburger">
                <ul>
                    <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Menu -->
    <div class="container">
        <!-- <a href="#" class="btn btn-success mt-3">UPLOAD RECEIPT</a> -->

        <h3 class="RT">RESEP TERBARU</h3>
        <div class="row mt-3">
            @foreach ($n_recipes as $recipe)
                <div class="col-md-3">
                    <div class="card border">
                        <img src="{{ asset($recipe->image_url) }}" class="card-img-top" alt="..." />
                        <a href="/recipes/{{ $recipe->id }}/detail">
                            <div class="card-body">
                                <button class="button">{{ $recipe->name }}</button>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>


        <h3 class="PR">RESEP POPULER</h3>

        <div class="row mt-3">
            @foreach ($f_recipes as $recipe)
                <div class="col-md-3">
                    <div class="card border">
                        <img src="{{ asset($recipe->image_url) }}" class="card-img-top" alt="..." />
                        <a href="/recipes/{{ $recipe->id }}/detail">
                            <div class="card-body">
                                <button class="button">{{ $recipe->name }}</button>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <br>
    </div>
    </div>
    <!-- Akhir Menu -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script-dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
</body>

</html>
