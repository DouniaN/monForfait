
<!DOCTYPE HTML>

<html>

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Comparateur des Fournisseurs d'accès à Internet"
	},
	axisY: {
		title: "l’opérateur le plus commandé"
	},
	data: [{
		type: "column",
		yValueFormatString: "# Commande",
		dataPoints: {$dataPoints}
	}]
});
chart.render();
 
}
</script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="comparateur.php" data-abc="true">Mon Forfait</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> <a class="nav-link" href="admin/manageOffer.php" data-abc="true">Gestion Offres <span class="sr-only">(current)</span></a> </li>
        </ul>
        <form onsubmit="event.preventDefault()" class="form-inline">
		 <input class="form-control mr-sm-2" type="text" placeholder="{$monthYearNow}">
		  <button class="btn btn-secondary my-2 my-sm-0" type="submit" >Details</button> 
		  
		
		</form>
    </div>
</nav>
<br><br>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>    