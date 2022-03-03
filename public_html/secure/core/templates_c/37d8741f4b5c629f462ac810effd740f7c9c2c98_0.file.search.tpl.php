<?php
/* Smarty version 3.1.33, created on 2021-06-24 22:07:09
  from '/storage/ssd3/196/17127196/public_html/MonForfait/secure/template/tpl/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60d5020d6e11a6_14534629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37d8741f4b5c629f462ac810effd740f7c9c2c98' => 
    array (
      0 => '/storage/ssd3/196/17127196/public_html/MonForfait/secure/template/tpl/search.tpl',
      1 => 1624568697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/common/MenuUser.tpl' => 1,
  ),
),false)) {
function content_60d5020d6e11a6_14534629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../tpl/common/MenuUser.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!------------------------------------------FIN header---------------------------------------->
     

    <div id="main">
        <section class="result-search">
            <div class="tabs tabs_result r_tabs r-tabs">
                <ul class="container container_large r-tabs-nav">
                    <li class="r-tabs-tab r-tabs-state-active nbrOffre">
                    </li>
                </ul>
                <div class="tabs-content">
                    <div class="container container_large">
                        <div id="tab-1">
                            
                            <div id="offer">  
                                <div class="flex">
                                    <section class="map-svg flex-center">
                                        <div class="container container_middle flex">
                                            <h1 class="name-page">Trouvez votre futur box internet en un clic</h1>
                                        </div>
                                        <div class="container container_middle flex">
                                            <div class="svgmap-wrap">
                                                    <h3 class="title">Les promotions du moment</h3>
                                                    <div class="tabs-home">
                                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_offer']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                                           <?php if ($_smarty_tpl->tpl_vars['value']->value['promotion'] != 0) {?>
                                                                <a href="commande.php/?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idoffer'];?>
"  class="item-proposal display_offer" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['idoffer'];?>
" data-href="#"> 
                                                                  
                                                                        <div class="img-holder">
                                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['logo'];?>
" title="" alt="" />
                                                                        </div>
                                                                        <div class="item-proposal-info">
                                                                            <h3 class="item-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['technologie'];?>
</h3>
                                                                            <h6 style="font-size:20px;"class="item-price"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
 DH/mois</h6>
                                                                            <h6 class="item-price-promo"><strike><?php echo $_smarty_tpl->tpl_vars['value']->value['pricepromo'];?>
DH/mois</strike></h6>
                                                                            <span class="like icon">pendant 12 mois</span>
                                                                        </div>   
                                                                </a>
                                                            <?php }?>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    	
                                                    </div>
                                                    <h3 class="title2"><a href="#">Actualités</a></h3>
                                                <ul class="news-list">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_promotion']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                                        <li><a href="promotion.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idoffer'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Date_Debut'];?>
 &agrave; : <?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
 : Offre Série Limitée Welcome Back Fibre et ADSL en promo jusqu'au <?php echo $_smarty_tpl->tpl_vars['value']->value['Day_fin'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['monthAlphabirique'];?>
 2021</a></li>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                                </ul>
                                            </div>

                                            <div class="mapNav">
                                                <h3 class="title2">Fournisseurs d'accès internet</h3>
                                                <ul>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_supplier']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['value']->value['family'] == 1) {?>
                                                            <li><a href="#" class="region" title="Box internet Free"><?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
</a></li>
                                                        <?php }?>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                                                </ul>
                                            </div>
                                        </div>	
                                    </section>
                                </div> 
                            </div> 
                            
                        </div>
                    </div> 
                </div>
            </div>        
        </section>          
            <div class="pagination"></div>                              
    </div>
    <!------------------------------------------FIN header---------------------------------------->
   
 
        <!------------------------------------------FIN header---------------------------------------->

    
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

</div>

<?php echo '<script'; ?>
 src="/cdn/js/v1/push/main.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var text = "";
    var x;
    var services;
    var engagement;
    var supplier;
    var price='';
    var offer;
    $(document).ready(function(){
        function load_data(){
           $.ajax({
            url    : '../ajax/customer/offer.php',
            method : "GET",
            data   : {engagement:engagement , supplier:supplier , price:price , offer:offer},
            success : function(result){
            console.log(result);
            var data     =JSON.parse(result);
            var nbrOffre =data.length
            $('.nbrOffre').html(`<a href="#" class="r-tabs-anchor ">    
                                `+nbrOffre+` offres disponibles </a>`);
            if(nbrOffre>0){
                $('.alert').css('display','none');
                var loop='$.each(data,function (i) {'
                text=`<h2 class="name-page">Forfaits Internet</h2>`;
            
                $.each(data,function (i) { 
                    services=data[i]['servcie'];
                    text+=`<a href="commande.php?id=`+data[i]['idoffer']+`" target="_blank" ><article class="item-proposal display_offer" data-id="`+data[i]['idoffer']+`" data-href="#">
                    <div class="img-holder logo_supplier">
                        <img src="`+data[i]['logo']+`" title="" alt="" />
                    </div>
                    <div class="item-proposal-info">
                        <h3 class="item-title">`+data[i]['supplier']+`  `+data[i]['technologie']+`</h3>
                        <h4 class="item-price">`+data[i]['price']+`DH/mois</h4>`;
                        if(data[i]['pricepromo']!=0){
                            text+=`<h2 class="item-price-promo"><strike>`+data[i]['pricepromo']+`DH/mois</strike> pendant 12 mois</h2>`;               
                        }
                        text+=`<p class="icon section">
                            <span>
                                <i class="fas fa-broadcast-tower"></i>
                            </span>
                            `+data[i]['supplier']+`  > `+data[i]['offer']+`
                        </p>
                        <p class="icon">`;
                            $.each(services,function (i) {
                            text+=`<span class="characteristic">
                                        <span>
                                            <i class="`+services[i]['icon']+`"></i>
                                        </span>
                                        <span class="characteristic_name"> 
                                            `+services[i]['type']+` : `+services[i]['service']+`
                                        </span> 
                                    </span>`;
                            })
                            
                            text+=`<span class="characteristic">
                                        <span>
                                            <i class="fad fa-ring"></i>
                                        </span>
                                        12 mois
                                    </span>
                        </p>
                        <!--
                        <span class="like icon">pendant 12 mois</span>
                        //-->
                    </div>
                    </article> 
                    </a>`;
                })	

                $("#offer").html(text); 
                $(".pagination").html(`<ul>
                        <li><a href="#" class="active" >1</a></li>
                    </ul>`) 
            }
            else{
                $("#offer").html(`<div class="alert alert-info" role="alert" style="display: none;">
                                    <strong>Aucune offre disponible pour votre recherche.</strong>
                                </div>`); 
                $(".pagination").html('');
                $('.alert').css('display','block');
            }
            
        }
        
        });
    }
       
    $(".searchForfait").click(function(){
        
            supplier       = $("#idsupplier").val();
            engagement     = $("#engagement").val();
            price          = $("#idprice").val();
            offer          = $("input[name='flexRadioDefault']:checked").val();
            load_data();
        
    });
    $("input[name='flexRadioDefault']").click(function(){
         offer=$(this).val();
         load_data();
    });
    });
<?php echo '</script'; ?>
>

       
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $(document).on('change', '#idengagement', function() {
                      var engagement=$(this).val();
                      $("#engagement").val(engagement);
                });
            });
        
        <?php echo '</script'; ?>
>
    

       
       
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
            
                $(document).on('change', '#idbudget', function() {
                      var price=$(this).val();
                      $("#idprice").val(price);
                });
            });
        
        <?php echo '</script'; ?>
>
    

     
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $(document).on('change', '#idsection', function() {
                      var supplier=$(this).val();
                      $("#idsupplier").val(supplier);
                });
            });
        <?php echo '</script'; ?>
>
    
  
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $('#promos').click(function() {
                    location.reload();
                });
            });
        <?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $('.logo').click(function() {
                    location.reload();
                });
            });
        <?php echo '</script'; ?>
>
        
    
    
</body>
</html>		
<?php }
}
