<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Forfaits Internet</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.monforfait.fr/css/v1/compact.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
					<a href="../core/index.php" target="_blank" title ="Forfait Internet">Mon Forfait Internet : comparez et faites des économies sur vos forfaits</a>
				</h1>
				<div class="wrap-user">
				  {foreach from=$list_Forfait_family key=Forfait_family item=value}
				
					<div class="form-check user-menu">
                    <i class="fas fa-network-wired">
  						<input class="form-check-input" value="{$value.idforfait_family}" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          </i>
						<label title="Forfaits internet xDSL" class="form-check-label" for="flexRadioDefault1">
							{$value.forfait} 
						</label>
					</div>
					{/foreach}
					<button class="add-advert button btn-orange" id="promos" title="Promotions de forfaits mobile">
					
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
                            
                              <option  value="null" selected="selected">Tout</option> 
                            {foreach from=$list_supplier item=supplier}
                                <option value="{$supplier.id}" >{$supplier.supplier}</option>
                               
                            {/foreach}
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
	