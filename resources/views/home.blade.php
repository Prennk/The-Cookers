<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="{{asset ('css/style-home.css')}}" />
        <link
            rel="stylesheet"
            type="text/css"
            href="fontawesome/css/all.min.css"
        />

        <title>HOME</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <img
                    src='{{asset ('assets/img/logo.png')}}'
                    alt=""
                />
                <!-- <a class="navbar-brand text-white" href="index.html"><strong>Bakso</strong> Solo Baru</a> -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link mr-4" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-4" href="#">RECEIPT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-4" href="#">FAVOURITE</a>
                        </li>

                        <li>
                        <button class="upload-resep">
                          Upload Receipt
                        </button>
                      </li>

                      <li>
                        <button class="profil">
                          Profile
                        </button>
                      </li>
                    </ul>
                </div>

                <div class="hamburger">
                    <ul>
                        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
                    </ul>
                </div>

                        <!-- <li class="nav-item">
                            <a class="nav-link mr-4" href="#">MY RECEIPT</a>
                        </li> -->

                        <!-- <form>
                            <input
                                type="text"
                                id="kolom-pencarian"
                                class="pencarian"
                                placeholder="Search"
                            />
                            <i class="fa-thin fa-magnifying-glass"></i>
                        </form> -->
            </div>
        </nav>
        <!-- Akhir Navbar -->

        <!-- Menu -->
        <div class="container">
            <!-- <a href="#" class="btn btn-success mt-3">UPLOAD RECEIPT</a> -->

            <h3 class="RT">LATEST RECEIPT</h3>
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="card border">
                        <img
                            src="{{asset ('assets/images/bakso.jpeg')}}"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                          <button class="button">Meatballs</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border">
                        <img
                            src="{{asset ('assets/images/mieayam.jpg')}}"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                          <button class="button">Noodle</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border">
                        <img
                            src="{{asset ('assets/images/nasgor.jpg')}}"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                          <button class="button">Fried Rice</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border">
                        <img
                            src="{{asset ('assets/images/mieayambakso.jpg')}}"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                          <button class="button">Noodle with Meatball</button>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="PR">POPULAR RECEIPT</h3>

            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="card border">
                        <img
                            src="{{asset ('assets/images/lele.jpg')}}"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                          <button class="button">Grilled "Lele"</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border">
                        <img
                            src="{{asset ('assets/images/tehobeng.jpg')}}"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                          <button class="button">Ice Tea</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border">
                        <img
                            src="{{asset ('assets/images/juspukat.jpg')}}"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                          <button class="button">Avocado Juice</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border">
                        <img
                            src="{{asset ('assets/images/esjeruk.jpg')}}"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                          <button class="button">Orange Juice</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            </div>
        </div>
        <!-- Akhir Menu -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"
        ></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
    </body>
</html>
