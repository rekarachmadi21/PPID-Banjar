<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

	public function index()
	{
		$this->load->view('Templates/auth_header');
		$this->load->view('home/Login');
		$this->load->view('Templates/auth_footer');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if ($user) {
			//user ada
			if ($user['is_aktif'] == 1) {
				//user aktif
				if (password_verify($password, $user['password'])) {
					$data = [
						'NIK' => $user['NIK'],
					];
					$this->session->set_userdata($data);
					redirect('home');
				}
			}
		}
	}

	public function register()
	{
		$this->load->view('Templates/auth_header');
		$this->load->view('home/register');
		$this->load->view('Templates/auth_footer');
	}

	public function lupa_akun()
	{
		$this->load->view('Templates/auth_header');
		$this->load->view('home/lupa_akun');
		$this->load->view('Templates/auth_footer');
	}
}
