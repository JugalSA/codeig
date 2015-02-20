<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
	$data['title'] = 'News archive';

	$this->load->view('templates/header', $data);
	$this->load->view('news/index', $data);
	$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['news'] = $this->news_model->get_news($slug);
	}
	
	public function create()
	{
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'Create A User Profile';

	$this->form_validation->set_rules('name', 'Name', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	$this->form_validation->set_rules('text', 'text', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		//$this->load->view('templates/header', $data);
		$this->load->view('news/create');
		//$this->load->view('templates/footer');

	}
	else
	{
		$this->news_model->set_news();
		$this->load->view('news/success');
	}
	}
}