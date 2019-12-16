<?php

$page = $_GET['page']; // Set page variable in URI
define('ROOT', dirname(__FILE__)); // Define absolute path to this file's directory

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Naviation</title>
	<meta name="author" content="GiveMeAnthony@users.noreply.github.com">
	<meta name="description" content="PHP-based site navigation template">
</head>
<body>
	<!-- Navigation makes requests through GET -->
	<nav>
		<a href="index.php?page=home">Home</a>
		<a href="index.php?page=about">About</a>
		<a href="index.php?page=projects">Projects</a>
		<a href="index.php?page=blog">Blog</a>
		<a href="index.php?page=contact">Contact</a>
	</nav>
	<section>

<?php

// Switch section content based on URI
switch($page) {
	case 'home':
		include(ROOT.'/page/home.php');
		break;
	case 'about':
		include(ROOT.'/page/about.php');
		break;
	case 'projects':
		include(ROOT.'/page/projects.php');
		break;
	case 'blog':
		include(ROOT.'/page/blog.php');
		break;
	case 'contact':
		include(ROOT.'/page/contact.php');
		break;
	default:
		include(ROOT.'/page/home.php');
		break;
}

?>

	</section>
</body>
</html>