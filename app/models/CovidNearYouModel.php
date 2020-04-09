<?php


  class CovidNearYouModel{
    protected $db='';
    public function __construct()
    {
        $this->db=new Database();
    }

   public function getTableData()
   {
    $qry = 'SELECT * FROM patient ';
    $this -> db->query($qry);
   return $this -> db->resultset();
    
   }

   public function getPatient($user){
    $this->db->query('SELECT * FROM patient where patientnumber=:usr ');
    $this->db->bindvalues(':usr',$user);
    return $this->db->single();
   }

  public function saveJson()
  {
    $this->db->query('SELECT currentstatus,dateannounced, city, district,state, patientnumber,transmissiontype FROM patient 
            ');

    $file_name=dirname(dirname(dirname(__FILE__))).'/public/uttarakhanddata.json';
    $res=json_encode($this->db->resultSet());
    file_put_contents($file_name,$res);
  } 

  }

?>
