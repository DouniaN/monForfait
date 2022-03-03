<?php
/* Smarty version 3.1.33, created on 2021-04-16 16:29:05
  from 'C:\xamp\htdocs\MVC\secure\template\tpl\Supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60799f31808f83_99001750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ff1e285e4a97905a882424094619a7fb420752a' => 
    array (
      0 => 'C:\\xamp\\htdocs\\MVC\\secure\\template\\tpl\\Supplier.tpl',
      1 => 1618583343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:C:\\xamp\\htdocs\\MVC\\secure\\template\\tpl\\common\\menu.tpl' => 1,
  ),
),false)) {
function content_60799f31808f83_99001750 (Smarty_Internal_Template $_smarty_tpl) {
?><!Doctype html>

<?php $_smarty_tpl->_subTemplateRender('file:C:\xamp\htdocs\MVC\secure\template\tpl\common\menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
						<h2>Gestion <b>Fournisseurs</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addsupplierModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouvel supplier</span></a>
						<!--<a href="#deletesuppliereModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>-->						
					</div>
				</div>
			</div>
            <div class="supplier_data">  
                
            </div>
		</div>
	</div>        
</div>
<!-- ADD Supplier Modal HTML -->
<div id="addsupplierModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="fupForm" name="form1" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Fournisseur</h4>
					<button type="button" class="close closeModelAdd" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>supplier</label>
						<input id="supplier" name="supplier" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>logo :</label>
						<input id="logo" type="text" name="logo" class="form-control" required>
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
<div id="editsupplierModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="EditsupplierForm">
				<div class="modal-header">						
					<h4 class="modal-title">Modifier supplier</h4>
					<button type="button" class="close closeModelEdit" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>supplier</label>
						<input type="text" id="supplierEdit" class="form-control" required>
					</div>
					<div class="form-group">
						<label>logo</label>
						<input type="text" id="nbrMoisEdit" class="form-control" required>
					</div>						
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="button" class="btn btn-info" id="Editsupplier" value="Save">
					<input id="id_Edit" hidden />
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deletesupplierModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Supprimer supplier</h4>
					<button type="button" class="close closeModalDelete" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Voulez vous vraiment supprimer cette supplier?</p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="button" class="btn btn-danger deleteOK" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>

<!-------------------------------------------GET supplier----------------------------------------------------!>
  
    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            load_data();
            function load_data()
            {
                $.ajax({
                    url     :"supplier.php",
                    method  :"POST",
                    success :function(data)
                    {
                        $('#supplier_data').html(data);
                    }
                });
            }
        });
    <?php echo '</script'; ?>
>
  


<!-------------------------------------------EDIT supplier---------------------------------------------------!>

 <?php echo '<script'; ?>
>
    $(document).ready(function(){
        $(".edit").click(function(){		
         var id               = $(this).data('id');
		 var logo         = $(this).parent().siblings('.logo').text();
		 var supplier       = $(this).parent().siblings('.supplier').text();
	     $("#id_Edit").val(id);
         $("#supplierEdit").val(supplier);
         $("#nbrMoisEdit").val(logo);

	    });
	});
 <?php echo '</script'; ?>
>


<!------------------------------------------DELETE supplier-------------------------------------------------------------------!>

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
          url  : "supplier.php?action=delete_ok",
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
			
			var supplier = $('#supplier').val();
			var nbrMois    = $('#nbrMois').val();
		     var tt=$("#id_Edit").val();
			 
			if(supplier!="" && nbrMois!=""){
				$.ajax({
					url: "supplier.php?action=add_ok",
					type: "POST",
					data: {
						supplier: supplier,
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
						var ligne = "<tr><td><input type='checkbox' name='select'></td><td>" + supplier + "</td><td>" + nbrMois + "</td><td><a href='#editsupplierModal' class='edit' data-id=tt data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a><a href='#deletesupplierModal' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a></td></tr>";
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
		$('#Editsupplier').on('click', function() {

			var supplier = $('#supplierEdit').val();
			var nbrMois    = $('#nbrMoisEdit').val();
		    var idEdit     = $('#id_Edit').val();
			$edit_comment  = $(this).parent();
			if(supplier!="" && nbrMois!=""){
				
				$.ajax({
					url: "supplier.php?action=edit_ok",
					type: "POST",
					data: {
						supplier: supplier,
						nbrMois   : nbrMois,
						id        : idEdit
					},
					cache: false,
					success: function(dataResult){
						console.log(dataResult);
						$('#EditsupplierForm').find('input:text').val('');
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
