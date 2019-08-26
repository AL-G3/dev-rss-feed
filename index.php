<?php 
include 'data.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Dev Rss feed | AL-G. </title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
	<link type="text/css" rel="stylesheet" href="dist/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="dist/css/main.css">
</head>
<body>
	<header>
		<h1>Rss Feed</h1>
		<p id="intro">This feed Utilizes PHP & JavaScript to show the new advancements in the Web Design. Thank you CSS-Trick, SidePoint, Tutorialzine and Css Weekly for the amazing content. For more Information about the Developer who made this visit: <a href="https://a-garcia.com">a-garcia.com</a> </p>
	</header>
	<main>
		<?php foreach($articles_to_display as $article) { ?>
		<article class="card medium deep-purple darken-1 z-depth-5 hoverable" data-link=<?php echo $article->link; ?> >
				<h5><?php echo substr($article->title, 0, 50) . "..."; ?></h5>
				<p class="flow-tex"><?php echo make_description_smaller($article->description)?></p>
			</article>		
		<?php } ?> 
	</main>
	<script src="dist/js/main.js"></script>
<body>
</html>
