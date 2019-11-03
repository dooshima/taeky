<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

</head>
    <title>Takey</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Taeky</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>schedule">Schedule</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>trainer">Trainers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>post">Blog</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>home">Dashboard</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>contact">Contact Us</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      
      <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>sign">Sign Up</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>log">Login</a>
      </li>
    </ul>
    </form>
    

  </div>
</nav>
 

<div class="container">