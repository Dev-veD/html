<?php require_once APPROOT.'/views/includes/header.php';
$cnt=0;?>

<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>Data Set Of Patients and Foreigners</h4>
									</div>
									<div class="card-body">
										<ul class="nav nav-tabs" id="myTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patients</a>
											</li>
										
											<li class="nav-item">
												<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Location</a>
											</li>
										</ul>
										<div class="tab-content pl-3 p-1" id="myTabContent">
											<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <hr>
                                                <h3>Patients</h3>
                                                <hr>
                                                 <!-- DATA TABLE-->

                                                 <div class="row">
                                                    <div class="col-lg-12">

                                                    <!--Here Comes The Map-->

                                            


                                                        </div>
                                                        </div>              
                                                 <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-search"></i> Search
                                                            </button>
                                                        </div>
                                                        <input type="text" id="input1-group2" name="input1-group2" placeholder="Patient ID" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>





 <section class="p-t-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive table--no-card m-b-10">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <a href="#" data-toggle="modal" data-target="#largeModal">
                                <th class="text-center">Sno.</th></a>
								<th class="text-center">Patient_ID</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">District Found</th>
                                <th class="text-center">Date Detected</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach($data as $entity){$cnt++;
                               echo ' 
                            <tr>
                            <td class="text-center">'.$cnt.'</td>
                                <td class="text-center"><a id='.$entity->patientnumber.' class="clicker" data-toggle="modal" data-target="#patientModal">'."P-".$entity->patientnumber.'</a></td>
                                <td class="text-center"><a data-toggle="modal" data-target="#largeModal">'.$entity->currentstatus.'</a></td>
                                <td class="text-center">'.$entity->district.'</td>
                                <td class="text-center">'.$entity->dateannounced.'</a></td>
                            </tr>';
                        }?>

                        </tbody>
                    </table>
                   
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- END DATA TABLE-->


											</div>
											
											<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
												<h3>Location</h3>
											</div>
<div id="map" class="mt-0"  style=" width:100%; height:550px; ">
                                </div>
										</div>


									</div>
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







<script src="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.css" rel="stylesheet" />



    <script src="https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js"></script>
<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>

<script>


         mapboxgl.accessToken = 'pk.eyJ1IjoibmlraGlsYmhhdHQiLCJhIjoiY2s4bDllM2ZxMDFoNjNmcW8xaTc2aDlkYyJ9.tXFt2KSNEvK38YNSfZ92MQ';
        var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
      
        var map = new mapboxgl.Map({
                            container: 'map',
                            style: 'mapbox://styles/mapbox/dark-v10',
                            center: [79.0193,30.0668],
                            zoom: 8
                            });
        // map.scrollZoom.disable();

map.on('load', function () {
    map.resize();
});
        map.addControl(
        new mapboxgl.GeolocateControl({
        positionOptions: {
        enableHighAccuracy: true
        },
        trackUserLocation: true
        })
        );
                        
        var noofhospitalized=0,noofrecovered=0,noofdeceased=0;
        // console.log(noofhospitalized);
        var list=[];
        fetch("<?php URLROOT?>public/uttarakhanddata.json")
         .then(response=>response.json())
      .then(rsp=>{
          console.log(rsp)
          
          rsp.forEach(element=>{
                        var state=element.state;
                        if(state=="Uttarakhand")
                        {
                            var district=element.district;
                            var city=element.city;
                            var status=element.currentstatus;
                            var date=element.dateannounced;
                            var typeoftransmission=element.transmissiontype;
                            var patientnumber=element.patientnumber;
                            if(status=='Hospitalized')
                            {
                                noofhospitalized++;
                            }
                            else
                            if(status=='Recovered')
                            {
                                noofrecovered++;
                            }
                            else
                            if(status=='Deceased'){
                                 noofdeceased++;
                            }
                            mapboxClient.geocoding
                                .forwardGeocode({
                                query:city.concat(',',district,',uttarakhand'),
                                autocomplete: true,
                                limit: 1
                                })
                                .send()
                                .then(function(response) {
                                if (
                                response &&
                                response.body &&
                                response.body.features &&
                                response.body.features.length
                                ) {
                                var feature = response.body.features[0];
                                
                                
                                long=feature.center[0];
                                lat=feature.center[1];
                                list.push([long,lat,district,status,date,typeoftransmission,city,patientnumber]);
                                
                                new mapboxgl.Popup({closeOnClick: true})
                                .setLngLat([80.3240,30.4024])
                                .setHTML('<h3 style="color:blue;">Uttarakhnad Overall Status</h3><h5 style="color:red;">Active case='+noofhospitalized+'</h5><br><h5 style="color:green;">Recovered='+noofrecovered+'</h5><br><h5 style="color:black;"> Deceased='+noofdeceased+'</h5>')
                                .addTo(map);
                                    
                            }
                                });
                               
     
                        }
                        
                         
          });
          

      });  
          function loadMarker()
            {
                var y,longi,lati,add=0.00,color;
                
                for (y=0;y<list.length;y++)
                {
                    if(list[y][3]=='Hospitalized')
                    {
                        color='red';
                    }
                    else
                    if(list[y][3]=='Recovered')
                    {
                        color='green';
                    }
                    else
                    if(list[y][3]=='Deceased'){
                            color='black';
                    }
                    longi=list[y][0]+Math.random()*(0.09-0.0001)+0.0001;
                    lati=list[y][1]+add;
                    
                    if(list[y][6]=='')
                    {
                        list[y][6]='Unknown';
                    }
                    if(list[y][5]=='')
                    {
                        list[y][5]='Not known';
                    }
                    new mapboxgl.Marker({
                                      draggable:false,
                                      color:color
                                  }).setLngLat([longi,lati])
                                  .setPopup(new mapboxgl.Popup({})
                                  .setHTML('<h5 style="color:blue;">' + list[y][2] + '</h5><br><p style="color:black;">Patient no='+list[y][7]+'</p><br><p style="color:black;">current status=' + list[y][3] + '</p><br><p style="color:black;">detected city='+list[y][6]+'</p><br><p style="color:black;"> date anounced= '+list[y][4]+ '</p><br><p style="color:black;">Transmission Type='+list[y][5]+'</p>'))
                                  .addTo(map);
                                  add+=0.001; 
                  }
                }

            setTimeout(loadMarker, 2000);
</script>

<?php require_once APPROOT.'/views/includes/footer.php';?>
