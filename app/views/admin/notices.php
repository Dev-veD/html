<?php require_once APPROOT.'/views/includes/headn.html';?>

<?php include 'headd.html';?>




  

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
                                    <li class="list-inline-item">Notices </li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
    
    <div class="page-content--bgf7 ">
    

                                    <div class="card-body card-block">
                                        
                                    

                             <div class="row">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-0">
                                            <!-- ADD NOTICE -->
                                             <div class="addNotice">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">
											Add a new notice
										</button>
			</div>
                                            
                                             <!-- NOTICE BLOCK -->
                                             <div class="noticebox">

                                              <table class="table table-top-campaign text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Sno.</th>
                                                        <th >User </th>
                                                        <th >Notice</th>
                                                        <th>Path</th>
                                                        <th>Action</th>
                                                      </tr>
                                                    </thead>

                                                    <tbody>
                                                       
                                                    <?php
                                                    
                                                    foreach($data['table'] as $entity){
                               echo ' 
                            <tr>
                                <td>'.++$cnt.'</td>
                                <td ><a id="'.$entity->id.'" class="clicker" data-toggle="modal" data-target="#largeModal">'.$entity->users_id.'</a></td>
                                <td ><a data-toggle="modal" data-target="#largeModal">'.$entity->name.'</a></td>
                                <td >'.$entity->document_path.'</td>
                              
                                <td id="'.$entity->id.'"class="remove text-center"><a href="#">Remove</a></td>
                               
                            </tr>';
                        }?>
                                                        
                                                         
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE     -->
                                    </div>
                                </div>
</div>



<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Notice Details</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                        <div class="card">
                                    <div class="card-header">Upload</div>
                                    <div class="card-body card-block">
                                        <form action="notices/upload" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="Notice" name="noticename" placeholder="Enter notice name" class="form-control">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <div class="input-group">
                                                Select associated document to upload : 
                                                <input type="file" name="file" id="fileToUpload"><br><br>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

						</div>

						</d     iv>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
            </div>
            


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
 

            <script>

$(document).ready(function(){

$('.remove').click(function(){
  
  var userid = $(this).attr('id');
  $.ajax({
   url: 'Notices/remove',
   type: 'post',
   data: {userid: userid},
   success: function(response){ 
     console.log(response);
    window.location = "notices";
   }
 });
});
});



  

    </script>


<?php require_once APPROOT.'/views/includes/footer.php';?>