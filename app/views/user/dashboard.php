<?php require_once APPROOT . '/views/includes/header.php'; ?>
<div class="page-wrapper">
   
        
    
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7 text-center">

    <?php include 'map.php';
    $statsData = $data["StatsTable"];
    ?>
    <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                          
                                <h2 class="number"><?=$statsData["recovered"]?></h2>
                                <span class="desc">Recovered</span>
                                <div class="icon">
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           
                                <h2 class="number"><?=$statsData["total"]?></h2>
                                <span class="desc">Total Cases</span>
                                <div class="icon">
                                 
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            
                                <h2 class="number"><?=$statsData["active"]?></h2>
                                <span class="desc">Active</span>
                                <div class="icon">
                                    
                               
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           
                                <h2 class="number"><?=$statsData["deceased"]?></h2>
                                <span class="desc">Deceased</span>
                                <div class="icon">
                                   
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>

  

               <?php include "tableM.html"; ?>



               <p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>

        <?php require_once APPROOT . '/views/includes/footer.php'; ?>