<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	
	public function contoh1()
	{
		$data =array(
			'nama'  => 'Muhamad Aliamsyah',
			'kelas' => '12.6C.05',
			'hobby' => 'Futsal',
			'pekerjaan' => 'Laravel Web Developer'
		);

		$this->load->view('contoh1',$data);
	}

	public function contoh2()
	{
		$this->load->view('contoh2');
	}

	public function contoh3()
	{
		$this->load->view('contoh3');
	}

	public function proses()
	{

			$data['bilangan1'] = $_POST['bilangan1'];
			$data['bilangan2'] = $_POST['bilangan2'];


		$data['jumlah'] = $data['bilangan1'] + $data['bilangan2'];

		$this->load->view('proses',$data);
	}

	public function semangat()
	{
		$this->load->view('semangat');
	}
}
