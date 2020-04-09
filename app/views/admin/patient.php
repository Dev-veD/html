<?php require_once APPROOT.'/views/includes/headn.html';?>

<?php include 'headd.html';
$cnt=0;?>



<section class="au-breadcrumb m-t-0">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Patients Data</li>
                                </ul>
                            </div>
                            <a href = "<?php echo URLROOT; ?>Patient/updateData" class="au-btn au-btn-icon au-btn--green">
                                <i class="zmdi zmdi-plus"></i>Update Patients Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
    
    <div class="page-content--bgf7 ">
    

                                    <div class="card-body card-block">
                                        <form action="patient/loadSearch" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-search" type="submit"></i> Search
                                                            </button>
                                                        </div>
                                                        <input type="text" id="input1-group2" name="search" placeholder="Patient ID" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>

                             <div class="row">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-0">
                                            <table class="table table-top-campaign text-center">
                                                <thead>
                                                    <tr>
                                                    <th>SN.</th>
                                                        <th>PatientID</th>
                                                        <th>Status</th>
                                                        <th>District</th>
                                                        <th>Date Updated</th>

                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php foreach($data['Table'] as $entity){
                               echo ' 
                            <tr>
                                <td>'.++$cnt.'</td>
                                <td ><a id="'.$entity->patientnumber.'" class="clicker" data-toggle="modal" data-target="#largeModal">'.$entity->patientnumber.'</a></td>
                                <td ><a data-toggle="modal" data-target="#largeModal">'.$entity->currentstatus.'</a></td>
                                <td >'.$entity->district.'</td>
                                <td class="text-center">'.$entity->dateannounced.'</td>
                               
                            </tr>';
                        }?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>
                                </div>
</div>


<div class="modal fade" id="patientModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Patient Detail</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-left">
                            

         <h1 >Patient ID : <span id='PatientID'></span></h1>
         <hr>
         <div class="row">
             <div class="col col-md-4">
                 <img src="images/profile.svg" >
            </div>
            <div class="col col-md-8">
            <div class="table-responsive table--no-card m-b-10">
                                    <table class="table table-borderless table-data3">
                                        
                                        <tbody>
                                            <tr>
                                                <td><h4>Patient ID</h4></td>
                                                <td><span id="pid"></span></td>
                                        </tr>
                                        <tr>
                                                <td><h4>Gender</h4></td>
                                                <td><span id="gender"></span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>Nationality</h4></td>
                                                <td><span id="nation"></span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>Status</h4></td>
                                                <td><span id="status"></span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>Status Change Date</h4></td>
                                                <td><span id="scd"></span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>City</h4></td>
                                                <td><span id="city">txt</span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>District</h4></td>
                                                <td><span id="district"></span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>State</h4></td>
                                                <td><span id="state"></span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>Date Detected</h4></td>
                                                <td><span id="ddate"></span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>Notes</h4></td>
                                                <td><span id="notes"></span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>Backup Notes</h4></td>
                                                <td><span id="bnotes"></span></td>
                                                </tr>
                                        <tr>
                                                <td><h4>Transmission Type</h4></td>
                                                <td><span id="transmission"></span></td>     
                                            </tr>
                                            
                                        
                                        </tbody>
                                    </table>
                                </div> 
            </div>
            

         </div>    

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
						
						</div>
					</div>
				</div>
            </div>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
 

<script>
var deaths=0,active=0,recovered=0; 
$(document).ready(function(){

$('.clicker').click(function(){
  
  var userid = $(this).attr('id');
   
  // AJAX request
  $.ajax({
   url: 'CovidNearYou/loadPatientModal',
   type: 'post',
   data: {userid: userid},
   success: function(response){ 
     // Add response in Modal body
   
     var obj = JSON.parse(response);

     //$('#PatientID').html(response.patientnumber);
  
     console.log(obj.backnotes); 
     $('#bnotes').html(obj.backnotes);    
     $('#notes').html(obj.notes);  
     if (obj.gender == 'M')
     obj.gender ="Male";
     else
     obj.gender = "Female";
     $('#gender').html(obj.gender);  

     $('#pid').html(obj.patientnumber);  

     if(obj.nationality =="")
     obj.nationality = "Unknown";
    $('#nation').html(obj.nationality);  

    if(obj.currentstatus =="")
    obj.currentstatus = "Unknown";
    $('#status').html(obj.currentstatus); 
    
    if(obj.statuschangedate =="")
    obj.statuschangedate = "Unknown";
    $('#scd').html(obj.statuschangedate); 


    if(obj.city =="")
    obj.city = "Unknown";
    $('#city').html(obj.city); 
    
    
    if(obj.district =="")
    obj.district = "Unknown";
    $('#district').html(obj.district); 

    if(obj.state =="")
    obj.state = "Unknown";
    $('#state').html(obj.state); 

    
    if(obj.dateannounced =="")
    obj.dateannounced = "Unknown";
    $('#ddate').html(obj.dateannounced); 

    if(obj.dateannounced =="")
    obj.dateannounced = "Unknown";
    $('#ddate').html(obj.dateannounced); 

    if(obj.transmissiontype =="")
    obj.transmissiontype = "Unknown";
    $('#transmission').html(obj.transmissiontype); 

    

     // Display Modal
     $('#patientModal').modal('show'); 

 


   }
 });
});
});



  

    </script>







<script
			  src="http://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>


<script type="text/javascript" src="<?php echo URLROOT;?>vendor/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendor/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.table').DataTable({
     'paging':true,
     "iDisplayLength": 25,
     'responsive':true,
     'language':{
           search:"_INPUT_",
           searchPlaceholder:"Search Records"
     },
     'columnDefs':[
       {
         "targets":[0,4,5],
         "searchable":false
       }
     ]  
    });
} );
</script>
    
<?php require_once APPROOT.'/views/includes/footer.php';?>