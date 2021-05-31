<!DOCTYPE html>
<html>
	<head>
	  <title>Algorithme traitement</title>
	  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
	  <title>Scripts Javascript : Aperçu</title>
	</head>

<body bgcolor="#FFFFFF">
<div id="img" style="position:absolute;">
<a href="http://www.outils-web.com"><img src="009.gif" border="0" width="88" height="31" alt="" onClick="pause_resume();"></a>
</div>

<script language="JavaScript">
<!-- Begin
// http://javascript.internet.com

/* var xPos = 20;
var yPos = document.body.clientHeight;
var step = 1;
var delay = 30; 
var height = 0;
var Hoffset = 0;
var Woffset = 0;
var yon = 0;
var xon = 0;
var pause = true;
var interval;
img.style.top = yPos;
function changePos() {
width = document.body.clientWidth;
height = document.body.clientHeight;
Hoffset = img.offsetHeight;
Woffset = img.offsetWidth;
img.style.left = xPos + document.body.scrollLeft;
img.style.top = yPos + document.body.scrollTop;
if (yon) {
yPos = yPos + step;
}
else {
yPos = yPos - step;
}
if (yPos < 0) {
yon = 1;
yPos = 0;
}
if (yPos >= (height - Hoffset)) {
yon = 0;
yPos = (height - Hoffset);
}
if (xon) {
xPos = xPos + step;
}
else {
xPos = xPos - step;
}
if (xPos < 0) {
xon = 1;
xPos = 0;
}
if (xPos >= (width - Woffset)) {
xon = 0;
xPos = (width - Woffset);
   }
}
function start() {
img.visibility = "visible";
interval = setInterval('changePos()', delay);
}
function pause_resume() {
if(pause) {
clearInterval(interval);
pause = false;
}
else {
interval = setInterval('changePos()',delay);
pause = true;
   }
}
start();
// End --> */
</script>
</body>
		
<nav id="bt-menu" class="bt-menu">
	<!-- ouverture -->
	<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
	<!-- laisser bt-icon et changer l'icone au choix voir fichier css/icons.css-->		
	<ul>
		<li><a href="#" class="bt-icon icon-user-outline">A propos</a></li>
		<li><a href="#" class="bt-icon icon-sun">Compétences</a></li>
		<li><a href="#" class="bt-icon icon-windows">docume</a></li>
		<li><a href="#" class="bt-icon icon-speaker">Blog</a></li>
		<li><a href="#" class="bt-icon icon-star">Clients</a></li>
		<li><a href="#" class="bt-icon icon-bubble">Contact</a></li>
	</ul>
</nav>
<script src="js/classie.js"></script>
<script src="js/borderMenu.js"></script>
<!-- source : http://tympanus.net/codrops/ -->



		<form method="POST"action="./newalgo.php">
			<label id="bleu">Bleu: <input type="checkbox" name="document" value="blue" /></label>
			<label id="jaune">Jaune: <input type="checkbox" name="image" value="yellow" /></label>
			<label id="rouge">Rouge: <input type="checkbox" name="video" value="red" /></label>
			<label id="vert">Vert: <input type="checkbox" name="liste" value="green" /></label>
		</form>
    </nav>

	<script type="text/javascript">

		$("#bleu").click(function(){
			$(this).css( "color", "blue" );
		});

		$("#jaune").click(function(){
			$(this).css( "color", "yellow" );
		});

		$("#rouge").click(function(){
			$(this).css( "color", "red" );
		});

		$("#vert").click(function(){
			$(this).css( "color", "green" );

		});

	</script>
</html>