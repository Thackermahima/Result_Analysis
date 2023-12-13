<!DOCTYPE html>
<html>
<head>
	<title>Upload csv File</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
		body {
			font-family: Arial, sans-serif;
			background-image: url("background_img.jpg");
			background-size: fit;
			background-position: center;
			background-position-y: 10%;
			background-repeat: no-repeat;
			
		}

		h1 {
			text-align: center;
			margin-top: 70px;
		}

		form {
			text-align: center;
			margin-top: 50px;
			border: 2px solid black;
			padding: 20px;
			background-color: white;
			width: 500px;
			margin-left: auto;
			margin-right: auto;
            margin-bottom: 14%;
		}

		input[type="file"] {
			margin-bottom: 20px;
		}

		input[type="submit"] {
			background-color: #419f89;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #419f89;
		}

		.message {
			text-align: center;
			margin-top: 50px;
			font-size: 24px;
		}
	</style>
</head>
<body>
<?php
include 'header.php';
?>
	<h1>Upload your CSV file here!</h1>
	<div class="mt-2">
                    <?php if (session()->has('message')){ ?>
                        <div class="alert <?=session()->getFlashdata('alert-class') ?>">
                            <?=session()->getFlashdata('message') ?>
                        </div>
                    <?php } ?>

                    <?php $validation = \Config\Services::validation(); ?>
                </div>
    <form method="post" action="<?= base_url('/upload') ?>" enctype="multipart/form-data">
		<label for="year">Year</label>
		<input type="number" id="year" name="year" required="required">
		<br>
		<br>
		<label for="sem">Semister</label>
		<select name="sem" id="sem">
			<option value="Sem1">Semister 1</option>
			<option value="Sem2">Semister 2</option>
			<option value="Sem3">Semister 3</option>
			<option value="Sem4">Semister 4</option>
			<option value="Sem5">Semister 5</option>
			<option value="Sem6">Semister 6</option>
		</select>
		<br>
		<br>
		<label for="file">Select CSV file to upload:</label><br>
		<br>
        <input type="file" id="file" name="file"><br>
        <input type="submit" name="submit" value="Upload">
	</form>


    <?php
include 'footer.php';
?>
</body>
</html>


