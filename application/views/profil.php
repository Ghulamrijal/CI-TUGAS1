<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;

	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 35px 0 15px;
		text-align: center;
	}

	#body img{
		width: 30%;
	}

	#container {
		margin: 50px;
		border: 1px solid #D0D0D0;
		width: 60%;
	}
	</style>
</head>
<body>

<div id="container">
	<h1><center>Biodata</center></h1>

	<div id="body">
		<p><b><h3>Universitas Gajayana Malang</h3></b></p>
		<img src="<?= base_url('assets/GRA.jpg'); ?>">
		<p>Nama : GHULAM RIJAL ARSYAD</p>
		<p>NIM : 19510009</p>
		<p>Prodi : Sistem Informasi </p>



	</div>
</div>

</body>
</html>