 <?php
include 'nav2.php';
include ('cdn.php');
?>
<html>
<head>
<style type="text/css">
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
  <p>Background history of getting idea to implement Haemorrhoids Assitance Website </p>
  <p>Throughout my life, I have observed/witnessed many people suffering from hemorrhoids within my social and professional surroundings, however what I was able to find out is that also most of these individuals are reluctant to go to see the doctor due to the embarrassment factor of the condition. Finding this information out, prompted me to research ways in which I can help those, and many more, so that they can be treated by home remedies at the comfort of their own safe space, without forcing them to disclose their condition to any third party (if that is their wish). </p>
  <p>I founded this website in 2021 along with my computing research project at UWE (university of the west of england).</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/Capture.PNG" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Shin Mon Thant</h2>
        <p class="title">CEO & Founder</p>
        <p>If you have some suggestions to improve this website, I would appreciate for sending me advice to my email.</p>
        <p>helo99122@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/empty.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mhone Mhone</h2>
        <p class="title">Website Security Manager</p>
        <p>If your registered account logged out automatically or you have any security issue about this website, you can contact my email.</p>
        <p>mhone@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/empty.png" alt="John" style="width:100%">
      <div class="container">
        <h2>Htwe Htwe</h2>
        <p class="title">Haemorrmoids researcher </p>
        <p>If you are suffering from haemorrhoids and notice any not well-common signs about your haemorrhoids, contact to my mail. Your cooperation will be helpful to the other people and you as well.   </p>
        <p>htwe@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</body>
<footer></footer>
</html>
