<?php 

 class Gatherings extends Controller{

    protected $viewData=["table"=>""];
    public function __construct()
    {
        $this->Admin=$this->model('Admin'); 
    }
    public function index()
    {
            $this->loadtable();
           $this->views('admin/gatherings',$this->viewData);
    }
    public function loadtable(){
        $this->viewData["table"]=$this->Admin-> getGatheringData();
    }
 }