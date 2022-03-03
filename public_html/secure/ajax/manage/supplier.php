<?php
  
 /**
 * @package MonPetitForfait
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 */
/*$path_template = $_SERVER['DOCUMENT_ROOT'].'/MVC/secure/template/tpl/Supplier.tpl';*/

require '../../class/common/load.php';

     $liste_supplier = Supplier::get(null);
     $output = '
     <table class="table table-striped table-hover test">
     <thead>
         <tr>
             <th>
                 <span class="custom-checkbox">
                     <input type="checkbox" id="selectAll">
                     <label for="selectAll"></label>
                 </span>
             </th>
             <th>supplier</th>
             <th>logo</th>
             <th>Actions</th>
         </tr>
     </thead>';

if(count($liste_supplier) > 0)
{
   
	foreach($liste_supplier as $row)
	{
		$output .= '
            <tr>
                <td>	
                    <input type="checkbox" >	
                </td>
                <td class="supplier">'.$row["supplier"].'</td>
                <td class="logo">'.$row["logo"].'</td>
                <td>
                    <a href="#editsupplierModal" class="edit"  data-id='.$row["id"].' data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deletesupplierModal" class="delete" data-id='.$row["id"].' data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';

echo $output;
    
?> 