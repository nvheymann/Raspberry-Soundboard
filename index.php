<?php

if(isset($_POST) && isset($_FILES['file']['name'])) {
    if (($_FILES['file']['name'] != "")) {
// Where the file is going to be stored#
        $target_dir = "resources/upload/img/";
        $file = $_FILES['file']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['file']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . "." . $ext;

// Check if file already exists
        if (file_exists($path_filename_ext)) {
            die("Error");
        } else {
            move_uploaded_file($temp_name, $path_filename_ext);

        }
    }
}
?>


<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Soundboard</title>
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
    <div class="sound-card-group d-flex justify-content-center">
        <div class="mt-5 ml-3 ">
            <button type="button" class="btn" data-toggle="modal" data-target="#addSound">
                <img class="circular--square p-2" src="resources/img/icon-add-sound.png" alt="Sound-card-profile-image" height=85" width="85"/>
            </button>
        </div>
    </div>
</div>


<div class="container">

    <div class="modal fade" id="addSound" aria-labelledby="addSound" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new Sound</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <div class="form-row">

                            <div class="col">
                                <label for="sound_title">Sound Title</label>
                                <input type="text" class="form-control" placeholder="Sound Title" id="sound_title" name="sound_title">
                            </div>

                            <div class="col">
                                <label for="file">Sound Bild</label>
                                <input type="file" class="form-control" id="sound_bild" name="file">
                            </div>

                        </div>
                        <button type="submit"  name="Add" value="submit" class="btn btn-primary">Submit</button>
                    </form>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>