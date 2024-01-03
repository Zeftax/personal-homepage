<!DOCTYPE html>
<link rel="stylesheet" href="http://assets.zdenekborovec-dev.cz/common/styles.css?1703173954">

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
		background-image: url("http://assets.zdenekborovec-dev.cz/common/planks_dark_tile.png");
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
				<li><a href="http://www.zdenekborovec-dev.cz">About</a></li>
				<li><a href="http://www.zdenekborovec-dev.cz/blog">Blog</a></li>
				<li>Gallery</li>
				<li><a href="http://www.zdenekborovec-dev.cz/random">Random Tools</a></li>
			</ul>
		</div>
