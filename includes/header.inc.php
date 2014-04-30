<?php 
	include 'includes/functions.php';
	$title = titlePage();
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Truth About Tattoos - <?php echo ($title == 'Index') ? 'T.A.T.' : $title; ?></title>
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great|Metal+Mania' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>
<body>
	<section id="wrapper">
		<header>
			<div class="logo">
				<a href="index.php"></a>
			</div> <!-- end logo -->
			<div class="title">
				<p>Truth About Tattoos</p>
			</div>
			
			<nav>
				<div class="menu"><i class="fa fa-bars"></i></div>
				<ul>
					<?php 
					foreach ($pages as $link) {
				?>
				<li><a href="<?php echo $link . ".php"; ?>" <?php echo (check_page($link)) ? 'class="active"' : "" ; ?> title="<?php echo $link ?> page"><?php echo (ucfirst($link) == 'Addiction') ? 'Addiction?' : ucfirst($link); ?></a></li>
				<?php
					}
	 			?>
				</ul>
			</nav>
		</header> <!-- end header -->

		<section id="sidebar">

		</section> <!-- end sidebar -->

		<section id="content">