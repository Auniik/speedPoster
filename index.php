<?php

require 'vendor/autoload.php';
var_dump(\src\Manager\Client\Client::get_os());
   var_dump(\src\Manager\Client\Client::get_browser());
   var_dump(\src\Manager\Client\Client::get_device());
   var_dump(\src\Manager\Client\Client::get_ip());
die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🍻 SpeedPoster</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" rel="stylesheet">
    <!-- CSS Reset -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" rel="stylesheet">
    <!-- Milligram CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <style>
        #file {
            box-shadow: 0 3px 11px 0 #d8d8d8;
            padding: 8px;
            width: 70%;
        }
        button, input, textarea {
            box-shadow: 0 3px 11px 0 #d8d8d8;
        }
    </style>
</head>
<body>



<!-- `.container` is main centered wrapper -->
<div class="container">

    <div class="row">
        <h3 class="column">SpeedPoster 🍻</h3>
    </div>

    <br>
    <div class="row">
        <div class="column column-offset-25 column-75">
            <label for="file"> Choose .xlsx file here</label>
            <input accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="" id="file" name="file"
                   type="file">
        </div>
    </div>


    <form id="form" action="post.php" enctype="multipart/form-data">
        <div id="dateFixBlock">
            <div class="row">
                <div class="column column-offset-25 column-10">
                    <label>Start</label>
                </div>
                <div class="column column-10">
                    <label>End</label>
                </div>
                <div class="column column-20">
                    <label>Date</label>
                </div>
            </div>
            <div class="row dateFixRow">
                <div class="column column-offset-25 column-10">
                    <input max="300" min="1" class="start" name="start[]" placeholder="Start" type="number" value="1" required>
                </div>
                <div class="column column-10">
                    <input max="300" min="1" class="end" name="end[]" placeholder="End" type="number" required>
                </div>
                <div class="column column-20">
                    <input autocomplete="off" max="300" min="1" class="date" name="date[]" required
                           placeholder="yyyy-mm-dd" type="text">
                </div>
                <div>
                    <button class="button button-outline deleteBtn" style="display: none">- Delete</button>
                    <button type="button" class="addBtn">+ Add More</button>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="column column-offset-25 buttons-block">
                <button   class="button submitButton" >Generate</button>
            </div>
        </div>
    </form>


    <br>
    <div class="row" >
        <div class="column column-100" >
            <div style="display: flex; justify-content: space-between">
                <label> Script : </label>
                <button onclick="copy()" class="button button-clear">Copy</button>
            </div>

            <textarea id="script"
                    placeholder="Copy this script and paste it into console where you want to inject it..."
                    style="height: 550px"></textarea>

        </div>
    </div>

</div>
<footer>
    <div class="container">
        All right reserved © <a href="http://auniik.github.io" target="_blank">Auniik</a>
    </div>
</footer>
<script src="/src/assets/main.js"></script>
</body>
</html>