<?php


  class DashboardModel{
    protected $db='';
    
    public function __construct()
    {
        $this->db=new Database();
        
    }

   public function getAllNotice(){
    $this->db->query('SELECT * FROM notices');
    return $this->db->resultSet();
  }
  public function getAllDistrictData(){
    $this->db->query('SELECT * FROM uDistrict');
    return $this->db->resultSet();
  }

  public function getDistrictData($district){
    
    $this->getUDistrict();
    $this->db->query('SELECT * FROM uDistrict where district=:dest ');
    $this->db->bindvalues(':dest',$district);
    return $this->db->single();

  }
  public function getUDistrict(){

    $datax = ["Dehradun"=>[0,0,0],"Nainital"=>[0,0,0],"Chamoli"=>[0,0,0],"Bageshwar"=>[0,0,0],"Pauri Garhwal"=>[0,0,0],"Tehri Garhwal"=>[0,0,0]
    ,"Haridwar"=>[0,0,0],"Champawat"=>[0,0,0],"Rudraprayag"=>[0,0,0],"Almora"=>[0,0,0],"Udham Singh Nagar"=>[0,0,0],"Uttarkashi"=>[0,0,0],"Pithoragarh"=>[0,0,0]
  ];


    $string = file_get_contents(APPROOT."/Jdata/raw_data.json");
    if ($string === false) {  
        echo "No file";
    }
    $json_a = json_decode($string, true);
    if ($json_a === null) {
        echo "error Parsing";
    }
    
    $active = 0;
    $recovered = 0;
    $deceased = 0;

    $uttarakhand = array();
    foreach ($json_a["raw_data"] as $data => $value) {
        if($value['detectedstate']=="Uttarakhand"){
        if($value['currentstatus']=="Hospitalized") {$active++;$datax[$value['detecteddistrict']][0]++;}
        else if( $value['currentstatus']=="Recovered") {$recovered++;$datax[$value['detecteddistrict']][1]++;}
        else {$deceased++;$datax[$value['detecteddistrict']][2]++;}  
      }  
    }
    $this->updateUDistrict($datax);
    $totalcases = $active + $recovered + $deceased;
    $data = ["total"=>$totalcases, "active"=>$active,"recovered"=>$recovered, "deceased"=>$deceased];
    return $data;
  }
  public function updateUDistrict($data){
    foreach($data as $district => $values){
      $this->db->query('UPDATE uDistrict SET confirmed=:confirmed, recovered=:recovered, deceased=:deceased Where district=:district');
      $this->db->bindvalues(':district',$district);
      $this->db->bindvalues(':confirmed',$values[0]);
      $this->db->bindvalues(':recovered',$values[1]);
      $this->db->bindvalues(':deceased',$values[2]);
      $this->db->execute();   
    }
   
  }

}

?>