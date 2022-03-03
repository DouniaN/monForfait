<?php
/* Smarty version 3.1.33, created on 2021-06-25 23:00:54
  from '/storage/ssd3/196/17127196/public_html/secure/template/tpl/commande.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60d660262b0536_61589142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e92e12dd090c983f8feb25fd06bb81948469dfd' => 
    array (
      0 => '/storage/ssd3/196/17127196/public_html/secure/template/tpl/commande.tpl',
      1 => 1624662048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/common/menu2.tpl' => 1,
  ),
),false)) {
function content_60d660262b0536_61589142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../tpl/common/menu2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="main">
  
	
		<div class="container container_middle" >
			<!-- Nav pills -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="pill" href="#panier">Panier</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#menu1">Info client</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#menu2">Paiement et livraison</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div id="panier" class="container tab-pane active">
					<h3 style="text-align:center;">Panier</h3>
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
										<p><?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
  <?php echo $_smarty_tpl->tpl_vars['value']->value['technologie'];?>
 </p>
										<p style="margin-left:300px;"><a href="../comparateur.php" type="button" class="btn btn-info">Modifier</a></p>
									</div>
									
								</div>
								
								<aside class="sidebar">
									<p class="price price_orange"><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['link'];?>
" target="_blank">Passer Commande</a></p>
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
											<?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
  <?php echo $_smarty_tpl->tpl_vars['value']->value['technologie'];?>
 	
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
				</div>
				<div id="menu1" class="container tab-pane fade"><br>
				   <h3>Info client</h3>
				   <section class="content-holder">
					
							<div class="container container_middle">
								<div class="content">
									<form id="addClie" class="form-horizontal" style="background-color:#F5F5DC;">
										<h2>Ajouter un compte</h2>
										<div class="form-group">
											<div class="col-sm-10">
											<input type="email" class="form-control" id="email" placeholder="Enter email">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-10">
											<input type="password" class="form-control" id="pwd" placeholder="Enter password">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-10">
											<input type="text" class="form-control" id="Prenom" placeholder="Enter Prénom">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-10">
											<input type="text" class="form-control" id="nom" placeholder="Enter Nom">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-10">
											<input type="text" class="form-control" id="adress" placeholder="ville,région,Quartier">
										</div>
										</div>
											<div class="form-group">
											<div class="col-sm-10">
											<input type="text" class="form-control" id="Num" placeholder="Contact">
											</div>
										</div>
										<div class="form-group">
											<div class="radio">
												<label><input name="sexe"  type="radio" value="femme"> Femme</label>
												<label><input name="sexe" type="radio" value="homme"> Homme</label>
												<label><input name="sexe" type="radio" value="autre"> Autre</label>
										    </div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
											<button  class="btn btn-warning" id="addClient">Enregistrer</button>
											</div>
										</div>
									</form>

								</div>

								<aside class="sidebar">
									<p class="price price_orange">Votre panier</p>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_offer']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?> 
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
											<?php echo $_smarty_tpl->tpl_vars['value']->value['supplier'];?>
  <?php echo $_smarty_tpl->tpl_vars['value']->value['technologie'];?>
 	
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
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</aside>
							</div>
					
                    </section>
				</div>

				<div id="menu2" class="container tab-pane fade"><br>
				<h3>Paiement Et livraison</h3>
				 <div class="row">
                  <div class="col-lg-6 mx-auto">
                        <div class="card ">
							<div class="card-header">
								<div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
									<!-- Credit card form tabs -->
									<ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
										<li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
										<li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
										<li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
									</ul>
								</div> <!-- End -->
								<!-- Credit card form content -->
								<div class="tab-content">
									<!-- credit card info-->
									<div id="credit-card" class="tab-pane fade show active pt-3">
										<form role="form" onsubmit="event.preventDefault()">
											<div class="form-group"> <label for="username">
													<h6>Card Owner</h6>
												</label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
											<div class="form-group"> <label for="cardNumber">
													<h6>Card number</h6>
												</label>
												<div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
													<div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group"> <label><span class="hidden-xs">
																<h6>Expiration Date</h6>
															</span></label>
														<div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
															<h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
														</label> <input type="text" required class="form-control"> </div>
												</div>
											</div>
											<div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
										</form>
									</div>
								</div> <!-- End -->
								<!-- Paypal info -->
								<div id="paypal" class="tab-pane fade pt-3">
									<h6 class="pb-2">Select your paypal account type</h6>
									<div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
									<p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
									<p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
								</div> <!-- End -->
								<!-- bank transfer info -->
								<div id="net-banking" class="tab-pane fade pt-3">
									<div class="form-group "> <label for="Select Your Bank">
											<h6>Select your Bank</h6>
										</label> <select class="form-control" id="ccmonth">
											<option value="" selected disabled>--Please select your Bank--</option>
											<option>Bank 1</option>
											<option>Bank 2</option>
										</select> 
									</div>
									<div class="form-group">
										<p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
									</div>
									<p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
								</div> <!-- End -->
								<!-- End -->
							</div>
				        </div>
  			</div>
		</div>	
			</div>
		</div>
		</div>

		<div class="container">

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#32cd32;">
          <h4  style="color:#FFFF;" class="modal-title">Offre ajouté au panier avec succès</h4>
		 <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Cliquer sur l'angle <span style="color:red;">Info Client </span>pour créer un nouveau compte .</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
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
		   <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $('#addClient').click(function(e) {
					
                    e.preventDefault();
					var email      = $("#email").val();
					var password   = $("#pwd").val();
					var prenom     = $("#Prenom").val();
					var nom        = $("#nom").val();
					var adress     = $("#adress").val();
					var contact    = $("#Num").val();
					var sexe       = $("input[name='sexe']:checked").val();
					
					var arrAdresse = adress.split(',');
                    var ville 	   = arrAdresse[0];
					var quartier   = arrAdresse[1];

					$.ajax({
						url:'../client.php',
						type:'POST',
						data:{action:'add_ok',sexe:sexe,ville:ville,email:email,password:password,prenom:prenom,nom:nom,adress:adress,contact:contact},
						success:function(result){
							console.log(result);
							$("#email").val('');
							$("#Prenom").val('');
							$("#nom").val('');
							$("#adress").val('');
						}
					});
                });
            });
        <?php echo '</script'; ?>
>
		
    

<?php }
}
