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
                                    <li class="list-inline-item">Gatherings</li>
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
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-search"></i> Search
                                                            </button>
                                                        </div>
                                                        <input type="text" id="input1-group2" name="input1-group2" placeholder="Search for gatherings" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    

                             <div class="row">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-0">
                                         <!-- gathering -->
                                            
                                            
                                         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Latest gatherings</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">All gatherings</a>
                                            </li>
                                           
                                          </ul>
                                          <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="gatherdata">
                                                    <table class="table table-top-campaign text-center">
                                                        <thead>
                                                            <tr>
                                                              
                                                                <th>User Reported </th>
                                                                
                                                                <th>
                                                                   At Address</th>

                                                                   <th>On Date </th>
                                                                <th>Action</th>
                                                                
                                                              </tr>
                                                            </thead>
        
                                                            <tbody >
                                                              
                                                            <?php
                                                    
                                                    foreach($data['table'] as $entity){
                                                        if($entity->date <date()){}
                                                        else{
                               echo ' 
                            <tr>
                                <td>'.++$cnt.'</td>
                                <td ><a id="'.$entity->id.'" class="clicker" data-toggle="modal" data-target="#largeModal">'.$entity->users_id.'</a></td>
                                <td ><a data-toggle="modal" data-target="#largeModal">'.$entity->address.'</a></td>
                                <td >'.$entity->photographs.'</td>
                              
                                <td id="'.$entity->id.'"class="show text-center"><a href="#">Show Details</a></td>
                               
                            </tr>';}

                        }?>
                                
                                                                
                                                                 
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>






                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <table class="table table-borderless table-data3 ">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 20%;">Date </th>
                                                            <th style="width: 20%; text-align:left;">Name </th>
                                                            
                                                            <th style="width: 50%; text-align:left;">
                                                                Location</th>
                                                            <th  style="width: 10%;">&nbsp;</th>
                                                            
                                                          </tr>
                                                        </thead>
    
                                                        <tbody>
                                                        <?php
                                                    
                                                    foreach($data['table'] as $entity){
                               echo ' 
                            <tr>
                                <td>'.++$cnt.'</td>
                                <td ><a id="'.$entity->id.'" class="clicker" data-toggle="modal" data-target="#largeModal">'.$entity->users_id.'</a></td>
                                <td ><a data-toggle="modal" data-target="#largeModal">'.$entity->address.'</a></td>
                                <td >'.$entity->photographs.'</td>
                              
                                <td id="'.$entity->id.'"class="show text-center"><a href="#">Show Details</a></td>
                               
                            </tr>';
                        }?>
                                                            
                                                             
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                            
                                          </div>
                                            
                                        <!-- END DATA TABLE   -->              
                                    </div>
                                </div>
</div>




<?php require_once APPROOT.'/views/includes/footer.php';?>