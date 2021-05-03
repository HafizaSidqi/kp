<?php
class Home extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
        $this->load->model("links_model");
	}
    
    public function index()
    {
        $data["links"] = $this->links_model->getAll();
        //$data["Ten"] = $this->links_model->getTen();
        $this->load->view('link/links', $data);
    }
}
