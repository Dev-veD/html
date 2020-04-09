<?php


  class Admin{
    protected $db='';
    public function __construct()
    {
        $this->db=new Database();
    }

   public function getdata()
   {

   }
   public function updatePatientData(){

    echo "Running Truncate";
    $qry = 'TRUNCATE TABLE patient';
    $this->db->query($qry);
    if ($this->db->execute()){
      echo "Truncated patient <br>";
    }else 
    echo "Error On Truncate patient<br>";

    $qry = 'TRUNCATE TABLE uDistrict';
    $this->db->query("TRUNCATE TABLE uDistrict");
    if ($this->db->execute()){
      echo "Truncated uDistrict<br>";
    }else 
    echo "Error On Truncate uDistrict<br>";



    
     $url ="https://api.covid19india.org/raw_data.json";
     $local = APPROOT."/Jdata/raw_data.json";
    $stri = file_get_contents($url);
  
    if ($stri === false) {
        echo "No file";
    }
    $json_a = json_decode($stri, true);
    if ($json_a === null) {
        echo "error Parsing";
    }


    $qur = 'Insert into patient ("", :bnotes, :susContra , :status, :dateannounced,
        :city, :dist, :state, :gender, :nationality, :notes, :pno, :src, :statuschange,
        :transmission
         )';

     $cnt = 0;

//FOR UDISTRICT TABLE AND PATIENT TABLE
  $query = "INSERT INTO uDistrict (district, confirmed , recovered, deceased) VALUES (:district,:confirmed,:recovered,:deceased )";
  
  $datax = ["Dehradun"=>[0,0,0],"Nainital"=>[0,0,0],"Chamoli"=>[0,0,0],"Bageshwar"=>[0,0,0],"Pauri Garhwal"=>[0,0,0],"Tehri Garhwal"=>[0,0,0]
         ,"Haridwar"=>[0,0,0],"Champawat"=>[0,0,0],"Rudraprayag"=>[0,0,0],"Almora"=>[0,0,0],"Udham Singh Nagar"=>[0,0,0],"Uttarkashi"=>[0,0,0],"Pithoragarh"=>[0,0,0],
         "Total"=>[0,0,0],"Unknown"=>[0,0,0]
       ];
 
    foreach ($json_a["raw_data"] as $data => $value) {
      if($value['detectedstate']=="Uttarakhand"){

          if($value['detecteddistrict']==""){
            $value['detecteddistrict']=="Unknown";
          }
          if($value['currentstatus']=="Hospitalized") {$datax["Total"][0]++;$datax[$value['detecteddistrict']][0]++;}
          else if( $value['currentstatus']=="Recovered") {$datax["Total"][1]++;$datax[$value['detecteddistrict']][1]++;}
          else {$datax['Total'][2]++;$datax[$value['detecteddistrict']][2]++;} 
        
          

        $qry = 'Insert into patient values (:age, :bnotes, :susContra , :status, :dateannounced,
        :city, :dist, :state, :gender, :nationality, :notes, :pno, :src, :statuschange, :transmission)';
       

        $this->db->query($qry);
        $this->db->bindvalues(':age',$value['agebracket']);
        $this->db->bindvalues(':bnotes',$value['backupnotes']);
        $this->db->bindvalues(':susContra',$value['contractedfromwhichpatientsuspected']);
        $this->db->bindvalues(':status',$value['currentstatus']);
        $this->db->bindvalues(':dateannounced',$value['dateannounced']);
        $this->db->bindvalues(':city',$value['detectedcity']);
        $this->db->bindvalues(':dist',$value['detecteddistrict']);
        $this->db->bindvalues(':state',$value['detectedstate']);
        $this->db->bindvalues(':gender',$value['gender']);
        $this->db->bindvalues(':nationality',$value['nationality']);
        $this->db->bindvalues(':notes',$value['notes']);
        $this->db->bindvalues(':pno',$value['patientnumber']);
        $this->db->bindvalues(':src',$value['source1']);
        $this->db->bindvalues(':statuschange',$value['statuschangedate']);
        $this->db->bindvalues(':transmission',$value['typeoftransmission']);
        
      // echo "<br>Query : ".$qry."<hr>";
        $this->db->execute(); 
    }  
    
   }
  
   foreach($datax as $district => $values){
     
    $this->db->query($query);
    echo "<br>District : $district Confirmed : $values[0] Recovered : $values[1] Deceased : $values[2]<br>";
    $this->db->bindvalues(':district',$district);
    $this->db->bindvalues(':confirmed',$values[0]);
    $this->db->bindvalues(':recovered',$values[1]);
    $this->db->bindvalues(':deceased',$values[2]);
    $this->db->execute();   
  }
  
  }

  public function getPatientData(){
    $this->db->query('SELECT * FROM patient');
    return $this->db->resultSet();
  }
  public function getNoticesData(){
    $this->db->query('SELECT * FROM notices');
    return $this->db->resultSet();
  }
  public function removeNoticeData($id){
    $this->db->query("DELETE FROM notices WHERE id =:id");
    $this->db->bindvalues(':id',$id);
    $this->db->execute(); 
  }
  public function getGatheringData(){
    $this->db->query('SELECT * FROM mass_gatherings');
    return $this->db->resultSet();
  }
  

}

?>