<?php
/* Smarty version 3.1.33, created on 2021-04-18 16:08:43
  from 'C:\xamp\htdocs\10-04-2021\secure\template\tpl\engagement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607c3d6bcd5e00_17205870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61a2001efc2c926571a6ad239c3673ec2c833a98' => 
    array (
      0 => 'C:\\xamp\\htdocs\\10-04-2021\\secure\\template\\tpl\\engagement.tpl',
      1 => 1618754914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/common/menu.tpl' => 1,
  ),
),false)) {
function content_607c3d6bcd5e00_17205870 (Smarty_Internal_Template $_smarty_tpl) {
?><!Doctype html>

<?php $_smarty_tpl->_subTemplateRender('file:../tpl/common/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-xl">
   <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>Engagement</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEngagementModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouvel Engagement</span></a>
						<!--<a href="#deleteEngagementModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>-->						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover test">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Engagement</th>
						<th>Nombre_Mois</th>
						<th>Actions</th>
					</tr>
				</thead>
				
				<tbody>
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listEngagement']->value, 'value', false, 'engagement_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['engagement_key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
						<tr>
							<td>	
								<input type="checkbox" >	
							</td>
							<td class="engagement"><?php echo $_smarty_tpl->tpl_vars['value']->value['engagement'];?>
</td>
							<td class="nb_month"><?php echo $_smarty_tpl->tpl_vars['value']->value['nb_month'];?>
</td>
							<td>
                              <a href="#editEngagementModal" class="edit"  data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                              <a href="#deleteEngagementModal" class="delete" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- ADD Engagement Modal HTML -->
<div id="addEngagementModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="fupForm" name="form1" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Engagement</h4>
					<button type="button" class="close closeModelAdd" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Engagement</label>
						<input id="engagement" name="engagement" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nombre de mois :</label>
						<input id="nbrMois" type="text" name="nbrMois" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
				
					<input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">

				</div>
			</form>
		</div>
	</div>
</div>
<!------------------------------------------Edit Modal HTML------------------------------------------->
<div id="editEngagementModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="EditEngagementForm">
				<div class="modal-header">						
					<h4 class="modal-title">Modifier Engagement</h4>
					<button type="button" class="close closeModelEdit" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Engagement</label>
						<input type="text" id="engagementEdit" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nombre_Mois</label>
						<input type="text" id="nbrMoisEdit" class="form-control" required>
					</div>						
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="button" class="btn btn-info" id="EditEngagement" value="Save">
					<input id="id_Edit" hidden />
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEngagementModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Supprimer Engagement</h4>
					<button type="button" class="close closeModalDelete" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Voulez vous vraiment supprimer cette engagement?</p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="button" class="btn btn-danger deleteOK" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
<!-------------------------------------------EDIT ENGAGEMENT---------------------------------------------------!>

 <?php echo '<script'; ?>
>
    $(document).ready(function(){
        $(".edit").click(function(){		
         var id               = $(this).data('id');
		 var nb_month         = $(this).parent().siblings('.nb_month').text();
		 var engagement       = $(this).parent().siblings('.engagement').text();
	     $("#id_Edit").val(id);
         $("#engagementEdit").val(engagement);
         $("#nbrMoisEdit").val(nb_month);

	    });
	});
 <?php echo '</script'; ?>
>


<!------------------------------------------DELETE ENGAGEMENT-------------------------------------------------------------------!>

  <?php echo '<script'; ?>
>
    $(document).ready(function(){
      	$('.delete').click(function(){
          var delete_id=$(this).data('id');
		  $("#id_Edit").val(delete_id);
	  	});
	});
  <?php echo '</script'; ?>
>



  <?php echo '<script'; ?>
>
   $('.deleteOK').click(function(){
	   delte_id=$("#id_Edit").val();
		$.ajax({
          url  : "engagement.php?action=delete_ok",
		  type : "GET",
		  data :{
            id:delte_id
		  },
		success: function(dataResult){
			console.log(dataResult);
			$(".closeModalDelete").click();
			location.reload();  //Refresh page
		}
		});
   });
  <?php echo '</script'; ?>
>


	<?php echo '<script'; ?>
>
	$(document).ready(function() {
		$('#butsave').on('click', function() {
			
			var engagement = $('#engagement').val();
			var nbrMois    = $('#nbrMois').val();
		     var tt=$("#id_Edit").val();
			 
			if(engagement!="" && nbrMois!=""){
				$.ajax({
					url: "engagement.php?action=add_ok",
					type: "POST",
					data: {
						engagement: engagement,
						nbrMois   : nbrMois									
					},
					cache: false,
					success: function(dataResult){
					
						$('#fupForm').find('input:text').val('');
						$(".closeModelAdd").click();
	
						$("#success").show();
						setTimeout(function() 
						{
							location.reload();  //Refresh page
						}, 2000);
						var ligne = "<tr><td><input type='checkbox' name='select'></td><td>" + engagement + "</td><td>" + nbrMois + "</td><td><a href='#editEngagementModal' class='edit' data-id=tt data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a><a href='#deleteEngagementModal' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a></td></tr>";
                        $("table.test").append(ligne);													
					}
				});
			}
			else{
				alert('Please fill all the field !');
			}
		});
	});
	<?php echo '</script'; ?>
>



	<?php echo '<script'; ?>
>
	  var $edit_comment;
	$(document).ready(function() {
		$('#EditEngagement').on('click', function() {

			var engagement = $('#engagementEdit').val();
			var nbrMois    = $('#nbrMoisEdit').val();
		    var idEdit     = $('#id_Edit').val();
			$edit_comment  = $(this).parent();
			if(engagement!="" && nbrMois!=""){
				
				$.ajax({
					url: "engagement.php?action=edit_ok",
					type: "POST",
					data: {
						engagement: engagement,
						nbrMois   : nbrMois,
						id        : idEdit
					},
					cache: false,
					success: function(dataResult){
						console.log(dataResult);
						$('#EditEngagementForm').find('input:text').val('');
						$(".closeModelEdit").click();
						$("#success").show();
						$('#success').html('action efféctuée avec succéss!'); 
						setTimeout(function() 
						{
							location.reload();  //Refresh page
						}, 1000);
																		
					}
				});
			}
			else{
				alert('Please fill all the field !');
			}
		});
	});
	<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
<?php echo '</script'; ?>
>


<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>

<?php }
}
