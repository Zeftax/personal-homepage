<!DOCTYPE html>
<link rel="stylesheet" href="https://assets.zdenekborovec.cz/common/styles.css?TIMESTAMP">

<style>
	#header {
		border-bottom: double;
	}

	#header h1{
		padding-left: 1em;
		padding-right: 1em;
	}

	#header ul {
		background-color: #202020;
		background-image: url("https://assets.zdenekborovec.cz/common/planks_dark_tile.png");
		background-repeat: repeat;
		padding: 0;
		margin: 0;
		text-align: center;
		display: flex;
		list-style-type: none;
	}

	#header ul li {
		float: left;
		position: relative;
		flex-grow: 1;
		border-style: solid;
		border-width: thin;
		border-color: black;
	}

	#header ul li a {
		color: white;
		text-decoration: none;
		font-family: sans-serif;
		font-weight: bold;
		display: block;
	}
</style>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title><?= isset($PageTitle) ? $PageTitle : "Zdenek Home Page"?></title>
	</head>
	<body>
		<main>
		<div id="header">
			<h1> Zdenek Borovec Home Page </h1>
			<ul>
				<li><a href="https://www.zdenekborovec.cz">About</a></li>
				<li><a href="http://www.zdenekborovec.cz/blog">Blog</a></li>
				<li>Gallery</li>
				<li>Random tools</li>
			</ul>
		</div>
