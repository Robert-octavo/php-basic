<!DOCTYPE html>

<?php 

error_reporting( E_ALL );
ini_set( 'display_errors', 1);

function get_post_1_titulo() {
	return 'Lorem Ipsum dolor sit amet';
}
function get_post_2_titulo() {
	return 'Mauris lobortis, turpis sit amet pulvinar hendrerit';
}
function get_post_1_contenido(){
	return 'Vero quam reprehenderit, expedita libero esse in exercitationem nisi similique maiores saepe accusamus repudiandae rem natus officia, reiciendis provident corrupti perferendis harum?';
}
function get_post_2_contenido(){
	return 'Temporibus, odio amet esse laudantium corrupti libero necessitatibus harum tempore. Consequuntur consequatur aliquam error aperiam doloremque quasi nisi, culpa ex quia deserunt.';
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Micro CMS</title>
	<link rel="stylesheet" href="assets/style.css"></head>
<body>

<nav id="site-navigation" role="navigation" class="row row-center">
	<div class="column">
		<h1>
			<a href="index.php">Micro CMS</a>
		</h1>
		<ul class="main-menu column clearfix">
		</ul>
	</div>
</nav>

<div id="content" >
	<div class="post">
		<div>
			<h2><?php echo get_post_1_titulo(); ?></h2>
			<div><?php echo get_post_1_contenido(); ?></div>
		</div>
		<div>
			<h2><?php echo get_post_2_titulo(); ?></h2>
			<div><?php echo get_post_2_contenido(); ?></div>
		</div>
	</div>
</div>

<footer id="footer">
	<div id="inner-footer">
		Curso de Introducción a PHP en Domestika
	</div>
</footer>
</body>
</html>
