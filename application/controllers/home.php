<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

    public function index()
    {
        $this->load->view('Templates/auth_header');
        $this->load->view('home/Login');
        $this->load->view('Templates/auth_footer');
    }

    public function register()
    {
        $this->load->view('Templates/auth_header');
        $this->load->view('home/register');
        $this->load->view('Templates/auth_footer');
    }

    public function Permohonan()
    {
        $this->load->view('home/Permohonan');
    }

    public function DataPermohonan()
    {
        $this->load->view('home/DataPermohonan');
    }
}
