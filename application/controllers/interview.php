<?php 
class Interview extends CI_Controller{
	
	function index(){
		
		$data['main_content']="interview_view";
		$data['title']="Nepalikorea :: Interview";
		$data['page']="interview";
		$data['adds_top']=$this->extractor_model->get_adds('top');
		$data['links_korea']=$this->extractor_model->get_links('korea',10);
		
				$config['base_url']		= base_url().'interview/index';
				$config['total_rows']	= $this->db->get('interview')->num_rows;
				$config['per_page']		= 2;
				$config['num_links']	= 5;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
				$this->db->order_by("id", "desc");
				
		$data['interview'] = $this->db->get('interview', $config['per_page'], $this->uri->segment(3));
		$this->load->view('template/template', $data);
		}
	
	function read_more(){
		$news_id = $this->input->get('i_id');
		$this->load->model('common_model');
		$full_data 				= 	$this->common_model->full_info($news_id, "interview", "id");
		if(!isset($full_data)){ $this->index();}
		else{
		$data['adds_top']=$this->extractor_model->get_adds('top');
		$data['links_korea']=$this->extractor_model->get_links('korea',10);
		$data['main_content']	=	"more_interview";
		$data['title']			=	$full_data->title;
		$data['page']			=	"interview";
		$data['interview']		=	$full_data;
		$this->load->view('template/template', $data);
		}
		}	
	}
?>