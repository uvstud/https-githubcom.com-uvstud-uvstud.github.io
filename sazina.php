<?php
//ieslēdz php kļuudu attelosanos
error_reporting(E_ALL);
ini_set('display_errors', '1');

//pievieno klases
require_once ("./Class/Template.php");

Template_class::getLibs();  // pievieno visas bilbiotekas kuras nepieciešams pieslēgt

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.1">
	<script src="js/main.js"></script>
	<script>
        $("document").ready(function() {
            $(".error").hide();				// pasleepj pazinojumu
            $(".oki").hide();
            $("#bemail").click(function () {
                var sEmail = $("#idemail").val();
                var sPass = $("#idpass").val();

                isEmpty($("#idemail").val());
                isEmpty($("#idpass").val());

            });
        });
	</script>


	<title>Sazina</title>

</head>

<body>
    <div class="mainbox">
        <section class="container">
    <!-- Navigation-->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#">MfinMen</a>

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index">Sākums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galerija.html">Galerija</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontakti.html">Kontakti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="sazina.php">Saziņa</a>
                    </li>

                </ul>
            </nav>
        </section>

		<!--<div class="main">-->
			<!--<form action="" method="">-->
					<!--<table >-->
						<!--<tr>-->
							<!--<th>Vards: </th>-->
							<!--<td><input type="text" name="name" placeholder="Vārds"></td>-->
						<!--</tr>-->
				<!---->
						<!--<tr>-->
							<!--<th>Parole: </th>-->
							<!--<td><input type="password" name="pass"></td>-->
						<!--</tr>-->

						<!--<tr>-->
							<!--<th>E-pasts: </th>-->
							<!--<td><input type="text" name="mail"></td>-->
						<!--</tr>-->
					<!--</table>-->
					<!--<br/>-->
			<!--<h1>Vai esi: </h1>-->
				<!--<input type="radio" name="jaut"/>Admins <br/>-->
				<!--<input type="radio" name="jaut"/>Lietotajs <br/>-->
				<!--<input type="radio" name="jaut"/>Pats nezini <br/>-->
				<!--<br/>-->

			<!--<h1>Izvelies iekārtu</h1>-->
			<!--<select name="11jaut">-->
					<!--<option></option>-->
					<!--<option>rooteris</option>-->
					<!--<option>swich</option>-->
					<!--<option>kabelis</option>	-->
			<!--</select>-->
				<!--<br/>-->
				<!--<br/>-->
				<!--<input type="submit" name="SEND">-->

			<!--</form>-->
		<!--</div>-->



		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">***</div>
				<div class="col-md-4">
	<!--ERROR -->
					<div class="alert alert-warning error">
						<strong>Warning</strong> Indicates a warning that might need attention.
					</div>
	<!-- OK -->
					<div class="alert alert-success oki">
						<strong>Success!</strong> Indicates a successful or positive action.
						<p class="inputtext"></p>
					</div>



					<form action="">
						<div class="form-group">
							<label for="emai">E-pasts:</label>
							<input type="text" class="form-control" id="idemail">
						</div>
						<div class="form-group">
							<label for="pass">Parole:</label>
							<input type="text" class="form-control" id="idpass">
						</div>

						<button type="button" class="btn btn-info" id="bemail">Saglabat</button>
					</form>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-2">***</div>
			</div>
		</div>
	 	
	</div>

</body>
</html>