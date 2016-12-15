<?php
include("auth.php");
?>

<!DOCTYPE HTML>
<html>

<head>

<meta charset="utf-8">
<title>Culture Ring</title>
<link href="style/reset.css" type="text/css" rel="stylesheet">
<link href="style/index.css" type="text/css" rel="stylesheet">
<link href="style/main.css" type="text/css" rel="stylesheet">

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script src="document_ready.js"></script>

</head>

<body>


<div id="map_wrapper">
<img id="map" src="media/image/map.svg" alt="map"/>
<a class="pin" href="http://maps.apple.com/?q=56.15391621,10.19971132" id="location1"><img src="media/image/pen.svg" alt="pin"/></a>
<a class="pin" href="#" id="location2" ><img src="media/image/pen.svg" alt="pin"/></a>
<a class="pin" href="#" id="location3" ><img src="media/image/pen.svg" alt="pin"/></a>
<a class="cpin" href="#" id="swimming1" ><img src="media/image/swimming.svg" alt="swim"/></a>
<a class="cpin" href="#" id="swimming2"><img src="media/image/swimming.svg" alt="swim"/></a>
<a class="cpin" href="#" id="food1" ><img src="media/image/food.svg" alt="swim"/></a>
<a class="cpin" href="#" id="food2"><img src="media/image/food.svg" alt="swim"/></a>
<a class="cpin" href="#" id="food3"><img src="media/image/food.svg" alt="swim"/></a>
<a class="cpin" href="#" id="food4"><img src="media/image/food.svg" alt="food"/></a>
<a class="cpin" href="#" id="food5"><img src="media/image/food.svg" alt="food"/></a>
<a class="cpin" href="#" id="food6"><img src="media/image/food.svg" alt="food"/></a>
<a class="cpin" href="#" id="restroom1"><img src="media/image/restroom.svg" alt="restroom"/></a>
<a class="cpin" href="#" id="restroom2"><img src="media/image/restroom.svg" alt="restroom"/></a>
<a class="cpin" href="#" id="restroom3"><img src="media/image/restroom.svg" alt="restroom"/></a>
<a class="cpin" href="#" id="restroom4"><img src="media/image/restroom.svg" alt="restroom"/></a>
<a class="cpin" href="#" id="restroom5"><img src="media/image/restroom.svg" alt="restroom"/></a>
<a class="cpin" href="#" id="restroom6"><img src="media/image/restroom.svg" alt="restroom"/></a>
<a class="cpin" href="#" id="restroom7"><img src="media/image/restroom.svg" alt="restroom"/></a>
<a class="cpin" href="#" id="tent1"><img src="media/image/tent.svg" alt="tent"/></a>
<a class="cpin" href="#" id="tent2"><img src="media/image/tent.svg" alt="tent"/></a>
<a class="cpin" href="#" id="tent3"><img src="media/image/tent.svg" alt="tent"/></a>
<a class="cpin" href="#" id="tent4"><img src="media/image/tent.svg" alt="tent"/></a>
<a class="cpin" href="#" id="tent5"><img src="media/image/tent.svg" alt="tent"/></a>
<a class="cpin" href="#" id="tent6"><img src="media/image/tent.svg" alt="tent"/></a>

</div>

<header>
	<button id="menu_button">Z</button>
</header>

<article id="menu" class="menu_closed">
	<section id="select_button_wrapper">
		<button id="profile_button" class="select_button"><img src="media/image/profile.svg"></button><button id="routes_button" class="select_button"><img src="media/image/routes.svg"></button>
	</section>
	<section id="ajax_wrapper"></section>
</article>


</body>
</html>
