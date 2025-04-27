<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // check_login();
        // $this->load->helper('url');
        // $this->load->helper('customscript_helper');
        // $this->load->helper('Crud_helper');
        $this->load->helper('my_custom');
        
        
    }

    function index()
    {
       $data['view']='landing_page';
        $this->load->view('home/main',$data);
    }

    public function pageNotFound()
    {
        $data['view']='page_not_found';
        $this->load->view('home/main',$data);
    }
    public function bookAppointment()
    {
        $data['view']='booking/book_appointment';
        $this->load->view('home/main',$data);

    }
    public function bookVideoConsultation()
    {
        $data['view']='booking/book_video_consultantion';
        $this->load->view('home/main',$data);
    }
    public function bookScan()
    {
        $data['view']='booking/book_scan';
        $this->load->view('home/main',$data);
    }
    
    public function  bookVaccination()
    {
        $data['view']='booking/book_vaccination';
        $this->load->view('home/main',$data);
    }
    public function SubmitYourQuery()
    {
        $data['view']='booking/submit_your_query';
        $this->load->view('home/main',$data);
    }

}


?>