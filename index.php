<?php

$test = "./resources/img/test.png"

?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Soundboard</title>

    <style>
        .sound-color-p{
            background-color: #4D5560;
        }

        .sound-nav-links:hover{
            border-bottom: solid #4CA560;
        }
        .sound-nav-links{
            border:  solid transparent;
        }



        .circular--square {
            position: absolute;
            border-radius: 50%;
            z-index: 2;
            background: #4D5560;
            border: 5px;
            margin-left: -13px;
            margin-top: -13px;

        }

        .sound-card-group
        {
            margin-left: auto;
            margin-right: auto;
            display: flex
        }




    </style>

</head>
<body>

<div class="sound-color-p">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light sound-color-p">
            <img src="./resources/img/icon-sound.png" width="50" height="50" class="d-inline-block align-top mr-3" alt="">
            <a class="navbar-brand" href="#"><h3 class="text-white">Soundboard</h3></a>

            <div class="collapse navbar-collapse container ml-5" id="navbarNav">
                <ul class="navbar-nav ml-5">
                    <li class="nav-item active pl-4">
                        <a class="nav-link text-white" href="#"><h4 class="sound-nav-links">Sounds</h4></a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link text-white" href="#"><h4 class="sound-nav-links">Own Sounds</h4></a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link text-white" href="#">
                            <h4 class="sound-nav-links">Profile</h4>
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <a href="#" class="nav-link text-white">
                    <img src="./resources/img/icon-lock.png" width="50" height="50" class="d-inline-block align-top mr-3" alt="">
                    <h5 class="sound-nav-links">Login</h5>
                </a>
            </div>
        </nav>
    </div>
</div>


<div class="container">

    <div class="row">
        <div class="sound-card-group">
            <div class="mt-5 ml-3">
                <img class="circular--square" src="resources/img/icon-profile.png" alt="Sound-card-profile-image" height="72" width="72"/>
                <div class="card m-3 sound-card" style="width: 15rem; ">
                    <div class="container">
                        <img class="card-img-top" src="./resources/img/icon-sound.png" alt="Card image cap" width="226" height="140">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Author: Nico<br>
                            Category: Lustig, Test
                        </p>
                        <div class="container text-center" >
                            <button href="#" class="btn btn-primary">Edit</button>
                            <button href="#" class="btn btn-primary">Play</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 ml-3">
                <img class="circular--square" src="resources/img/icon-profile.png" alt="Sound-card-profile-image" height="72" width="72"/>
                <div class="card m-3 sound-card" style="width: 15rem; ">
                    <div class="container">
                        <img class="card-img-top" src="./resources/img/icon-sound.png" alt="Card image cap" width="226" height="140">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Author: Nico<br>
                            Category: Lustig, Test
                        </p>
                        <div class="container text-center" >
                            <button href="#" class="btn btn-primary">Edit</button>
                            <button href="#" class="btn btn-primary">Play</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 ml-3">
                <img class="circular--square" src="resources/img/icon-profile.png" alt="Sound-card-profile-image" height="72" width="72"/>
                <div class="card m-3 sound-card" style="width: 15rem; ">
                    <div class="container">
                        <img class="card-img-top" src="./resources/img/icon-sound.png" alt="Card image cap" width="226" height="140">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Author: Nico<br>
                            Category: Lustig, Test
                        </p>
                        <div class="container text-center" >
                            <button href="#" class="btn btn-primary">Edit</button>
                            <button href="#" class="btn btn-primary">Play</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 ml-3">
                <img class="circular--square" src="resources/img/icon-profile.png" alt="Sound-card-profile-image" height="72" width="72"/>
                <div class="card m-3 sound-card" style="width: 15rem; ">
                    <div class="container">
                        <img class="card-img-top" src="./resources/img/icon-sound.png" alt="Card image cap" width="226" height="140">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Author: Nico<br>
                            Category: Lustig, Test
                        </p>
                        <div class="container text-center" >
                            <button href="#" class="btn btn-primary">Edit</button>
                            <button href="#" class="btn btn-primary">Play</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="sound-card-group">
            <div class="mt-5 ml-3">
                <img class="circular--square" src="resources/img/icon-profile.png" alt="Sound-card-profile-image" height="72" width="72"/>
                <div class="card m-3 sound-card" style="width: 15rem; ">
                    <div class="container">
                        <img class="card-img-top" src="./resources/img/icon-sound.png" alt="Card image cap" width="226" height="140">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Author: Nico<br>
                            Category: Lustig, Test
                        </p>
                        <div class="container text-center" >
                            <button href="#" class="btn btn-primary">Edit</button>
                            <button href="#" class="btn btn-primary">Play</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 ml-3">
                <img class="circular--square" src="resources/img/icon-profile.png" alt="Sound-card-profile-image" height="72" width="72"/>
                <div class="card m-3 sound-card" style="width: 15rem; ">
                    <div class="container">
                        <img class="card-img-top" src="./resources/img/icon-sound.png" alt="Card image cap" width="226" height="140">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Author: Nico<br>
                            Category: Lustig, Test
                        </p>
                        <div class="container text-center" >
                            <button href="#" class="btn btn-primary">Edit</button>
                            <button href="#" class="btn btn-primary">Play</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 ml-3">
                <img class="circular--square" src="resources/img/icon-profile.png" alt="Sound-card-profile-image" height="72" width="72"/>
                <div class="card m-3 sound-card" style="width: 15rem; ">
                    <div class="container">
                        <img class="card-img-top" src="./resources/img/icon-sound.png" alt="Card image cap" width="226" height="140">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Author: Nico<br>
                            Category: Lustig, Test
                        </p>
                        <div class="container text-center" >
                            <button href="#" class="btn btn-primary">Edit</button>
                            <button href="#" class="btn btn-primary">Play</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 ml-3">
                <img class="circular--square" src="resources/img/icon-profile.png" alt="Sound-card-profile-image" height="72" width="72"/>
                <div class="card m-3 sound-card" style="width: 15rem; ">
                    <div class="container">
                        <img class="card-img-top" src="./resources/img/icon-sound.png" alt="Card image cap" width="226" height="140">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Author: Nico<br>
                            Category: Lustig, Test
                        </p>
                        <div class="container text-center" >
                            <button href="#" class="btn btn-primary">Edit</button>
                            <button href="#" class="btn btn-primary">Play</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>