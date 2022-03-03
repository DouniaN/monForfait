<?php
/* Smarty version 3.1.33, created on 2021-04-28 11:56:35
  from 'C:\xamp\htdocs\MVC\secure\template\tpl\common\MenuUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60893153064e78_40094956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec1c05a6c5e7ab0fc4d5a616b608fa132c1ae0c' => 
    array (
      0 => 'C:\\xamp\\htdocs\\MVC\\secure\\template\\tpl\\common\\MenuUser.tpl',
      1 => 1619570631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60893153064e78_40094956 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Forfaits Internet</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.monforfait.fr/css/v1/compact.css">
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
	
</head>


<body>
<div id="fb-root"></div>
<div id="wrapper">
	<header id="header">
		<div class="row header-top">
			<div class="container container_large">
				<h1 class="logo">
					<a href="#" title="Forfait Internet">Mon Forfait Internet : comparez et faites des économies sur vos forfaits</a>
				</h1>
				<div class="wrap-user">
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Forfait_family']->value, 'value', false, 'Forfait_family');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Forfait_family']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
				
					<div class="form-check user-menu">
  						<input class="form-check-input" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['idforfait_family'];?>
" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						<label title="Forfaits internet xDSL" class="form-check-label" for="flexRadioDefault1">
							<?php echo $_smarty_tpl->tpl_vars['value']->value['forfait'];?>
 
						</label>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<button class="add-advert button btn-orange" id="promos" title="Promotions de forfaits mobile">
						<span>
						<svg class="icon icon-plus"><use xlink:href="#icon-tags"></use></svg>
						</span>
						Promotion
					</button>
        		</div>
					<button class="c-hamburger c-hamburger--htx"><span></span></button>
			</div>
		</div> <!--row header-top-->
		 <form id="search-form">
            <div class="row search-wrap">
                <div class="container container_large">
                    <div class="wrap-element wrap-element_select icon caret">
                        <span>
                            <svg class="icon icon-user-new"><use xlink:href="#icon-internet"></use></svg>
                        </span>
                        <select id="idsection">
                            <option value="null" selected="selected">Tout</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_supplier']->value, 'supplier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['supplier']->value['supplier'];?>
</option>
                               
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="wrap-element wrap-element_select icon caret">
                        <span>
                            <svg class="icon icon-user-new"><use xlink:href="#icon-tags"></use></svg>
                        </span>
                        <select name="idbudget" id="idbudget">
                            <option value="null">Tout budget</option>
                            <option value="<200" >Moins de 200 DH</option>
                            <option value="BETWEEN 100 and 300" >100DH à 300DH</option>
                            <option value="BETWEEN 300 and 350" >300DH à 350DH</option>
                            <option value="BETWEEN 350 and 400" >350DH à 400DH</option>
                            <option value=">400" >Plus de 400DH</option>
                        </select>
                    </div>
                    <div class="wrap-element wrap-element_select icon caret">
                        <span>
                            <svg class="icon icon-user-new"><use xlink:href="#icon-ring"></use></svg>
                        </span>
                        <select id="idengagement">
                            <option value="null">Tout engagement</option>
                            <option value="2" >12 mois</option>
                            <option value="3" >24 mois</option>
                            <option value="1" >Sans engagement</option>
                        </select>
                    </div>
                    <div class="wrap-element wrap-element_button">
                        <button type="button" class="button btn-blue searchForfait">Recherche</button>
                        <input type="hidden" id="engagement"/>
                        <input type="hidden" id="idprice"/>
                        <input type="hidden" id="idsupplier"/>
                    </div>
                </div>
            </div>
            <div class="row custom-select-menu">
                <div class="container container_large"></div>
            </div>
        </form>		
		
		
	</header> 
	<?php }
}
