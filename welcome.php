<?php
// Initialize the session
require 'session.php';
$val = isLoggedIn();

if ($val == false) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music</title>

    <link href="https://getbootstrap.com//docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <link href="welcome.css" rel="stylesheet" />
    <style>

    </style>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="padding-left: 20px">
            <div class="container-fluid">
                <a class="navbar-brand" style="font-size: 28px;" href=""><?php echo ucfirst(userName()); ?></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0"></ul>
                    <form class="d-flex" style="padding-right: 100px" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    </form>

                    <form class="d-flex" style="padding-right: 30px" method="post" action="newSong.php">
                        <button class="btn btn-outline-success" type="submit">
                            + Add Song
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main style="padding: 30px;">
        <!-- Three columns of text below the carousel -->
        <h1 style="padding-bottom: 20px; font-size: 50px;">Top 10 Songs</h1>
        <div class="row">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Artwork</th>
                        <th>Song</th>
                        <th>Date of Release</th>
                        <th>Artists</th>
                        <th>Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="addSong.php" method="post">
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" class="rounded-circle" />
                                </div>
                            </td>
                            <td>
                                Someone You Loved
                            </td>
                            <td>
                                July 21, 2019
                            </td>
                            <td>Lewis Capaldi</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </td>
                        </tr>
                    </form>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt="" />
                            </div>
                        </td>
                        <td>Circles</td>
                        <td>September 27, 2019</td>
                        <td>Post Malone</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt="" />
                            </div>
                        </td>
                        <td>Intentions</td>
                        <td>January 02, 2020</td>
                        <td>Justin Bieber, Ouavo</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette">
            <h1 style="padding-bottom: 20px; font-size: 50px;">Top 10 Artists</h1>
            <div class="row">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Artists</th>
                            <th>Date of Birth</th>
                            <th>Songs</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Active</td>
                            <td>July 21, 2019</td>
                            <td>Someone You Love, Before You Go, Bruises, Hold me While you Wait</td>
                        </tr>
                        <tr>
                            <td>Post Malone</td>
                            <td>September 27, 2019</td>
                            <td>Circles, Rcokstar, SunFlower, Psycho, Wow, Better now</td>
                        </tr>
                        <tr>
                            <td>Justin Beiber, Quavo</td>
                            <td>January 02, 2020</td>
                            <td>Intentions, Let me Love you, Despacito, Yummy, i don't care</td>
                        </tr>
                    </tbody>
                </table>
            </div>
</body>

</html>