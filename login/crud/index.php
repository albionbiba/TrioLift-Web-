<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN PANEL - Triolift Center DASHBOARD</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <style>
body {
  font-family: "Lato", sans-serif;
}



@import url("https://fonts.googleapis.com/css?family=Roboto+Mono:400,700");

.wrapper {
  width: 30%;
  margin: 0 auto;
}

.logo {
  width: 50%;
}

.sign-out-wrapper {
  margin-right: 1em;
}

.sign-out {
  color: black;
  outline: none;
  text-decoration: none;
  transition: all 0.1s;
}

.sign-out:focus,
.sign-out:hover,
.sign-out:active {
  color: black;
  background-color: grey;
  text-decoration: none;
}

.sign-out > span {
  margin: 0.1em;
}







.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>

<body>


<div class="wrapper">
  <div class="row justify-content-between align-items-center">
    <div class="col-6 col-md-4 logo-wrapper">
      <img src="https://www.freeiconspng.com/uploads/abstract-png-15.png" alt="a free logo" class="logo">
    </div>
    <div class="col-6 col-md-7 sign-out-wrapper clearfix">
      <a href="./../../index.html" class="sign-out pull-right">
    <span>Sign Out</span>
    <i class="fa fa-sign-out"></i>
  </a>
    </div>
  </div>
</div>


  <div class="container">
    
    <div class="alert alert-success text-center message" role="alert">

    </div>


    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#admin">Admins</a>
  <a href="#application">Courses</a>
  <a href="#category">Teachers</a>
  <a href="#order">Users</a>
  <a href="#email">Emails</a>
</div>


<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; ADMIN PANEL</span>








<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<div><br>
<?php
include_once 'form.php';
include_once 'profile.php';
?> <div class="container">
    <div class="row mb-3">
      <div class="col-3">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#userModal" id="addnewbtn">Add New Course <i
            class="fa fa-user-circle-o"></i></button>
      </div>
      <div class="col-9">
        <div class="input-group input-group-lg">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">

        </div>
      </div>
    </div></div>
<?php
include_once 'playerstable.php';
?>
    <nav id="pagination">
    </nav>
    <input type="hidden" name="currentpage" id="currentpage" value="1">
  </div>




  <div><br>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </div>
  <div id="overlay" style="display:none;">
    <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
    <br />
    Loading...
  </div>
</body>
</html>
