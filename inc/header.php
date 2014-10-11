<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
		<title>Charles Thomas | Developer</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
    
    <!-- header containg navigation and title -->
		<header>
      <a href="index.html" id="logo">
        <h1>Charles Attwood Thomas</h1>
        <h2>Developer</h2>
      </a>
      <nav class="navigation">
        <ul>
          <li><a href="index.php" class="<?php if ($page == 'portfolio') { echo 'selected';}; ?>">Portfolio</a></li>
          <li><a href="about.php" class="<?php if ($page == 'about') { echo 'selected';}; ?>">About</a></li>
          <li><a href="contact.php" class="<?php if ($page == 'contact') { echo 'selected';}; ?>">Contact</a></li>
        </ul>
      </nav>
    </header>
  
    <div id="wrapper">