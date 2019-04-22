<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('home_model');
		$this->load->helper("url");
        $this->load->library("pagination");
    }

	public function index(){
  //       $this->mPageTitle = lang('books');
		// $config = array();
        
  //       //pagination settings
  //       $config['base_url'] = base_url('home/index/page');
        
  //       $config['total_rows'] = $this->home_model->record_count();
  //       $config['per_page'] = $this->mSettings->front_per_page;
  //       $config["uri_segment"] = 4;
  //       $config["num_links"] = 2;
    
  //       //config for bootstrap pagination class integration
  //       $config['full_tag_open'] = '<ul class="pagination">';
  //       $config['full_tag_close'] = '</ul>';
  //       $config['first_link'] = false;
  //       $config['last_link'] = false;
  //       $config['first_tag_open'] = '<li>';
  //       $config['first_tag_close'] = '</li>';
  //       $config['prev_link'] = '&laquo';
  //       $config['prev_tag_open'] = '<li class="prev">';
  //       $config['prev_tag_close'] = '</li>';
  //       $config['next_link'] = '&raquo';
  //       $config['next_tag_open'] = '<li>';
  //       $config['next_tag_close'] = '</li>';
  //       $config['last_tag_open'] = '<li>';
  //       $config['last_tag_close'] = '</li>';
  //       $config['cur_tag_open'] = '<li class="active"><a href="#">';
  //       $config['cur_tag_close'] = '</a></li>';
  //       $config['num_tag_open'] = '<li>';
  //       $config['num_tag_close'] = '</li>';
  //        // $config['use_page_numbers'] = TRUE;
  //       $config['last_link'] = '&raquo&raquo';
  //       $config['first_link'] = '&laquo&laquo';

  //       $this->pagination->initialize($config);
  //       $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
  //       $this->data["books"] = $this->home_model->getBookList($config["per_page"], $page);
  //       $this->data["links"] = $this->pagination->create_links();
  //       $this->data["categories"] = $this->home_model->getAllCategories();
  //       $this->data["authors"] = $this->home_model->getAllAuthors();
  //       $this->render('home');


        $config = array();

        //pagination settings
        $config['base_url'] = base_url('home/index/page');
        $config['total_rows'] = $this->home_model->record_count();
        $config['per_page'] = $this->mSettings->front_per_page;
        $config["uri_segment"] = 4;
        $config["num_links"] = 2;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev ">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
         // $config['use_page_numbers'] = TRUE;
        $config['last_link'] = '&raquo&raquo';
        $config['first_link'] = '&laquo&laquo';

        $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();
      
        $config['per_page'] = $this->mSettings->front_per_page;
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["books"] = $this->home_model->getBookList($config["per_page"], $page);
        $data["categories"] = $this->home_model->getAllCategories();
        $data["authors"] = $this->home_model->getAllAuthors();
        $this->load->view('home_grid',$data);
        
	}
	
    public function search() {
        $this->mPageTitle = lang('books');
        
        $author_id = ($this->input->get('author_id')) ? $this->input->get('author_id') : NULL;
        $book_title = ($this->input->get('book_title')) ? $this->input->get('book_title') : NULL;
        $category_id = ($this->input->get('category_id')) ? $this->input->get('category_id') : NULL;
         
        $config = array();
         //pagination settings
        $config['base_url'] = base_url('home/search').'/page/';
        $config['total_rows'] = $this->home_model->record_count($category_id, $author_id, $book_title);
        $config['per_page'] = $this->mSettings->front_per_page;
        $config["uri_segment"] = 4;
        $config["num_links"] = 2;
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['reuse_query_string'] = TRUE;
        // $config['use_page_numbers'] = TRUE;
        $config['last_link'] = '&raquo&raquo';
        $config['first_link'] = '&laquo&laquo';
        // $this->pagination->initialize($config);
        // $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        // $this->data["books"] = $this->home_model->getBookList($config["per_page"], $page, $author_id, $category_id, $book_title);
        // $this->data["links"] = $this->pagination->create_links();
        // $this->data["categories"] = $this->home_model->getAllCategories();
        // $this->data["authors"] = $this->home_model->getAllAuthors();
        //$this->render('home');

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["books"] = $this->home_model->getBookList($config["per_page"], $page, $author_id, $category_id, $book_title);
        $data["links"] = $this->pagination->create_links();
        $data["categories"] = $this->home_model->getAllCategories();
        $data["authors"] = $this->home_model->getAllAuthors();
        $this->load->view('home_grid',$data);
        
    }

    function rincian_buku($id){
      $data = array();
      
      $data["books"] = $this->home_model->getBookDetByID($id);  
      $data["categories"] = $this->home_model->getAllCategories();
      $data["authors"] = $this->home_model->getAllAuthors();
      $data["categories"] = $this->home_model->getAllCategories();

      // var_dump($data["books"]); exit();

      $this->load->view('rincian_buku',$data);

    }

     public function read($id)
    {
        $this->load->model('home_model');
        $book = $this->books_model->getBookByID($id);

        $this->data['book'] = $book;
        $this->mPageTitle = $book->book_title;

        $this->render('read');
    }   
	
}
