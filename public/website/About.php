<?php
include "header.php";
?>
          <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>We are here . Now you can see who we are.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/sagor.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <p><b>MD.ALI HAIDAR TAUHID </b></p>
        <p class="title">Web Designer and Developer</p>
        <p>B.Sc in CSE from Daffodil Internation University</p>
        <p>ali@gmail.com</p>
		<div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:70%;font-size:17px;">PHP</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar bg-danger" style="width:50%;font-size:17px;" >JavaScript</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar bg-secondary" style="width:95%;font-size:17px;" >HTML</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar" style="width:80%;font-size:17px;" >CSS</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:50%;font-size:17px;" >Bootstrap</div>
        </div>
        <div class="progress">
          <div class="progress-bar" style="width:40%;font-size:17px;" >Jquery</div>
       </div>
        <p><button class="button"></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/naim.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <p><b>MD. NAIM HOSSAIN SHOVU</b></p>
        <p class="title">Web Designer and Developer</p>
        <p>B.Sc in CSE from Daffodil Internation University</p>
        <p>naim@gmail.com</p>
		<div class="progress mb-3">
        <div class="progress-bar bg-success" style="width:70%;font-size:17px;">PHP</div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-danger" style="width:50%;font-size:17px;" >JavaScript</div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-secondary" style="width:95%;font-size:17px;" >HTML</div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar" style="width:80%;font-size:17px;" >CSS</div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-success" style="width:50%;font-size:17px;" >Bootstrap</div>
      </div>
      <div class="progress">
        <div class="progress-bar" style="width:40%;font-size:17px;" >Jquery</div>
      </div>
        <p><button class="button"></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/tanni.jpg" alt="John" style="width:100%">
      <div class="container">
        <p><b>TANIA AKTER </b></p>
        <p class="title">Web Designer and Developer</p>
        <p>B.Sc in CSE from Daffodil Internation University</p>
        <p>tania@gmail.com</p>
		<div class="progress mb-3">
        <div class="progress-bar bg-success" style="width:70%;font-size:17px;">PHP</div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-danger" style="width:50%;font-size:17px;" >JavaScript</div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-secondary" style="width:95%;font-size:17px;" >HTML</div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar" style="width:80%;font-size:17px;" >CSS</div>
      </div>
      <div class="progress mb-3">
        <div class="progress-bar bg-success" style="width:50%;font-size:17px;" >Bootstrap</div>
      </div>
      <div class="progress">
        <div class="progress-bar" style="width:40%;font-size:17px;" >Jquery</div>
      </div>

        <p><button class="button"></button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>


<?php

include('footer.php');
?>
