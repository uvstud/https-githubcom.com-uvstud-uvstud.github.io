<?php

//pievieno klases
require_once ("./libload.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <script src="js/main.js"></script>


    <title>Sazina</title>
</head>

<body>
    <?php require_once("./navigation.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">***</div>
            <div class="col-md-4">

                <!--ERROR pazinojums uznirsosais-->
                <div class="alert alert-warning error">
                    <strong>Warning</strong> Indicates a warning that might need attention.
                </div>

                <!-- OK -->
                <div class="alert alert-success oki">
                    <strong>Success!</strong> Indicates a successful or positive action.
                    <p class="inputtext"></p>
                </div>

                <form method="post" action="./sazinaa.php">
                    <div class="form-group">
                        <label for="user">Lietotajs:</label>
                        <input type="text" class="form-control" id="iduser" name="user">
                    </div>

                    <div class="form-group">
                        <label for="emai">E-pasts:</label>
                        <input type="text" class="form-control" id="idemail" name="email">
                    </div>

                    <button type="button" class="btn btn-info" id="idsaglabat" name="saglabat">Saglabat</button>
                </form>
            </div>
            <div class="col-md-4">***</div>
            <div class="col-md-2">***</div>
        </div>
    </div>

    <?php
            if(isset($_POST['register'])){
            $db->insertUser($_POST['email'],$_POST['pswd']);

    ?>


</body>
</html>