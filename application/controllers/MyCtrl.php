<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyCtrl extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('MyModel','m');
    }

	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function loginview()
	{
		$this->load->view('login');
	}
    
    public function loginvalue()
    {
        $loginstatus = $this->m->checklogin();
        if ($loginstatus) {
            $this->showjobs();
          //  $logindata = $this->session->all_userdata();
            //$id = $this->session->userdata('userid');
            //print_r($logindata);
            //print_r($id);
            //exit();
        }
        else
        {
            $this->showjobs();
        }
    }
  

    public function showjobs()
    {
        $data['name'] = 'Search For Jobs';
        $data['subname'] = 'Sacredbits Job Portal';
        $data['jobs'] = $this->m->showjobs();
        if($this->session->userdata('userid')){
            $data['name'] = $this->session->userdata('fname');
            $data['subname'] = 'Admin';
        }
        $this->load->view('header');
		$this->load->view('sidebar',$data);
		$this->load->view('dashboard', $data);
		$this->load->view('footer');
    }

    public function showwalkins()
    {
        $data['walkins'] = $this->m->walkinjobs();
        $data['name'] = 'Search For Jobs';
        $data['subname'] = 'SacredBits Job Portal';
        if($this->session->userdata('userid')){
            $data['name'] = $this->session->userdata('fname');
            $data['subname'] = 'Admin';
        }
       // print_r($jobs);
        $this->load->view('header');
		$this->load->view('sidebar',$data);
		$this->load->view('walkins',$data);
		$this->load->view('footer');
    }
    
    public function descjob()
    {
        $data['jobdetails'] = $this->m->descjob();
        $data['name'] = 'Search For Jobs';
        $data['subname'] = 'SacredBits Job Portal';
        if($this->session->userdata('userid')){
            $data['name'] = $this->session->userdata('fname');
            $data['subname'] = 'Admin';
        }
       // print_r($jobs);
        $this->load->view('header');
		$this->load->view('sidebar',$data);
		$this->load->view('readmore',$data);
		$this->load->view('footer');
    }

    public function adduser()
    {
        $adduser = $this->m->adduser();
        if ($adduser) {
            // $logindata = $this->session->all_userdata();
            // print_r($logindata);
            print('user added');
        }
    }
    
    public function addjob()
    {
        // $data['walkins'] = $this->m->walkinjobs();
        $data['name'] = 'Search For Jobs';
        $data['subname'] = 'SacredBits Job Portal';
        if($this->session->userdata('userid')){
            $data['name'] = $this->session->userdata('fname');
            $data['subname'] = 'Admin';
        }
       // print_r($jobs);
        $this->load->view('header');
		$this->load->view('sidebar',$data);
		$this->load->view('addjob');
		$this->load->view('footer');
    }
    
    public function insertjob()
    {
        $result =  $this->m->insertjob();
        $data['name'] = 'Search For Jobs';
        $data['subname'] = 'SacredBits Job Portal';
        if($this->session->userdata('userid')){
            $data['name'] = $this->session->userdata('fname');
            $data['subname'] = 'Admin';
         }
         if($result){
            echo "alert('Job Added SuccessFully')";
        }
        else
        {
            echo "alert('Job not added')";
        }
      // print_r($jobs);
        $this->load->view('header');
		$this->load->view('sidebar',$data);
		$this->load->view('addjob');
		$this->load->view('footer');
    }
    
     public function deljob()
    {
       $result = $this->m->deljob();
        if($result){
            echo "alert('Job Deleted SuccessFully')";
        }
        else
        {
            echo "alert('Job not Deleted')";
        } 
        $this->showjobs();
    }
    
    public function test()
    {
        // $data['walkins'] = $this->m->walkinjobs();
        $data['name'] = 'Search For Jobs';
        $data['subname'] = 'SacredBits Job Portal';
        if($this->session->userdata('userid')){
            $data['name'] = $this->session->userdata('fname');
            $data['subname'] = 'Admin';
        }
       // print_r($jobs);
        $this->load->view('header');
		$this->load->view('sidebar',$data);
		$this->load->view('addjob');
		$this->load->view('footer');
    }
    
}
