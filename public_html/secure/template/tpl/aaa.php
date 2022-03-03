{literal}
        <script>
           var text = "";
           var x;
            $(document).ready(function(){
           
                $(".searchForfait").click(function(){
                     alert('cccc');
                     var supplier   = $("#idsupplier").val();
                     var engagement = $("#engagement").val();
                     var price      = $("#idprice").val();
                     var offer      = $("input[name='flexRadioDefault']:checked").val();
                     
                     $.ajax({
                        url    : '../ajax/customer/offer.php',
                        method : "GET",
                        data   : {engagement:engagement , supplier:supplier , price:price , offer:offer},
                        success : function(result){
                            console.log(result);
                            var data=JSON.parse(result);
                            text=`<h2 class="name-page">Forfaits Internet</h2>`;					

                            $.each(data,function (i) { 
                               
                               text+=`<article class="item-proposal display_offer" data-href="#">
                                <div class="img-holder logo_supplier">
                                    <a href="#"><img src="`+data[i]['logo']+`" title="Forfaits mobile Bouygues Telecom" alt="Forfaits mobile Bouygues Telecom" /></a>
                                </div>
                                <div class="item-proposal-info">
                                    <h3 class="item-title">`+data[i]['supplier']+`</h3>
                                    <h4 class="item-price">`+data[i]['price']+`DH/mois</h4>
                                    <h4 class="item-price-promo"><strike>400 DH/mois</strike> pendant 12 mois</h4>               
                                    <p class="icon section">
                                        <span>
                                            <svg class="icon-location-new"><use xlink:href="#icon-internet"></use></svg>
                                        </span>
                                        `+data[i]['supplier']+`
                                    </p>
                                    <p class="icon">
                                    <span class="characteristic">
                                        <span>
                                            <svg class="icon-location-new"><use xlink:href="#icon-tachometer-alt"></use></svg>
                                        </span>
                                        <span class="characteristic_name">TV</span> 
                                    </span>
                                    <span class="characteristic">
                                        <span>
                                            <svg class="icon-location-new"><use xlink:href="#icon-ethernet"></use></svg>
                                        </span>
                                        <span class="characteristic_name">Modem:</span> Oui
                                    </span>
                                    <span class="characteristic">
                                        <span>
                                            <svg class="icon-location-new"><use xlink:href="#icon-phone-alt"></use></svg>
                                        </span>
                                        <span class="characteristic_name">Appels:</span> illimités vers fixes
                                    </span>
                                    <span class="characteristic">
                                        <span>
                                            <svg class="icon-location-new"><use xlink:href="#icon-ring"></use></svg>
                                        </span>
                                        12 mois
                                    </span>
                                    
                                    </p>
                                    <!--
                                    <span class="like icon">pendant 12 mois</span>
                                    //-->
                                </div>
                            </article>`;
                            }); 

                            $("#offer").html(text); 
                            $(".pagination").html(`<ul>
                                    <li><a href="#" class="active" >1</a></li>
                                </ul>`) 
                            
                        }
                     
                     });
                   
                });
            });
        
        </script>
    {/literal}