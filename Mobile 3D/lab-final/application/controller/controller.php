<?php
	class Controller {

		public $load;
		public $model;
		
		function __construct($URI = null) {
			$this->load = new Load(); 
			$this->model = new Model();
			$this->$URI();
		}

		function home() {
			$data = $this->model->dbGetData();
			$this->load->view('home', $data);
		}
		function coke() {
			$data = $this->model->dbGetData();
			$this->load->view('coke', $data);
		}
		function dietcoke() {
			$data = $this->model->dbGetData();
			$this->load->view('dietcoke', $data);
		}
		function fanta() {
			$data = $this->model->dbGetData();
			$this->load->view('fanta', $data);
		}

		function create() {
			$data = $this->model->dbCreateTable();
			$this->load->view('message', $data);
		}
		function apiCreateTable() { $this->create(); }

		function insert() {
			$data = $this->model->dbInsertData();
		   	$this->load->view('message', $data);
		}
		function apiInsertData() { $this->insert(); }

		// Add
		function flickr() {
			$this->load->view('flickr');
		}
		function apiGetFlickrService() { $this->flickr(); }

		function images() {
		   $data = $this->model->dbGetBrand();
		   $this->load->view('images', $data);
		}
		function apiLoadImage() { $this->images(); }
	
		function json() {
			$this->load->view('json');
		}
		function apiGetJson() { $this->json(); }
	
	}
?>    
