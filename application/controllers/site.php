<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	/**
	 * Index Page for this controller.
	 */
	public function index() {
		$this->load->view('index', Array(
			"selector" => "index",
			"pageTitle" => "Andro Chen's Website - 陳俊安的個人網站與作品集"
		));
	}
	public function hireme() {
		$this->load->view('hireme', Array(
			"selector" => "hireme",
			"pageTitle" => "Andro Chen's Resume - 陳俊安的履歷與作品集"
		));
	}
	public function project() {
		$this->load->view('project', Array(
			"selector" => "project",
			"pageTitle" => "Andro Chen's Project - 陳俊安執行過的專案"
		));
	}
}