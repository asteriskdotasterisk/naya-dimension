<?php 
class News extends CI_Controller{
	
	
	function index(){
		$data['main_content']	="news_view";
		$data['title']			="Nepali Korea News";
		$data['page']			="news";
		
		$data['adds_top']		=$this->extractor_model->get_adds('top');
		$data['links_korea']	=$this->extractor_model->get_links('korea',10);
		
				$config['base_url']		= site_url().'/news/index';
				$config['total_rows']	= $this->db->get_where('news',array('type'=>"normal"))->num_rows;
				$config['per_page']		= 15;
				$config['num_links']	= 5;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				$this->pagination->initialize($config);
				$this->db->select('id, date_in, title, photo, content');
				$this->db->order_by("id", "desc");
				
				
		$data['news'] = $this->db->get_where('news',array('type' => "normal"),$config['per_page'], $this->uri->segment(3));
		
		$this->load->view('template/template', $data);
		}
	
	function headlines(){
		
		$data['main_content']="headlines_view";
		$data['title']="Nepalikorea :: Headlines";
		$data['page']="headlines";
		$data['links_korea']=$this->extractor_model->get_links('korea',10);
		$data['adds_top']=$this->extractor_model->get_adds('top');
		
		
				$config['base_url']		= site_url().'/news/prabash';
				$config['total_rows']	= $this->db->get_where('news',array('type'=>"headlines"))->num_rows;
				$config['per_page']		= 15;
				$config['num_links']	= 5;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
				
				$this->db->select('id, title, photo, content, date_in');
				$this->db->order_by("id", "desc");
				
				
		$data['headlines'] = $this->db->get_where('news',array('type' => "headlines"),$config['per_page'], $this->uri->segment(3));
	
		$this->load->view('template/template', $data);
		
		}	
		
	function prabash(){
		
		$data['main_content']="prabash_view";
		$data['title']="Nepalikorea :: Prabash";
		$data['page']="prabash";
		$data['links_korea']=$this->extractor_model->get_links('korea',10);
		$data['adds_top']=$this->extractor_model->get_adds('top');
		
		
				$config['base_url']		= site_url().'/news/prabash';
				$config['total_rows']	= $this->db->get_where('news',array('type'=>"prabash"))->num_rows;
				$config['per_page']		= 15;
				$config['num_links']	= 5;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
				
				$this->db->select('id, title, photo, content, date_in');
				$this->db->order_by("id", "desc");
				
				
		$data['prabash'] = $this->db->get_where('news',array('type' => "prabash"),$config['per_page'], $this->uri->segment(3));
	
		$this->load->view('template/template', $data);
		
		}	

	
	function manoranjan(){
		$data['main_content']="manoranjan_view";
		$data['title']="Nepalikorea :: Entertainment";
		$data['page']="manoranjan";
		$data['links_korea']=$this->extractor_model->get_links('korea',10);
		$data['adds_top']=$this->extractor_model->get_adds('top');
		$config['base_url']		= site_url().'/news/manoranjan';
				$config['total_rows']	= $this->db->get_where('news',array('type'=>"manoranjan"))->num_rows;
				$config['per_page']		= 15;
				$config['num_links']	= 5;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
								
				$this->pagination->initialize($config);
				
				$this->db->select('id, title, photo, content, date_in');
				$this->db->order_by("id", "desc");
				
				
		$data['manoranjan'] = $this->db->get_where('news',array('type' => "manoranjan"),$config['per_page'], $this->uri->segment(3));
	
		$this->load->view('template/template', $data);
		
		
		}
		
	function read_more(){
		$news_id = $this->input->get('n_id');
		$this->load->model('common_model');
		
		$full_news 				= 	$this->common_model->full_info($news_id, "news", "id");
		if(!isset($full_news)){ $this->index();}
		else{
		$data['adds_top']=$this->extractor_model->get_adds('top');
	$data['links_korea']=$this->extractor_model->get_links('korea',10);
	
		$data['main_content']	=	"read_more_news";
		$data['title']			=	$full_news->title;
		$data['page']			=	$full_news->type;
		$data['news']			=	$full_news;
		$this->load->view('template/template', $data);
		}
		}
		}
?>