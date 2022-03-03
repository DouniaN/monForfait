<?php
/* Smarty version 3.1.33, created on 2021-04-30 16:10:46
  from 'C:\xamp\htdocs\MVC\secure\template\tpl\commande.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_608c0fe62afd89_65014796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7682881da9f64eaa86f235f39049fd291c557d5f' => 
    array (
      0 => 'C:\\xamp\\htdocs\\MVC\\secure\\template\\tpl\\commande.tpl',
      1 => 1619791753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/common/MenuUser.tpl' => 1,
  ),
),false)) {
function content_608c0fe62afd89_65014796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../tpl/common/MenuUser.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="main">
	<section class="breadcrumbs-wrap">
		<div class="container container_middle">
			<ul id="breadcrumbs">
				<li><a href="/" title="Comparateur de forfait mobile en France">Accueil</a></li>
				<li>> <a href="https://www.monforfait.fr/mobile/">Forfaits Mobile</a></li><li>> <a href="https://www.monforfait.fr/mobile/free/">Free</a></li>
			</ul>
		</div>
	</section>

	<section class="content-holder">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_offer']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?> 
		   
			<div class="container container_middle">
				<h2 class="name-page"><?php echo $_smarty_tpl->tpl_vars['value']->value['offer'];?>
</h2>
				<div class="content">
					<div class="item-proposal description-content">
						<div class="img-holder">
						  <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['logo'];?>
" alt="Opperateur"/>
						</div>
						<p><?php echo $_smarty_tpl->tpl_vars['value']->value['offer'];?>
</p>
					</div>
				</div>
				
				<aside class="sidebar">
					<p class="price price_orange"><a href="https://www.monforfait.fr/go/836" rel="nofollow">Souscrire</a></p>
					<div class="button btn-lightblue"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
 DH/mois</div>
					<?php if ($_smarty_tpl->tpl_vars['value']->value['promotion'] != 0) {?>
					  <div class="button btn-lightblue"><strike><?php echo $_smarty_tpl->tpl_vars['value']->value['pricepromo'];?>
DH/mois</strike> pendant 12 mois</div> 
                    <?php }?>
					<div class="user-info">
					
						<p class="icon">
							<svg class="icon-user-new"><i class="fas fa-broadcast-tower"></i></svg>
							<?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>

						</p>
						<p class="icon">
							<svg class="icon-location-new"><i class="fas fa-broadcast-tower"></i></svg>
							<?php echo $_smarty_tpl->tpl_vars['value']->value['offer'];?>

						</p>
					</div>

										
					<div class="user-info">
					   
						<p class="icon">
							<svg class="icon-clock-new"><i class="fas fa-network-wired"></i></svg>
							<span class="characteristic_name">Technologie:</span> <?php echo $_smarty_tpl->tpl_vars['value']->value['technologie'];?>

						</p>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['servcie'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
							<p class="icon">
									<svg class="icon-clock-new"><i class="<?php echo $_smarty_tpl->tpl_vars['value']->value['icon'];?>
"></i></svg>
									<span class="characteristic_name"><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
:</span> <?php echo $_smarty_tpl->tpl_vars['value']->value['service'];?>

							</p>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>							
						<p class="icon">
							<svg class="icon-clock-new"><i class="fad fa-ring"></i></svg>
							<?php echo $_smarty_tpl->tpl_vars['value']->value['engagement'];?>

						</p>
					</div>
				</aside>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	
    </section>
	    <footer id="footer">
			<div class="container container_large">
				<div class="logo-footer">
					<a href="/">
						<img src="https://cdn.monforfait.fr/img/v1/logo.png" alt="MonForfait comparateur de forfait" title="MonForfait.fr : comparatif de forfaits mobile, internet, banque, électricité, etc" />
					</a>
				</div>
				<p class="copyright">MonForfait©DOUNIA.2021</p>
			</div>
    	</footer>
 </div><!--Fin main--!>
    
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $('#promos').click(function() {
                     window.location.replace("../index.php")
                });
            });
        <?php echo '</script'; ?>
>
    <?php }
}
