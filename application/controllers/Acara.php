<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acara extends CI_Controller {

	public function index()
	{
		$data["ea"] = "ea";
		$r = $this->load->view('acara', $data, TRUE);
		echo $r;
	}
}
