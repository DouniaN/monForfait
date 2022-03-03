<?php
/* Smarty version 3.1.33, created on 2021-06-16 23:28:37
  from 'C:\xamp\htdocs\10-04-2021\secure\template\tpl\page1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ca6d05e55651_82636266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '501ae668d21858c07379ce9748c17bcbdf143b3b' => 
    array (
      0 => 'C:\\xamp\\htdocs\\10-04-2021\\secure\\template\\tpl\\page1.tpl',
      1 => 1623878914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca6d05e55651_82636266 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>

    <link href="../../static/css/sty.scss" rel="stylesheet" >
<?php echo '<script'; ?>

 
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
</head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
<section class="wrapper">
  <div class="container">
  
  <div class="row">
 <div class="col-sm-6" id="admin" onclick="document.getElementById('id01').style.display='block'"><div class="card text-white card-has-bg click-col" style="background-image:url('https://www.ecossimo.com/wp-content/uploads/sct-telecom-avis.jpg');background-repeat:repeat-y;">
         <img class="card-img d-none" src="" alt="">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Manage </small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Gestion des offres</a></h4>
           <small><i class="far fa-clock"></i> <?php echo $_smarty_tpl->tpl_vars['dateFr']->value;?>
</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" alt="Generic placeholder image" style="max-width:60px">
  <div class="media-body">
    <h6 class="my-0 text-white d-block">Admin</h6>
     <small>login</small>
  </div>
</div>
          </div>
        </div>
      </div></div>
     <div class="col-sm-6" id="user"><div class="card text-white card-has-bg click-col" style="background-image:url('https://static8.depositphotos.com/1025323/1036/i/600/depositphotos_10362540-stock-photo-information-universe.jpg');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Mobile Et Internet</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Trouver les meilleurs forfaits</a></h4>
           <small><i class="far fa-clock"></i> <?php echo $_smarty_tpl->tpl_vars['dateFr']->value;?>
</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-white d-block">User</h6>
     <small>Meilleur forfait: le comparateur de prix</small>
  </div>
</div>
          </div>
        </div>
      </div></div>
  
          </div>
        </div>
      </div></div>
  
</div>
  



</div>
</section>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="admin/login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://img.icons8.com/dotty/2x/admin-settings-male.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Dounia" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Dounia@2021" name="psw" required>
        
      <button type="submit">Login</button>
    
    </div>

  
  </form>
</div>

<?php echo '<script'; ?>
>
  $('#user').click(function(){
    window.location.replace('comparateur.php');
  });
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
<?php echo '</script'; ?>
>

<?php }
}
