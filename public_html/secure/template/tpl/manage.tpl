

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
</head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   {if $message=='add_OK'}
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong> Do you want to add services to this offer :   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> {$id} </button>
  </strong>
		  </div>
		{/if}

    {if $message==addOffreOK}
       <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong> 
       Offre Ajouté avec succès
  </strong>
		  </div>
    {/if}
    

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="color:#FFFF;background-color:#1E90FF;">
         <h4 class="modal-title" >Ajouter Services à un offre</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <form action="#" method="post">
        <div class="modal-body">
          <table class="table table-condensed" id="myTable">
            <thead>
              <tr>
                <th>Type Service</th>
                <th>Service</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 
                  <div class="form-group">
                    <select name="Service_Type[]" class="form-control servicec"  onchange="getService(this)" id="service_type1">
                        <option>Choisir</option>
                        {foreach from=$Service_Type item=value}
                            <option value="{$value.idservice_type}">{$value.service_type}</option>
                        {/foreach}
                    </select>
                  </div>
                </td>
        
                <td>
                  <div class="form-group">
                    <select name="service[]" class="form-control cservcie" id="service1">
                    </select>
                  </div>
                  <input type="hidden" value="{$id}" name="idoffer"/>
                  <input type="hidden" value="addServiceOffer" name="action"/>

                </td>
                <td><button type="button" class="btn btn-info" onclick="addRow()" >ADD Row</button></td>
              </tr>
            </tbody>
           </table>
        </div>

        <div class="modal-footer">
          <input type="submit" class="btn btn-info"  value="Enregistrer"/>
        </div>
    </div>
  </form>
    </div>
  </div>

<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="../chart.php"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Statistique</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="../comparateur.php"><i class="fa fa-fw fa-th mr-1"></i><span>comparateur</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="../index.php"><i class="fa fa-fw fa-cog mr-1"></i><span>Déconnecter</span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="e-tabs mb-3 px-3">
      <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#">Offre</a></li>
      </ul>
    </div>

    <div class="row flex-lg-nowrap">
      <div class="col mb-3">
        <div class="e-panel card">
          <div class="card-body">
            <div class="card-title">
              <h6 class="mr-2"><span>Liste</span><small class="px-1">Offre</small></h6>
            </div>
            <div class="e-table">
              <div class="table-responsive table-lg mt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th >
                        Dètails 
                      </th>
                      <th>Operateur</th>
                      <th class="max-width">Offre</th>
                      <th class="sortable">Prix</th>
                      <th>Engagement</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  {foreach from=$list_offer item=value}
                    <tr>
                      <td class="align-middle">
                        <div class="custom-control custom-control-inline custom-radio custom-control-nameless m-0 align-top">
                       
                          <input type="radio"  name="det" value="{$value.idoffer}" />
                        </div>
                      </td>
                      <td>
                        <img src="{$value.logo}" title="" alt="" style="width: 45px; height: 35px;"/>
                      </td>
                      <td class="text-nowrap align-middle">{$value.supplier} {$value.technologie}</td>
                      <td class="text-nowrap align-middle"><span>{$value.price}</span></td>
                      <td class="text-center align-middle">{$value.engagement}</td>
                      <td class="text-center align-middle">
                        <div class="btn-group align-top">
                            <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#Offre-form-modal">Edit</button>
                            <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                  {/foreach}  
                    
                  </tbody>
                </table>
              </div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="text-center px-xl-3">
              <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#Offre-form-modal">Ajouter Offre</button>
            </div>
            <hr class="my-3">
           
            <hr class="my-3">
            <div>
              <div class="form-group">
                <div>
                  <input id="dates-range" class="form-control flatpickr-input" placeholder="Services" type="text" readonly="readonly">
                </div>
              </div>
              
            </div>
            <hr class="my-3">
            <div class="" id="dataService" >

              
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Offre Form Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="Offre-form-modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#6495ed;color:#FFFF;">
            <h5 class="modal-title">Ajouter Offre</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-1">
              <form class="form"  action="" method="post">
                <div class="row">
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Operateur</label>
                          <select name="supplier" class="form-control">
                              <option>Choisir un Operateur</option>
                              {foreach from=$list_supplier item=value}
                                  <option value="{$value.id}">{$value.supplier}</option>
                              {/foreach}
                          </select>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Engagement</label>
                            <select name="engagement" class="form-control">
                              <option>Choisir un engagement</option>
                              {foreach from=$list_engagement item=value}
                                <option value="{$value.id}">{$value.engagement}</option>
                              {/foreach}  
                            </select>                        
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Type</label>
                            <select name="family" class="form-control">
                                <option value="1">Internet</option>
                                <option value="2">Mobil</option>    
                            </select>                        
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Famille</label>
                            <select name="forfait_family" class="form-control">
                            <option>Choisir une famille</option>
                              {foreach from=$list_Forfait_family item=value}
                                <option value="{$value.idforfait_family}">{$value.forfait}</option>
                              {/foreach}
                            </select>                        
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col mb-3">
                        <div class="form-group">
                          <label>Description</label>
                          <textarea class="form-control" name="description" rows="5" placeholder=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             
          
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>prix</label>
                          <input class="form-control" type="prix" name="prix">
                        </div>
                      </div>
                      <div class="col">
                          <div class="form-group">
                            <label>link</label>
                            <input type="text" name="link" class="form-control">
                          </div> 
                      </div
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Date Begin</label>
                          <input class="form-control" type="date" name="date_begin" placeholder="dd/mm/aaaa">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Date <span class="d-none d-xl-inline"> End</span></label>
                          <input class="form-control" type="date" name="date_end" placeholder="dd/mm/aaaa"></div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col d-flex justify-content-end">
                    <input type="hidden" name="action" value='add' />
                    <button class="btn btn-primary" type="submit">Ajouter</button>
                  </div>
                </div>
               
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<style>
  body{
    margin-top:20px;
    background:#f8f8f8
}
</style>

<!--Get Details offre-->
{literal}
 <script>

  $(document).ready(function(){
      $("input[name='det']").click(function(){
        $('tr').css({"color": "", "border": ""});

        var id = $(this).val();
        if ($(this).is(':checked')) {
          $(this).parent().parent().parent().css({"color": "red", "border": "2px solid red"});
        }
     
        var dataService='';
         $.ajax({
          url     :'../../ajax/manage/offer.php',
          method  : "GET",
          data    : {idoffer:id , action:'getServicesOffre'},
          success : function(result){ 

               var data=JSON.parse(result);
               var count =data.length;
              for(var i=0;i<count;i++){
                  dataService+=`<p><i class="`+data[i].icon+`"></i>`  +data[i].type+` : `+data[i].service+`</p>` ;
              }
              $("#dataService").css({"border": "2px solid red"});
              $("#dataService").html(dataService);
          }
      });
      });
  });
 </script>
 {/literal}

  <!--Function  ADD Rows !-->
    <script>
      function addRow(){
        var table = document.getElementById("myTable");
        var row   = table.insertRow(table.rows.length);
   
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        cell0.innerHTML =
                       ` <div class="form-group">
                          <select name="Service_Type[]" class="form-control servicec" onchange="getService(this)" id="service_type`+(table.rows.length-1)+`" required>
                              <option>Choisir</option>
                              {foreach from=$Service_Type item=value}
                                  <option value="{$value.idservice_type}">{{$value.service_type}}</option>
                              {/foreach}
                          </select>
                        </div>`;

        cell1.innerHTML =
                    `<div class="form-group">
                    <select name="service[]" class="form-control cservcie" id="service`+(table.rows.length-1)+`" required>
                    </select>
                  </div>`;
        cell2.innerHTML =`
                    <p id="del0" class='btn btn-danger ' onclick="removeRow(this)"><span aria-hidden="true">Delete Row</span></p>`;           
      }
    </script>    


{literal}
    <script>
        function removeRow(r){
          var i = r.parentNode.parentNode.rowIndex;
           document.getElementById("myTable").deleteRow(i);
        }
    </script>
{/literal}   


{literal}
<script>
 function getService(r){
     var services='';
      var serviceType       = "service_type"+(r.parentNode.parentNode.parentNode.rowIndex);
      var service           = "service"+(r.parentNode.parentNode.parentNode.rowIndex);
      var id                = document.getElementById(serviceType).value;

        services='';
      $.ajax({
          url     :'../../ajax/manage/offer.php',
          method  : "GET",
          data     : {idServicetype:id , action:'getTypeService'},
          success : function(result){
            var datas=JSON.parse(result);
            var c=datas.length;
              console.log(datas);
              for(var i=0;i<c;i++){
                services+=`<option value="`+datas[i].idservice+`">`+datas[i].service+`</option>`;
              } 
              document.getElementById(service).innerHTML=services;
          }
      });
 }
</script>
{/literal}