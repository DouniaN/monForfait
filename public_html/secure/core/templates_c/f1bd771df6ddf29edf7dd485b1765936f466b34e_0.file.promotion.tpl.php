<?php
/* Smarty version 3.1.33, created on 2021-07-22 21:12:27
  from '/storage/ssd3/196/17127196/public_html/secure/template/tpl/promotion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60f9df3b9454f6_16475484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1bd771df6ddf29edf7dd485b1765936f466b34e' => 
    array (
      0 => '/storage/ssd3/196/17127196/public_html/secure/template/tpl/promotion.tpl',
      1 => 1624697937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/common/menu2.tpl' => 1,
  ),
),false)) {
function content_60f9df3b9454f6_16475484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../tpl/common/menu2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="content-holder">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_offer']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <div class="container container_middle">
            <h2 class="name-page"><?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
 : Offre La boîte <?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
 en promo jusqu'au <?php echo $_smarty_tpl->tpl_vars['value']->value['Day'];?>
  <?php echo $_smarty_tpl->tpl_vars['value']->value['monthAlph'];?>
  2021</h2>
            <div class="content">
            <div class="wrap-header display_fast" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['value']->value['image'];?>
');" data-href="#">
            </div>
            <div class="item-news">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['servcie'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <p class="icon">
                        <span class="characteristic">
                            <span>
                                <svg class="icon-location-new"><i class="<?php echo $_smarty_tpl->tpl_vars['value']->value['icon'];?>
"></i></svg>
                            </span>
                            <?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
 : <?php echo $_smarty_tpl->tpl_vars['value']->value['service'];?>

                        </span>  
                    </p>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <div class="item-description">
                <p> <?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
 lance son&nbsp;offre promo phare sur ses bo&icirc;tes internet ADSL&nbsp;<span style="color: #e67e23;"><strong>jusqu'au <?php echo $_smarty_tpl->tpl_vars['value']->value['Date_Fin'];?>
</strong></span></p>
                <p>&nbsp;</p>
                <p><strong>- La bo&icirc;te <?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
</strong><strong>  au tarif de <span style="color: #3598db; font-size: 14pt;"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
 DH;/mois pendant <?php echo $_smarty_tpl->tpl_vars['value']->value['engagement'];?>
</span> au lieu de <span style="text-decoration: line-through;"><span style="color: #e03e2d; text-decoration: line-through;"><?php echo $_smarty_tpl->tpl_vars['value']->value['pricepromo'];?>
 DH;/mois</span></span></strong></p>
                <p>&nbsp;</p>
                <p>Cette offre est valable uniquement pour les nouveaux clients <?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
.</p>
                <p><span style="text-decoration: underline;">Offre sans engagement</span></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmonforfait.fr%2F&width=81&layout=button&action=like&size=small&share=false&height=65&appId=546875866257553"
 width="81" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.monforfait.fr%2Fnews%2Finternet-nouveautes%2Factualite-7-sosh-offre-la-boite-sosh-en-promo-jusquau-22-juin-2020.htm&layout=button&size=small&width=81&height=20" 
        width="81" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
<!--     
        <div class="fb-share-button" data-href="https://www.monforfait.fr/news/internet-nouveautes/actualite-7-sosh-offre-la-boite-sosh-en-promo-jusquau-22-juin-2020.htm" data-layout="button"></div>
-->
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


			
			
	
		
	
	
<?php }
}
