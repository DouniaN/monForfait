{include file='../tpl/common/menu2.tpl'}
<section class="content-holder">
    {foreach from=$list_offer item=value}
        <div class="container container_middle">
            <h2 class="name-page">{$value.supplier} : Offre La boîte {$value.supplier} en promo jusqu'au {$value.Day}  {$value.monthAlph}  2021</h2>
            <div class="content">
            <div class="wrap-header display_fast" style="background-image: url('{$value.image}');" data-href="#">
            </div>
            <div class="item-news">
               {foreach from=$value.servcie item=value}
                    <p class="icon">
                        <span class="characteristic">
                            <span>
                                <svg class="icon-location-new"><i class="{$value.icon}"></i></svg>
                            </span>
                            {$value.type} : {$value.service}
                        </span>  
                    </p>
                {/foreach}
            </div>

            <div class="item-description">
                <p> {$value.supplier} lance son&nbsp;offre promo phare sur ses bo&icirc;tes internet ADSL&nbsp;<span style="color: #e67e23;"><strong>jusqu'au {$value.Date_Fin}</strong></span></p>
                <p>&nbsp;</p>
                <p><strong>- La bo&icirc;te {$value.supplier}</strong><strong>  au tarif de <span style="color: #3598db; font-size: 14pt;">{$value.price} DH;/mois pendant {$value.engagement}</span> au lieu de <span style="text-decoration: line-through;"><span style="color: #e03e2d; text-decoration: line-through;">{$value.pricepromo} DH;/mois</span></span></strong></p>
                <p>&nbsp;</p>
                <p>Cette offre est valable uniquement pour les nouveaux clients {$value.supplier}.</p>
                <p><span style="text-decoration: underline;">Offre sans engagement</span></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div>
    {/foreach}    
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


			
			
	
		
	
	
