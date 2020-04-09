<?php 

 class Patient extends Controller{

    protected $patientDetails=["Table"=>""];

    public function __construct()
    {
        $this->Admin=$this->model('Admin'); 
    }
    public function index()
    {
            $this-> loadTable();

           $this->views('admin/patient',$this->patientDetails);
    }

    public function updateData(){
        $this -> Admin -> updatePatientData();
        header ("location:patient");
    }

    public function loadTable(){
        $this->patientDetails["Table"] =  $x =$this->Admin->getPatientData();
      
    }
    public function loadSearch(){
        
        $this->patientDetails["Table"] =  $x =$this->Admin->getSearchData();
    }

 }