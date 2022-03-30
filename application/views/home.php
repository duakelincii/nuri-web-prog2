<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Halaman Dashboard</title>

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
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
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

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Selamat Datang Dihalaman Dashboard <img src="https://i.postimg.cc/KG14NSP8/tkthao219-bubududu-0zj-CT8.gif?dl=1" width="50px"/> </h1>
	

	<div id="body">
		<p>Silahkan Button di bawah ini untuk menentukan dibawa kehalaman berapa?</p>

		<code><a href="<?= base_url('contoh/contoh1') ?>" class="btn btn-primary">Contoh 1</a> Link Tentang Biodata <img src="https://i.postimg.cc/6tn2gXD7/tkthao219-bubududu-A9-Hfgo.gif?dl=1" width="50px"/></code>
		<code><a href="<?= base_url('contoh/contoh2') ?>" class="btn btn-primary">Contoh 2</a> Link Berhitung <img src="https://i.postimg.cc/ZJPNBSHk/love-bear-QNMggb.gif?dl=1" width="50px"/></code>
		<code><a href="<?= base_url('contoh/contoh3') ?>" class="btn btn-primary">Contoh 3</a> Link Bilangan Genap Atau Ganjil <img src="https://i.postimg.cc/tX2VkN82/love-bear.gif?dl=1" width="50px"/></code>

		<p>Berikut Adalah Link Penyemangat <img src="https://i.postimg.cc/5bYqtTD1/bubududu-panda-qk-Ti3-A.gif?dl=1" width="50px"/> <a href="<?= base_url('contoh/semangat') ?>" class="btn btn-success">Klik Disini</a></p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
