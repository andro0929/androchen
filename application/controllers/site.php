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
	public function projects() {
		$this->load->view('projects', Array(
			"selector" => "projects",
			"pageTitle" => "Andro Chen's Projects - 陳俊安執行過的專案"
		));
	}
	public function demos() {
		$this->load->view('demos', Array(
			"selector" => "demos",
			"pageTitle" => "Andro Chen's Demos - 陳俊安寫過的Web Tool Demos"
		));
	}
}