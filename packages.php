<?php
session_start();
if (isset($_SESSION['loggedin']) || isset($_COOKIE['loggedin'])) {
}  include 'header.php';


?>
<br>
<br>
<div class="main-package">
   
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid green;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,1,0,0)
}

.price .header {
  background-color: green;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: green;
  font-size: 20px;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: black;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
</head>
<body>
<br>
<br>

<h2 style="text-align:center">Bangladesh package</h2>
<p style="text-align:center">Available Packages</p>

<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">Saint Martin:2 days, 2 nights </li>
    
    <li class="grey"><a href="#" class="button">Package 1</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:green">Pro</li>
    <li class="grey">Cox's bazar and saint martin:5 days, 4 nights </li>
   
    <li class="grey"><a href="#" class="button">Package 2</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">sundorbans:7 days, 8 nights</li>
   
    <li class="grey"><a href="#" class="button">Package 3</a></li>
  </ul>
</div>

</body>
</html>
    </div>
</div>
 