
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<style>
<?php
include"my_css.php";
?>
</style>
</head>
<body onload="startGame()">
<img id="img2" src="war_plane.png" alt="plane" width="30" height="9">
 <script type='text/javascript'>
var hero;
var myObstacles = [];
var myScore;
let heart=1000;

function startGame() {
    hero = new hero(100, 33, "red", 10,120);
       //hero.elevation = ;
       //boing.gravity = 0.05;
 //  myScore = new component("20px", "Consolas", "black", 280, 40, "text");
   document.getElementById("gamearea").innerHTML+="Ready" ;
myGameArea.start();
}
var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
document.getElementById("gamearea").innerHTML+=" start" ;
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNo = 0;
        this.interval = setInterval(updateGameArea, 20);
        },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}
</script>
<?php
include"component.php";
include"hero.php";
include"updateGameArea.php";
?>
<script>
function everyinterval(n) {
    if ((myGameArea.frameNo / n) % 1 == 0) {return true;}
    return false;
}
function accelerate(n) {
    hero.gravity = n;
 if(n==0)
 {
    hero.gravity = 0;
   hero.gravitySpeed = 0;

 }//n==0
}
</script>
<br><br><br>
<center>
<p id="the_heart"></p>

<button type="button" style=" font-size:35px; height:100px; width:220px" onclick="accelerate(-0.04)">up</button>
<button type="button" style=" font-size:12px; height:55px; width:120px" onclick="accelerate(0)">stop</button>
<button type="button" style=" font-size:35px; height:100px; width:220px" onclick="accelerate(0.04)">down</button>
</center>
<p>Use the up and down button to stay in the air</p>
<p>How long can you stay alive?</p>
<p id="gamearea"></p>
</body>
</html>


