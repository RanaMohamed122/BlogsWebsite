<?php

include('layout/header.php');
session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    echo '';
}else
{
    header('location:index.php');
}
?>

<html lang="en" class="full-height">

<!--Main Navigation-->
<header>

  <nav class="navbar navbar-expand-lg navbar-dark black">
    <div class="container">
      <a class="navbar-brand" href="#"><strong>SharePost</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.php">AddPost</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="php.php">PHP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript.php">JavaScript</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mysql.php">MySql</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><?php echo $_SESSION['username'];?></a>
          </li>

        </ul>
        <form action='search.php' class="form-inline" method='post'>
      <div class="md-form my-0">
        <input name='search' class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>

      </div>
    </div>
  </nav>

  <div class="view intro-2">
    <div class="full-bg-img">
      <div class="mask rgba-black-strong flex-center">
        <div class="container">
          <div class="white-text text-center wow fadeInUp">
            <h2>This Navbar isn't fixed</h2>
            <h5>When you scroll down it will disappear</h5>
            <br>
            <p>Full page intro with background image will be always displayed in full screen mode, regardless
              of device </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
<!--Main Navigation-->

<!--Main Layout-->
<main class="text-center my-5">

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      </div>
    </div>
  </div>

</main>
<!--Main Layout-->