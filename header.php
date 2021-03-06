<?php
  include 'database.php';
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Contact Manager</title>

     <!--responsive -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <link rel="stylesheet" href="/css/style.css">
     <script src="/js/script.js"></script>

     <!--FONT AWESOME CDN -->
     <script src="https://use.fontawesome.com/3ddd43fed9.js"></script>

   </head>
   <body>

     <nav class="navbar navbar-default">
       <div class="container-fluid">

         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="/index.php">Contact Manager</a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav navbar-right">
             <li><a href="/index.php">All Contacts</a></li>
             <li><a href="/new.php">New Contact</a></li>
             <li><a href="/style.php">Style Guide</a></li>
           </ul>
         </div><!-- /.navbar-collapse -->
       </div><!-- /.container-fluid -->
     </nav>

     <div class="container">
       <div class="row">
         <div class="col-md-10 col-md-offset-1">
