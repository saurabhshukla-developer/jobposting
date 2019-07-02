<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->load->database();
    }

    public function checklogin()
    {
        $username = $this->input->post('uname');
        $password = $this->input->post('psswd');
        // $username = 'saurabh';
        // $password = 'saurabh';
        $arr = array
        (
            'username' => $username,
            'password' => $password
        );
        $this->db->where($arr);
        $query = $this->db->get('users');
        if($query->num_rows() == 1)
        {
            $row = $query->row();
            $data = array(
                    'userid' => $row->id,
                    'fname' => $row->fname,
                    'lname' => $row->lname,
                    'username' => $row->username,
                    'email' => $row->email,
                    'contact' => $row->contactno
                    );
            $this->session->set_userdata($data);
            return true;
        }
        else
        {
            return false;
        }
    }

    public function insertjob()
    {
            $cname = $this->input->post('company');
            $ctc = $this->input->post('ctc');
            $idate = $this->input->post('idate');
            $itime = $this->input->post('itime');
            $skills = $this->input->post('skills');
            $spcl = $this->input->post('specialization');
            $rtype = $this->input->post('recruittype');
            $exneeded = $this->input->post('exp');
            $qulification = $this->input->post('qual');
            $passyr = $this->input->post('passyear');
            $cutoff = $this->input->post('cutoff');
            $position = $this->input->post('position');
            $jdesc = $this->input->post('jobdesc');
            $jtype = $this->input->post('jobtype');
            $jshift = $this->input->post('jobshifts');
            $jlink = $this->input->post('joblink');
            $jlocation = $this->input->post('joblocation');
            $ivenue = $this->input->post('ivenue');
            $cpname = $this->input->post('contactperson');
            $cppos = $this->input->post('contactpersonpost');
            $cpmn = $this->input->post('contactno');
            $cpei = $this->input->post('email');
            $lastdate = $this->input->post('lastdate');
            $oreq = $this->input->post('other');
            $rounds = $this->input->post('irounds');  
            $posted_by = $this->session->userdata('userid');
            $aboutcompany = $this->input->post('aboutcompany');
            $vacancy = $this->input->post('vacancy');
            $arr = array(
            'company_name' => $cname,
            'ctc' => $ctc,
            'interview_date' => $idate,
            'interview_time' => $itime,
            'skills' => $skills,
            'recruitment_type' => $rtype,
            'experiance_needed' => $exneeded,
            'qualification' => $qulification,
            'cut_off' => $cutoff,
            'position' => $position,
            'description' => $jdesc,
            'job_type' => $jtype,
            'job_shift' => $jshift,
            'job_link' => $jlink,
            'job_locaion' => $jlocation,
            'interview_venue' => $ivenue,
            'contact_person_name' => $cpname,
            'contact_person_position' => $cppos,
            'contact_person_mobile_no' => $cpmn,
            'contact_person_email_id' => $cpei,
            'last_date' => $lastdate,
            'other_requirment' => $oreq,
            'rounds' => $rounds,
            'posted_by' => $posted_by,
            'about_company' => $aboutcompany,
            'vacancy' => $vacancy,
            'passing_year' => $passyr,
            'specialization' => $spcl
        );
        $this->db->insert('jobs', $arr);
        if ($this->db->affected_rows() == 1) {
            return true;
        }
        else {
            return false;
        }
    }

    public function showjobs()
    {
        // $arr = array(
        //     'company_name' => 'coaching',
        //     'skills' => 'php, mysql, js',
        //     'interview_date' => '2019-07-01 00:00:00',
        //     'recruitment_type' => 'Walkin',
        //     'experiance_needed' => 0,
        //     'interview_address' => 'kalamandir',
        //     'interview_time' => '2019-06-30 03:00:00',
        //     'position' => 'software developer',
        //     'job_type' => 'Full Time',
        //     'job_shift' => 'Day Shift',
        //     'job_link' => 'sdfsd',
        //     'contact_person_name' => 'amisha',
        //     'contact_person_position' => 'hr',
        //     'contact_person_mobile_no' => '9876543210',
        //     'contact_person_email_id' => 'jainamisha566@gmail.com',
        //     'posted_by' => 1,
        //     'last_date' => '2019-07-04 00:00:00',
        //     'description' => 'this is a job'
        // );
        $this->db->order_by('interview_date');
        $query = $this->db->get('jobs');
        return $query->result();
        // $this->db->insert('job', $arr);
        // if ($this->db->affected_rows() == 1) {
        //     return true;
        // }
        // else {
        //     return false;
        // }
    }

    public function walkinjobs()
    {
        $arr = array
        (
            'recruitment_type' => 'Walkin',
        );
        $this->db->where($arr);
        $this->db->order_by('interview_date');
        $query = $this->db->get('jobs');
        return $query->result();
    }
    
     public function descjob()
    {
        $jobid = $this->input->post('id');
       // $jobid = 1;
        $arr = array
        (
            'id' => $jobid,
        );
        $this->db->where($arr);
        $query = $this->db->get('jobs');
        if($query->num_rows() == 1)
        {
            //$row = $query->row();
            return $query->row();
        }
        else
        {
            return false;
        }
    }

    public function adduser()
    {
        $arr = array(
            'fname' => 'firstName',
            'lname' => 'lastName',
            'email' => 'abc@gmail.com',
            'approvedby' => 1,
            'username' => 'abc',
            'password' => 'abc',
            'contactno' => '9966996696'
        ); 
        $this->db->insert('users', $arr);
        if ($this->db->affected_rows() == 1) {
            return true;
        }
        else {
            return false;
        }
    }

    public function deluser()
    {
        # code...
    }

    public function deljob()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('jobs');
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }




}
