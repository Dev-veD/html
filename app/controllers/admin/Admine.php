<?php 

 class Admine extends Controller{

    protected $adminDetails=["Table"=>""];

    public function __construct()
    {
        $this->Admin=$this->model('Admin'); 
    }
    public function index()
    {

           $this->views('admin/admine');
    }

  
    
 }