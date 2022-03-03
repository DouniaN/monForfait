<?php
/* Smarty version 3.1.33, created on 2021-06-26 09:12:41
  from '/storage/ssd3/196/17127196/public_html/secure/template/tpl/page1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60d6ef89ee1d89_64830475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40493607c99810a57cc4b376ebbb1bb4c425340b' => 
    array (
      0 => '/storage/ssd3/196/17127196/public_html/secure/template/tpl/page1.tpl',
      1 => 1624698758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d6ef89ee1d89_64830475 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>

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
      <label for="uname"><b>Login</b></label>
      <input type="text" placeholder="Dounia" name="uname" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Dounia@2021" name="psw" required>
        
      <button type="submit">Connecter</button>
    
    </div>

  
  </form>
</div>
<style>

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 6%;
  border-radius: 8%;
}

.container {
  padding: 66px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}


  

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

body{
    background-color:rgb(0 123 255 / 50%);
  }
 
 
  
  .card{
    border: none;
    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
   overflow:hidden;
   border-radius:20px;
   min-height:450px;
     box-shadow: 0 0 12px 0 rgba(0,0,0,0.2);
  
   @media (max-width: 768px) {
    min-height:350px;
  }
  
  @media (max-width: 420px) {
    min-height:300px;
  }
  
   &.card-has-bg{
   transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    background-size:120%;
    background-repeat:no-repeat;
    background-position: center center;
    &:before {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: inherit;
      -webkit-filter: grayscale(1);
    -moz-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    filter: grayscale(100%);}
  
    &:hover {
      transform: scale(0.98);
       box-shadow: 0 0 5px -2px rgba(0,0,0,0.3);
      background-size:130%;
       transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  
      .card-img-overlay {
        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
        background: rgb(35,79,109);
       background: linear-gradient(0deg, rgba(4,69,114,0.5) 0%, rgba(4,69,114,1) 100%);
       }
    }
  }
   .card-footer{
    background: none;
     border-top: none;
      .media{
       img{
         border:solid 5px rgba(234,95,0,0.3);
       }
     }
   }
 
   .card-body{ 
     transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  }
   &:hover {
     .card-body{
       margin-top:30px;
       transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
     }
   cursor: pointer;
   transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  }
   .card-img-overlay {
    transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
   background: rgb(35,79,109);
  background: linear-gradient(0deg, rgba(35,79,109,0.3785889355742297) 0%, rgba(69,95,113,1) 100%);
  }
  }

  </style>
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
