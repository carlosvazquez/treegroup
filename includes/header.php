<?php 

function ActiveClass($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tree Group Latinoamérica &middot; México</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Centro de Atención a Emergencias" />
    <meta name="keywords" content="Emergencias, Centro Aten´ción" />
    <meta name="author" content="Carlos Vazquez - @carlosvazquez" />

    <!-- CSS for Dev 
    <link href="css/bootstrap.dev.css" rel="stylesheet"> -->

    <!-- CSS for Production -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!--
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
-->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,700italic,400italic' rel='stylesheet' type='text/css'>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.ico">
  </head>

  <body>
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">