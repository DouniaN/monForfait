<?php
/* Smarty version 3.1.33, created on 2021-04-18 15:35:08
  from 'C:\xamp\htdocs\10-04-2021\secure\template\tpl\cc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607c358c36e811_37777047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b64973debabfbf6be18691eced7bc74360a7d9c2' => 
    array (
      0 => 'C:\\xamp\\htdocs\\10-04-2021\\secure\\template\\tpl\\cc.tpl',
      1 => 1618732032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607c358c36e811_37777047 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
 <html lang="fr">

<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../static/cdn/css/uikit.css" />
    <link rel="stylesheet" href="../../static/cdn/css/mzs.css" />
    <link rel="stylesheet" href="../../static/cdn/css/ion.rangeSlider.css" />

    <link rel="stylesheet" href="../../static/cdn/css/sumoselect.css" />
    
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../static/cdn/js/uikit.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../static/cdn/js/uikit-icons.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../static/cdn/js/ion.rangeSlider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../static/cdn/js/jquery.sumoselect.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../static/cdn/js/responsiveCarousel.min.js"><?php echo '</script'; ?>
>
</head>

<body>
    <!-- Header -->
    <heaeder>
        <div class="mzs__header mzs-shadow-d1">
            <div class="uk-container uk-container-center mzs__header-wrap ">
                <nav>
                    <div class="uk-navbar-brand uk-hidden-small uk-float-left">
                        <img src="../../static/cdn/images/logo.png">
                    </div>
                    <ul class="uk-navbar-nav uk-hidden-small uk-float-right mz-menu">
                        <li class="mzs-active">
                            <a href="#!">Forfaits mobile</a>
                        </li>
                        <li>
                            <a href="#!">Opérateurs Telecom</a>
                        </li>
                        <li>
                            <a href="#!">Forfaits bloqués</a>
                        </li>
                        <li>
                            <a href="#!">Mobile</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- for mobile -->
            <nav class="uk-navbar uk-navbar-container mb-show">
                <div class="uk-navbar-left">
                    <a class="uk-navbar-toggle" uk-icon="icon: settings"  href="#" uk-toggle="target: #offcanvas-menu"></a>
                </div>
                <div class="uk-navbar-center">
                    <a href="" class="uk-navbar-item uk-logo"><img src="../../static/cdn/images/logo.png"></a>
                </div>
                <div class="uk-navbar-right">
                    <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#" uk-toggle="target: #offcanvas-flip"></a>
                </div>
            </nav>


            <div id="offcanvas-flip" uk-offcanvas="flip: true;  overlay: true">
                <div class="uk-offcanvas-bar">

                    <button class="uk-offcanvas-close" type="button" uk-close></button>

                    <ul class="uk-nav uk-nav-default">
                        <li class="uk-active"><a href="#">Forfaits mobile</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-parent"><a href="#">Opérateurs Telecom</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-parent"><a href="#">Forfaits bloqués</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-parent"><a href="#">Cartes prépayées</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-parent"><a href="#">Mobile</a></li>
                        <li class="uk-nav-divider"></li>
                    </ul>

                </div>
            </div>

            <div id="offcanvas-menu" class="uk-offcanvas" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar mz_menu-white">
                    <div class="uk-flex uk-flex-center">

                            <div class="mzs__aside_nav mzs-shadow-d1">

                                <div class="mzs__sherlock-menu sherlock-menu-padding uk-fixed-navigtion mb-sticky t0">
                                    <b>Vos critères</b>
                                    <button class="mzs-button uk-button-default uk-float-right">Réinitialiser</button>
                                </div>

                                <section class="uk-padding-small dev_bottom">
                                    <div class="mzs__aside_title">
                                        BUDGET MENSUEL
                                        <div class="uk-float-right range_info">
                                            <span>0$</span>
                                            <span> - </span>
                                            <span>175$</span>
                                        </div>
                                    </div>
                                    <input type="text" id="range_m01" name="example_name" value="" />
                                    <div class="range_m"><span>min</span><span class="uk-float-right">max</span></div>
                                </section>

                                <section class="uk-padding-small dev_bottom">
                                    <div class="mzs__aside_title">
                                        COMMUNICATION
                                        <div class="uk-float-right range_info">
                                            <span>0min</span>
                                            <span> - </span>
                                            <span>Illimitées</span>
                                        </div>
                                    </div>
                                    <input type="text" id="range_m02" name="example_name" value="" />
                                    <div class="range_m"><span>min</span><span class="uk-float-right">max</span></div>
                                </section>

                                <section class="uk-padding-small dev_bottom">
                                    <div class="mzs__aside_title">
                                        DATA
                                        <div class="uk-float-right range_info">
                                            <span>0Mo</span>
                                            <span> - </span>
                                            <span>Illimitée</span>
                                        </div>
                                    </div>
                                    <input type="text" id="range_m03" name="example_name" value="" />
                                    <div class="range_m"><span>min</span><span class="uk-float-right">max</span></div>
                                    <div class="mz-checkbox" uk-grid>
                                        <ul class="mz-checkbox-style">
                                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" checked> Data illimitée</label></li>
                                            <li> <label class="width100"><input class="uk-checkbox" type="checkbox"> 3G+ jusqu'à 42Mb/s</label></li>
                                            <li><label class="width100"><input class="uk-checkbox" type="checkbox"> 4G</label></li>
                                            <li><label class="width100"><input class="uk-checkbox" type="checkbox"> 4G+</label></li>
                                        </ul>
                                    </div>
                                </section>

                                <section class="uk-padding-small dev_bottom">
                                    <div class="mzs__aside_title">
                                        OPÉRATEURS
                                    </div>

                                    <select multiple="multiple" onchange="console.log('changed', this)" placeholder="Tout" class="SlectBox" required>
                                        <option value=""> Afone Mobile</option>
                                        <option value="">Auchan Telecom</option>
                                        <option value="">Bouygues Telecom</option>
                                        <option value="">Budget Mobile</option>
                                        <option value="">Cdiscount Mobile</option>
                                        <option value="">CIC / Crédit Mutuel</option>
                                        <option value="">Coriolis Télécom</option>
                                        <option value="">Free Mobile</option>
                                        <option value="">La Poste Mobile</option>
                                        <option value="">Leclerc Mobile</option>
                                        <option value="">NRJ Mobile</option>
                                        <option value="">Orange</option>
                                        <option value="">Prixtel</option>
                                        <option value="">RED by SFR</option>
                                        <option value="">SFR</option>
                                        <option value=""> Sim+</option>
                                        <option value=""> Sosh</option>
                                        <option value=""> Syma</option>
                                    </select>

                                </section>

                                <section class="uk-padding-small dev_bottom">
                                    <div class="mzs__aside_title">
                                        Engagement
                                    </div>
                                    <div class="mz-checkbox" uk-grid>
                                        <ul class="mz-checkbox-style">
                                            <li><label class="mz-checkbox-line"><input class="uk-radio" type="radio" name="engagment" checked> Avec</label></li>
                                            <li><label class="mz-checkbox-line"><input class="uk-radio" type="radio" name="engagment"> Sans</label></li>
                                        </ul>
                                    </div>
                                </section>

                                <!-- Plus -->
                                <section class="uk-padding-small dev_bottom  showcriteres">
                                    <div class="mzs__aside_title">
                                        SMS ET MMS
                                    </div>
                                    <div class="mz-checkbox" uk-grid>
                                        <ul class="mz-checkbox-style">
                                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" > SMS illimités</label></li>
                                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" > MMS illimités</label></li>
                                        </ul>
                                    </div>
                                </section>

                                <section class="uk-padding-small dev_bottom  showcriteres">
                                    <div class="mzs__aside_title">
                                        TYPE DE FORFAIT
                                    </div>
                                    <div class="mz-checkbox" uk-grid>
                                        <ul class="mz-checkbox-style">
                                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" > Forfait tablette</label></li>
                                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" > Forfait bloqué</label></li>
                                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" > Sans engagement</label></li>
                                        </ul>
                                    </div>
                                </section>

                                <section class="uk-padding-small dev_bottom  showcriteres">
                                    <div class="mzs__aside_title">
                                        TYPE D'ANTENNE
                                    </div>

                                    <select multiple="multiple" onchange="console.log('changed', this)" placeholder="Tout" class="SlectBox" required>
                                        <option value="">Bouygues Telecom</option>
                                        <option value="">Bouygues Telecom / Orange / SFR</option>
                                        <option value="">Free Mobile / Orange</option>
                                        <option value="">Orange</option>
                                        <option value="">Orange / SFR</option>
                                        <option value="">SFR</option>
                                    </select>

                                </section>

                                <section class="uk-padding-small dev_bottom  showcriteres">
                                    <div class="mzs__aside_title">
                                        OPTIONS DU FORFAIT
                                    </div>
                                    <div class="mz-checkbox" uk-grid>
                                        <ul class="mz-checkbox-style">
                                            <li><label class="mz-checkbox-line"><input class="uk-checkbox" type="checkbox" > VoIP</label></li>
                                            <li><label class="mz-checkbox-line"><input class="uk-checkbox" type="checkbox" > Wi-Fi</label></li>
                                            <li><label class="mz-checkbox-line"><input class="uk-checkbox" type="checkbox" > Modem</label></li>
                                            <li><label class="mz-checkbox-line"><input class="uk-checkbox" type="checkbox" > TV</label></li>
                                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" > Internet non bridé</label></li>
                                        </ul>
                                    </div>
                                </section>

                                <section class="mb-sticky b0">
                                    <div class="mb-bottom-stack">
                                        <button class="mzs-button uk-button-default block-center uk-offcanvas-close">Save</button>
                                    </div>
                                </section>

                            </div>
                            <!--  -->

                    </div>
                </div>
            </div>

        </div>
    </heaeder>

    <main class="uk-container mz-margin-main">
        <!-- Left menu -->
        <aside class="uk-container uk-container-center uk-float-left mb-hidde">
            <div class="mzs__aside_nav mzs-shadow-d1">

                <div class="mzs__sherlock-menu sherlock-menu-padding">
                    <b>Vos critères</b>
                    <button class="mzs-button uk-button-default uk-float-right">Réinitialiser</button>
                </div>

                <section class="uk-padding-small dev_bottom">
                    <div class="mzs__aside_title">
                        BUDGET MENSUEL
                        <div class="uk-float-right range_info">
                            <span>0$</span>
                            <span> - </span>
                            <span>175$</span>
                        </div>
                    </div>
                    <input type="text" id="range_01" name="example_name" value="" />
                    <div class="range_m"><span>min</span><span class="uk-float-right">max</span></div>
                </section>

                <section class="uk-padding-small dev_bottom">
                    <div class="mzs__aside_title">
                        COMMUNICATION
                        <div class="uk-float-right range_info">
                            <span>0min</span>
                            <span> - </span>
                            <span>Illimitées</span>
                        </div>
                    </div>
                    <input type="text" id="range_02" name="example_name" value="" />
                    <div class="range_m"><span>min</span><span class="uk-float-right">max</span></div>
                </section>

                <section class="uk-padding-small dev_bottom">
                    <div class="mzs__aside_title">
                        DATA
                        <div class="uk-float-right range_info">
                            <span>0Mo</span>
                            <span> - </span>
                            <span>Illimitée</span>
                        </div>
                    </div>
                    <input type="text" id="range_03" name="example_name" value="" />
                    <div class="range_m"><span>min</span><span class="uk-float-right">max</span></div>
                    <div class="mz-checkbox" uk-grid>
                        <ul class="mz-checkbox-style">
                           <li><label class="width100"><input class="uk-checkbox" type="checkbox" checked> Data illimitée</label></li>
                            <li><label class="width100"><input class="uk-checkbox" type="checkbox"> 3G+ jusqu'à 42Mb/s</label></li>
                            <li><label class="width100"><input class="uk-checkbox" type="checkbox"> 4G</label></li>
                            <li><label class="width100"><input class="uk-checkbox" type="checkbox"> 4G+</label></li>
                       </ul>




                    </div>
                </section>

                <section class="uk-padding-small dev_bottom">
                    <div class="mzs__aside_title">
                        OPÉRATEURS
                    </div>

                    <select multiple="multiple" onchange="console.log('changed', this)" placeholder="Tout" class="SlectBox" required>
                        <option value=""> Afone Mobile</option>
                        <option value="">Auchan Telecom</option>
                        <option value="">Bouygues Telecom</option>
                        <option value="">Budget Mobile</option>
                        <option value="">Cdiscount Mobile</option>
                        <option value="">CIC / Crédit Mutuel</option>
                        <option value="">Coriolis Télécom</option>
                        <option value="">Free Mobile</option>
                        <option value="">La Poste Mobile</option>
                        <option value="">Leclerc Mobile</option>
                        <option value="">NRJ Mobile</option>
                        <option value="">Orange</option>
                        <option value="">Prixtel</option>
                        <option value="">RED by SFR</option>
                        <option value="">SFR</option>
                        <option value=""> Sim+</option>
                        <option value=""> Sosh</option>
                        <option value=""> Syma</option>
                    </select>

                </section>

                <section class="uk-padding-small dev_bottom">
                    <div class="mzs__aside_title">
                        Engagement
                    </div>
                    <div class="mz-checkbox" uk-grid>
                        <ul class="mz-checkbox-style">
                            <li><label class="mz-checkbox-line"><input class="uk-radio" type="radio" name="engagment" checked> Avec</label></li>
                            <li><label class="mz-checkbox-line"><input class="uk-radio" type="radio" name="engagment"> Sans</label></li>
                        </ul>
                    </div>
                </section>

                <!-- Plus -->
                <section class="uk-padding-small dev_bottom d-none showcriteres">
                    <div class="mzs__aside_title">
                        SMS ET MMS
                    </div>
                    <div class="mz-checkbox" uk-grid>
                        <ul class="mz-checkbox-style">
                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" > SMS illimités</label></li>
                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" > MMS illimités</label></li>
                        </ul>
                    </div>
                </section>

                <section class="uk-padding-small dev_bottom d-none showcriteres">
                    <div class="mzs__aside_title">
                        TYPE DE FORFAIT
                    </div>
                    <div class="mz-checkbox" uk-grid>
                        <ul class="mz-checkbox-style">
                           <li><label class="width100"><input class="uk-checkbox" type="checkbox" > Forfait tablette</label></li>
                           <li><label class="width100"><input class="uk-checkbox" type="checkbox" > Forfait bloqué</label></li>
                           <li><label class="width100"><input class="uk-checkbox" type="checkbox" > Sans engagement</label></li>
                       </ul>
                    </div>
                </section>

                <section class="uk-padding-small dev_bottom d-none showcriteres">
                    <div class="mzs__aside_title">
                        TYPE D'ANTENNE
                    </div>

                    <select multiple="multiple" onchange="console.log('changed', this)" placeholder="Tout" class="SlectBox" required>
                        <option value="">Bouygues Telecom</option>
                        <option value="">Bouygues Telecom / Orange / SFR</option>
                        <option value="">Free Mobile / Orange</option>
                        <option value="">Orange</option>
                        <option value="">Orange / SFR</option>
                        <option value="">SFR</option>
                    </select>

                </section>

                <section class="uk-padding-small dev_bottom d-none showcriteres">
                    <div class="mzs__aside_title">
                        OPTIONS DU FORFAIT
                    </div>
                    <div class="mz-checkbox" uk-grid>
                        <ul class="mz-checkbox-style">
                            <li><label class="mz-checkbox-line"><input class="uk-checkbox" type="checkbox" > VoIP</label></li>
                            <li><label class="mz-checkbox-line"><input class="uk-checkbox" type="checkbox" > Wi-Fi</label></li>
                            <li><label class="mz-checkbox-line"><input class="uk-checkbox" type="checkbox" > Modem</label></li>
                            <li><label class="mz-checkbox-line"><input class="uk-checkbox" type="checkbox" > TV</label></li>
                            <li><label class="width100"><input class="uk-checkbox" type="checkbox" > Internet non bridé</label></li>
                        </ul>
                    </div>
                </section>

                <section>
                    <div class="mzs__sherlock-menu sherlock-menu-padding">
                        <button class="mzs-button uk-button-default block-center pluscriteres">Plus de critères</button>
                    </div>
                </section>

            </div>
            <!--  -->
        </aside>

        <!-- Content -->
        <div class="mzs__content uk-container">
            <div class="mzs-shadow-d1 cb__white">
                <div class="mzs__sherlock-menu sherlock-menu-padding warning-btn">
                    <b>170</b> Forfaits correspondants
                    <button class="mzs-button uk-button-default uk-float-right mb-hidde"><span uk-icon="icon: compare"></span> Comparer</button>
                    <div id="signaler" class="warning-btnin">
                        <a href="#!" uk-toggle>
                            <span uk-icon="icon: warning"></span>
                            <div class="warning-signaler">Signaler</div>
                        </a>
                    </div>
                </div>

                <div class="uk-padding-small signalerform">
                    <form>
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend">Cochez le ou les forfaits contenant une erreur</legend>



                            <div class="uk-margin">
                                <textarea class="uk-textarea" rows="5" placeholder="puis indiquez ici l'erreur que vous avez constatée. Merci de votre contribution."></textarea>
                            </div>

                            <div class="uk-margin uk-inline">
                                <a class="uk-form-icon" href="" uk-icon="icon: mail"></a>
                                <input class="uk-input" type="text" placeholder="Email">
                            </div>

                            <div class="uk-margin uk-inline uk-float-right">
                                <button class="mzs-btn-bleu">Envoyer</button>
                                <button class="mzs-btn-bleu">Annuler</button>
                            </div>

                        </fieldset>
                    </form>
                </div>


                <div class="options_padding mb-hidde-small">
                    <div class="mzs__options">
                        <div class="mzs__options-block">
                            <span class="mzs__options-title">Tarif :</span>
                            <button class="uk-button uk-button-default uk-button-small mzs-button-nav" type="button">1 mois</button>
                            <div class="mz-droplist" uk-dropdown="mode: click">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="#">1 mois</a></li>
                                    <li><a href="#">12 mois</a></li>
                                    <li><a href="#">24 mois</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mzs__options-block">
                            <span class="mzs__options-title">Page :</span>
                            <span class="uk-button uk-button-default uk-button-small mzs-button-supactive" type="button">20</span>
                            <span class="uk-button uk-button-default uk-button-small mzs-button-supnav" type="button">50</span>
                            <span class="uk-button uk-button-default uk-button-small mzs-button-supnav" type="button">100</span>
                        </div>

                        <div class="mzs__options-block uk-float-right">
                            <span class="mzs__options-title">Tri :</span>
                            <button class="uk-button uk-button-default uk-button-small mzs-button-nav" type="button">Prix décroissant</button>
                            <div class="mz-droplist" uk-dropdown="mode: click; pos: bottom-right">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="#">Prix décroissant</a></li>
                                    <li><a href="#">Popularité croissante</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mzs-content">

                <ul class="uk-margin-remove" uk-accordion="multiple: true" uk-scrollspy="target: > li; cls:uk-animation-slide-bottom; delay: 300">

                    <li class="//uk-open mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/img-sfr.png">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">SFR</div>
                                <div class="mzs__wbox-subtitle">Forfait 2h + 500 Mo</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Pas d'appels inclus </div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                                <div class="mzs__wbox-subtitle">100 SMS et 100 MMS </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">8,99 DH</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-VoIP mzs__ico" title="VoIP" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi mzs__ico" title="Wi-Fi" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Modem, VoIP.</div>
                                    <div><span class="dblock">International :</span> Appels inclus vers une sélection de pays à l'internationnale et les DOM, mais vers 10 correspondants différents maximum par mois</div>
                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/orange.jpg">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">Orange</div>
                                <div class="mzs__wbox-subtitle">Let's go 2 Go</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Pas d'appels inclus</div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">9,99 €</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-VoIP mzs__ico" title="VoIP" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi mzs__ico" title="Wi-Fi" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Wi-Fi, Modem, VoIP, TV. </div>
                                    <div><span class="dblock">International :</span> International : 500 Mo/an d’internet mobile depuis la zone Europe et les DOM.</div>
                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/Sosh.png">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">Sosh</div>
                                <div class="mzs__wbox-subtitle">9,99 €</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Appels illimités</div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                                <div class="mzs__wbox-subtitle">SMS et MMS illimités </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">9,99 €</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Modem, VoIP.</div>

                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/img-sfr.png">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">SFR</div>
                                <div class="mzs__wbox-subtitle">Forfait 2h + 500 Mo</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Pas d'appels inclus </div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                                <div class="mzs__wbox-subtitle">100 SMS et 100 MMS </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">8,99 DH</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-VoIP mzs__ico" title="VoIP" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi mzs__ico" title="Wi-Fi" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Modem, VoIP.</div>
                                    <div><span class="dblock">International :</span> Appels inclus vers une sélection de pays à l'internationnale et les DOM, mais vers 10 correspondants différents maximum par mois</div>
                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/orange.jpg">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">Orange</div>
                                <div class="mzs__wbox-subtitle">Let's go 2 Go</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Pas d'appels inclus</div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">9,99 €</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-VoIP mzs__ico" title="VoIP" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi mzs__ico" title="Wi-Fi" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Wi-Fi, Modem, VoIP, TV. </div>
                                    <div><span class="dblock">International :</span> International : 500 Mo/an d’internet mobile depuis la zone Europe et les DOM.</div>
                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/Sosh.png">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">Sosh</div>
                                <div class="mzs__wbox-subtitle">9,99 €</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Appels illimités</div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                                <div class="mzs__wbox-subtitle">SMS et MMS illimités </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">9,99 €</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Modem, VoIP.</div>

                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/orange.jpg">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">Orange</div>
                                <div class="mzs__wbox-subtitle">Let's go 2 Go</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Pas d'appels inclus</div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">9,99 €</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-VoIP mzs__ico" title="VoIP" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi mzs__ico" title="Wi-Fi" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Wi-Fi, Modem, VoIP, TV. </div>
                                    <div><span class="dblock">International :</span> International : 500 Mo/an d’internet mobile depuis la zone Europe et les DOM.</div>
                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/orange.jpg">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">Orange</div>
                                <div class="mzs__wbox-subtitle">Let's go 2 Go</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Pas d'appels inclus</div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">9,99 €</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-VoIP mzs__ico" title="VoIP" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi mzs__ico" title="Wi-Fi" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Wi-Fi, Modem, VoIP, TV. </div>
                                    <div><span class="dblock">International :</span> International : 500 Mo/an d’internet mobile depuis la zone Europe et les DOM.</div>
                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/orange.jpg">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">Orange</div>
                                <div class="mzs__wbox-subtitle">Let's go 2 Go</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Pas d'appels inclus</div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">9,99 €</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-VoIP mzs__ico" title="VoIP" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi mzs__ico" title="Wi-Fi" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Wi-Fi, Modem, VoIP, TV. </div>
                                    <div><span class="dblock">International :</span> International : 500 Mo/an d’internet mobile depuis la zone Europe et les DOM.</div>
                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/orange.jpg">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">Orange</div>
                                <div class="mzs__wbox-subtitle">Let's go 2 Go</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Pas d'appels inclus</div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">9,99 €</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-VoIP mzs__ico" title="VoIP" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi mzs__ico" title="Wi-Fi" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Wi-Fi, Modem, VoIP, TV. </div>
                                    <div><span class="dblock">International :</span> International : 500 Mo/an d’internet mobile depuis la zone Europe et les DOM.</div>
                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="mz-tabel">
                        <div class="mzs__select-box"></div>
                        <div class="uk-accordion-title pos-relative">
                            <div class="mzs__wbox  mz__table">
                                <div class="mzs__wbox-imgwrap">
                                    <img class="mzs__wbox-img" src="../../static/cdn/images/orange.jpg">
                                </div>
                            </div>
                            <div class="mzs__wboxtitles mz__table mz__table-middle">
                                <div class="mzs__wbox-title">Orange</div>
                                <div class="mzs__wbox-subtitle">Let's go 2 Go</div>
                            </div>

                            <div class="mzs__wboxtitles mz__table mz__table-middle mzs__wboxspace">
                                <div class="mzs__wbox-subtitle">Pas d'appels inclus</div>
                                <div class="mzs__wbox-subtitle">Sans engagement </div>
                            </div>

                            <div class="mzs__wboxtitle-right">
                                <div class="mzs__wbox-price">9,99 €</div>
                                <div class="mzs__wbox-icon">
                                    <i class="icon-4g mzs__ico" title="Réseau" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-computer-screen mzs__ico" title="Télévision" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-VoIP mzs__ico" title="VoIP" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi mzs__ico" title="Wi-Fi" uk-tooltip="pos: bottom"></i>
                                    <i class="icon-wifi-modem mzs__ico" title="Modem" uk-tooltip="pos: bottom"></i>
                                </div>
                            </div>

                        </div>


                        <div class="uk-accordion-content w100">
                            <div class="mzs__vbox-open">
                                <div class="mzs__vbox-o-ico mz__table">
                                    <img src="../../static/cdn/images/checked.png">
                                </div>

                                <div class="mzs__vbox-o-info mz__table">
                                    <div>Inclus dans le forfait : Wi-Fi, Modem, VoIP, TV. </div>
                                    <div><span class="dblock">International :</span> International : 500 Mo/an d’internet mobile depuis la zone Europe et les DOM.</div>
                                </div>

                                <div class="mzs__vbox-o-btn mz__table">
                                    <a href="#!" class="mzs-btn-bleu">Voir l'offre</a>
                                    <a href="fiche.html" class="mzs-btn-bleu">Fiche forfait</a>
                                </div>

                            </div>
                        </div>
                    </li>

                </ul>

                <div class="mzs__vbox-pages mzs__sherlock-menu">
                    <ul class="uk-pagination uk-flex-center mz-pagination" uk-margin>
                        <li><a href="#"><span uk-pagination-previous></span></a></li>
                        <li><a href="#">1</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li class="mz-active"><span>7</span></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#"><span uk-pagination-next></span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- News -->

        <div class="mz-30t mz-30b mb-hidde" uk-grid>
            <div class="uk-width-1-2">
                <div class="uk-card uk-card-default new-min">

                    <div class="mzs__new-title">
                        <div class="mzs__newtitle">LES ACTUS DE LA RÉDACTION</div>
                        <span class="mzs__new-titlefx"></span>
                    </div>

                    <nav class="slidernav">
                        <div id="navbtns2" class="mzs__news-control">
                            <a href="#!" class="previous" uk-icon="icon: chevron-left"></a>
                            <a href="#!" class="next" uk-icon="icon: chevron-right"></a>
                        </div>
                    </nav>

                    <div class="new-items2" data-navigation="navbtns2">
                        <div class="crsl-wrap">
                            <div class="crsl-item">
                                <div class="mzs__news-conter">
                                    <div class="mz__table">
                                        <img class="mzs__news-img" src="../../static/cdn/images/new-1.png">
                                    </div>
                                    <div class="mz__table va-top">
                                        <div class="mzs__news-contertitle">Fin des frais d'itinérance : le plan de bataille des régulateurs européens</div>
                                        <div class="mzs__news-contersubtitle">Le Berec, qui rassemble les autorités européennes des télécoms, détaille la marche à suivre pour réguler la fin des frais d'itinérance. Calcul du « fair use », lutte contre la revente massive de cartes SIM ou information du client, tout y passe.</div>
                                    </div>

                                </div>
                            </div>

                            <div class="crsl-item">
                                <div class="mzs__news-conter">
                                    <div class="mz__table">
                                        <img class="mzs__news-img" src="../../static/cdn/images/new-1.png">
                                    </div>
                                    <div class="mz__table va-top">
                                        <div class="mzs__news-contertitle">Fin des frais d'itinérance : le plan de bataille des régulateurs européens</div>
                                        <div class="mzs__news-contersubtitle">Le Berec, qui rassemble les autorités européennes des télécoms, détaille la marche à suivre pour réguler la fin des frais d'itinérance. Calcul du « fair use », lutte contre la revente massive de cartes SIM ou information du client, tout y passe.</div>
                                    </div>

                                </div>
                            </div>

                            <div class="crsl-item">
                                <div class="mzs__news-conter">
                                    <div class="mz__table">
                                        <img class="mzs__news-img" src="../../static/cdn/images/new-1.png">
                                    </div>
                                    <div class="mz__table va-top">
                                        <div class="mzs__news-contertitle">Fin des frais d'itinérance : le plan de bataille des régulateurs européens</div>
                                        <div class="mzs__news-contersubtitle">Le Berec, qui rassemble les autorités européennes des télécoms, détaille la marche à suivre pour réguler la fin des frais d'itinérance. Calcul du « fair use », lutte contre la revente massive de cartes SIM ou information du client, tout y passe.</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="uk-width-1-2">
                <div class="uk-card uk-card-default new-min">

                    <div class="mzs__new-title">
                        <div class="mzs__newtitle">LES BONS PLANS MOBILES</div>
                        <span class="mzs__new-titlefx"></span>
                    </div>

                    <nav class="slidernav">
                        <div id="navbtns" class="mzs__news-control">
                            <a href="#!" class="previous" uk-icon="icon: chevron-left"></a>
                            <a href="#!" class="next" uk-icon="icon: chevron-right"></a>
                        </div>
                    </nav>

                    <div class="crsl-items" data-navigation="navbtns">
                        <div class="crsl-wrap">
                            <div class="crsl-item">
                                <div class="mzs__news-conter">
                                    <div class="mz__table">
                                        <img class="mzs__news-img" src="../../static/cdn/images/new-2.png">
                                    </div>
                                    <div class="mz__table va-top">
                                        <div class="mzs__news-contertitle">Box SFR : jusqu'à 100 € remboursés sur les frais de résiliation</div>
                                        <div class="mzs__news-contersubtitle">Valable du  28/03/2017 au  06/06/2017</div>
                                    </div>

                                </div>
                            </div>

                            <div class="crsl-item">
                                <div class="mzs__news-conter">
                                    <div class="mz__table">
                                        <img class="mzs__news-img" src="../../static/cdn/images/new-2.png">
                                    </div>
                                    <div class="mz__table va-top">
                                        <div class="mzs__news-contertitle">Box SFR : jusqu'à 100 € remboursés sur les frais de résiliation</div>
                                        <div class="mzs__news-contersubtitle">Valable du  28/03/2017 au  06/06/2017</div>
                                    </div>

                                </div>
                            </div>

                            <div class="crsl-item">
                                <div class="mzs__news-conter">
                                    <div class="mz__table">
                                        <img class="mzs__news-img" src="../../static/cdn/images/new-2.png">
                                    </div>
                                    <div class="mz__table va-top">
                                        <div class="mzs__news-contertitle">Box SFR : jusqu'à 100 € remboursés sur les frais de résiliation</div>
                                        <div class="mzs__news-contersubtitle">Valable du  28/03/2017 au  06/06/2017</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </main>



  


    <footer class="mzs__footer mb-hidde">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-2">
                    <div class="mzs__footer-brand">
                        <img src="../../static/cdn/images/logo-white.png">
                    </div>

                    <div class="mzs__footer-info">
                        <span>A PROPOS</span>
                        <p>Mon forfait est un comparateur de forfaits mobile indépendant. En aucun cas, la responsabilité de ce comparateur de prix ne saurait être engagée quant aux informations fournies ou en cas de litige commercial pour un produit ou un service acheté auprès d'une boutique (garantie, SAV, délai de livraison, etc.) Seules les données publiées par chaque cybermarchant sur leur site web font ainsi foi en cas de litige.</p>
                    </div>

                </div>


                <div class="uk-width-1-2">
                    <div class="uk-float-right">
                        <div class="mzs__footer-icons uk-float-right">
                            <span><a href="#!"><div class="ft__icons ft-googleplus"></div></a></span>
                            <span><a href="#!"><div class="ft__icons ft-facebook"></div></a></span>
                            <span><a href="#!"><div class="ft__icons ft-twitter"></div></a></span>
                        </div>

                        <div class="mzs__footer-newlitter">
                            <div class="uk-inline mzs__footer-news">
                                <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: mail"></a>
                                <input class="uk-input" type="text" placeholder="Email">
                                <span>Lorem ipsum dolor sit amet, consectetur</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mzs__footer-copieright">
                © 2012-2016 Forfait Mobile et abonnements mobile.
            </div>
        </div>
    </footer>

</body>
<?php echo '<script'; ?>
>
    $("#range_01, #range_m01").ionRangeSlider({
        type: "double",
        min: 0,
        max: 1000,
        from: 0,
        to: 800,
        hide_min_max: true,
        hide_from_to: false,
    });

    var comunation = [0
               ];

    for(var i=0; i<120; i++) {
        comunation.push(i);
    }
    comunation.push("Illimitées");

    $("#range_02, #range_m02").ionRangeSlider({
        type: "double",
        values: comunation,
        from: 0,
        to: 100,
        hide_min_max: true,
        hide_from_to: false,
    });

    var vals = [0
    ];

    for(var i=0; i<120; i++) {
        vals.push(i);
    }
    vals.push("Illimitée");

    $("#range_03, #range_m03").ionRangeSlider({
        type: "double",
        values: vals,
        from: 0,
        to: 99,
        hide_min_max: true,
        hide_from_to: false,
    });

    $('.SlectBox').SumoSelect();

    $(".pluscriteres").click(function() {
        $(".showcriteres").fadeToggle();
        $(this).text(function(i, v) {
            return v === 'Plus de critères' ? 'Moins critères' : 'Plus de critères'
        })
    });

    $(function() {
        $('.crsl-items').carousel({
            visible: 1,
            itemMinWidth: 180,
            itemEqualHeight: 370,
            itemMargin: 9,
        });

        $("a[href=#]").on('click', function(e) {
            e.preventDefault();
        });
    });

    $(function() {

        $('.new-items2').carousel({
            visible: 1,
            itemMinWidth: 180,
            itemEqualHeight: 370,
            itemMargin: 9,
        });


        $("a[href=#]").on('click', function(e) {
            e.preventDefault();
        });
    });



    $( document ).ready(function() {
        $("#signaler").click(function(){
            $(".signalerform, .mzs__select-box").toggle();
        });

        $(".mzs__select-box").click(function(){
            if ($(this).hasClass('mzs__select-box-active')) {
                $(this).removeClass('mzs__select-box-active');
            } else {
                $(this).addClass('mzs__select-box-active');
            }

        });



    });


<?php echo '</script'; ?>
>

</html>
<?php }
}
