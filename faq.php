
<?php
include ('nav2.php'); 
include ('cdn.php');
?>
<html>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}


.active, .accordion:hover {
  background-color: #E9967A; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
</head>
<body>

<h2 style="text-align: center;">FAQ (most frequently asked questions)</h2>

<button class="accordion">What is Sitz Bath?</button>
<div class="panel">
  <p><strong>Sitz Bath</strong> is  a bath designed to only submerge the lower part of your buttocks.  Sitz baths are incredibly helpful for those suffering from external hemorrhoids.  They can relieve symptoms almost immediately.  Use warm water and soak for about fifteen to twenty minutes, as needed throughout the day.</p>
</div>

<button class="accordion">Is this website really effective to cure the haemorrhoids disease?</button>
<div class="panel">
  <p>Well, this Website intends to help the people who are suffering from haemorrhoids and don't want to go to the hospital by giving the treatment plan for one week based on their resulted condition. You can do according to the treatment plan within one month. Most of the people who used this website find it this website effective  and useful and they became recovered from it.</p>
</div>

<button class="accordion">If I am concerned about a blood clot that hasn’t gone away in a few days, What should I do?

</button>
<div class="panel">
  <p>If you are concerned about a blood clot that hasn’t gone away in a few days,it might be better to consult your doctor to prevent from rectal infection.</p>
</div>

<button class="accordion">What if I still feel painful even after one month everytime I poop?</button>
<div class="panel">
  <p>I suggest you to consult with GP by showing your weekly activity journal that you will get from this website. That journal will help your GP to able to understand clearly about your condition.</p>
</div>

<button class="accordion">What is Pelvic floor contration, Deep Breathing, Child's Pose, Leg up the wall Pose,Wind-Releiving Pose and Bound Angle Pose?</button>
<div class="panel">
  <a href="https://www.healthline.com/health/exercises-for-hemorrhoids#exercises-to-try">Please go to this link</a> 
</div>

<button class="accordion">Do I need to pay to use the treatment plan for one week?</button>
<div class="panel">
  <p>No, you don't need to pay anything for it. This website is intended to assit and help the people who are suffering from haemorroids. </p>
</div>

<button class="accordion">If I am a pregnant woman, is the treatment plan still ok to follow for me? </button>
<div class="panel">
  <p>Yes, absolutely!!The treament plan is planned for everyone who are the adults, older people and even pregnant women.</p>
</div>
<button class="accordion">When do I need to go to GP in emergency? </button>
<div class="panel">
  <p>If your anus keeps bleeding, the infection can ocuur. At that time, you should go to GP.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</body>
</html>
</html>