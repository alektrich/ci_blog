<!DOCTYPE html>
<html>
	<head>
		<title>CI Series</title>

		<!-- Ovde ti fali uvlačenje (indentacija), pošto se to radi isto i za css, kao i za php kod.
		-->
		<style>
			body {
				background: #F2F2F2;
			}
			#wrapper {
				width: 980px;
				margin: 0 auto;
				background: #FFF;
				padding: 10px;
			}
			#container ul {
				padding-left: 0;
				margin-left: 0;
				background-color: #036;
				color: White;
				float: left;
				width: 100%;
				font-family: arial, helvetica, sans-serif;
			}
			#container ul li {
				display: inline;
			}
			#container ul li a {
				padding: 0.2em 1em;
				background-color: #036;
				color: White;
				text-decoration: none;
				float: left;
				border-right: 1px solid #fff;
			}
			#container ul li a:hover {
				background-color: #369;
				color: #fff;
			}
			a:link, a:active, a:viseted {
				text-decoration: underline;
				color: black;
			}
			a:hover {
				text-decoration: none;
				color: black;
			}
			#success {
				background: green;
				display: block;
				color: white;
				padding: 10px;
			}
			#error {
				background: red;
				display: block;
				color: white;
				padding: 10px;
			}
			#files {
				display: inline;
				clear: both;
			}
			#files li {
				list-style-type: none;
				float: left;
				padding-right: 10px;
			}
		</style>
	</head>
<body>
	<div id="wrapper">
		<h1>Trichko's blog</h1>
			<div id="container">
