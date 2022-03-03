<?php
/* Smarty version 3.1.33, created on 2021-06-22 23:57:59
  from 'C:\xamp\htdocs\10-04-2021\secure\template\tpl\chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60d25ce7334872_25959350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58fc510e71cb8131e8c76ba06677b4dae9909383' => 
    array (
      0 => 'C:\\xamp\\htdocs\\10-04-2021\\secure\\template\\tpl\\chart.tpl',
      1 => 1624399048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d25ce7334872_25959350 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>

<html>

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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
		dataPoints: <?php echo $_smarty_tpl->tpl_vars['dataPoints']->value;?>

	}]
});
chart.render();
 
}
<?php echo '</script'; ?>
>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="comparateur.php" data-abc="true">Mon Forfait</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> <a class="nav-link" href="admin/manageOffer.php" data-abc="true">Gestion Offres <span class="sr-only">(current)</span></a> </li>
        </ul>
        <form onsubmit="event.preventDefault()" class="form-inline">
		 <input class="form-control mr-sm-2" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['monthYearNow']->value;?>
">
		  <button class="btn btn-secondary my-2 my-sm-0" type="submit" >Details</button> 
		  
		
		</form>
    </div>
</nav>
<br><br>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>

<?php echo '<script'; ?>
 src="https://canvasjs.com/assets/script/canvasjs.min.js"><?php echo '</script'; ?>
>
</body>
</html>    <?php }
}
