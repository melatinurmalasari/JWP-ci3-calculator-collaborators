<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembagian extends CI_Controller {
	public function index() {
		$this->load->view('pembagian');
	}

	public function hasilBagi() {
		$hasil['hasilnya'] = $_POST['num1']/$_POST['num2'];
		$this->load->view('hasilbagi', $hasil);
	}
}
