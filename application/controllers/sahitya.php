<?php 
class Sahitya extends CI_Controller{
	
	function index(){
		$data['main_content']="sahitya_view";
		$data['title']="Nepalikorea :: Sahitya";
		$data['page']="sahitya";
		$data['links_korea']=$this->extractor_model->get_links('korea',10);
		$data['adds_top']=$this->extractor_model->get_adds('top');
		
				$config['base_url']		= base_url().'sahitya/index';
				$config['total_rows']	= $this->db->get('literature')->num_rows;
				$config['per_page']		= 2;
				$config['num_links']	= 5;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
				$this->db->order_by("id", "desc");
				
		$data['sahitya'] = $this->db->get('literature', $config['per_page'], $this->uri->segment(3));
		$this->load->view('template/template', $data);
		}
	
		
	function read_more(){
		$news_id = $this->input->get('s_id');
		$this->load->model('common_model');
		
		$full_info 				= 	$this->common_model->full_info($news_id, "literature", "id");
		if(!isset($full_info)){ $this->index();}
		else{
		$data['adds_top']=$this->extractor_model->get_adds('top');
		$data['links_korea']=$this->extractor_model->get_links('korea',10);
		$data['main_content']	=	"more_sahitya";
		$data['title']			=	$full_info->title;
		$data['page']			=	"sahitya";
		$data['sahitya']			=	$full_info;
		$this->load->view('template/template', $data);
		}
		}
	}
?>