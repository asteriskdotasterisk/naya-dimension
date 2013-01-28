<?php 
class Videos extends CI_Controller{
	
	function index(){
		$data['main_content']="video_view";
		$data['title']="Nepalikorea :: Videos";
		$data['page']="video";
		$data['adds_top']=$this->extractor_model->get_adds('top');
		$data['links_korea']=$this->extractor_model->get_links('korea',10);
				
				$config['base_url']		= base_url().'videos/index';
				$config['total_rows']	= $this->db->get('video')->num_rows;
				$config['per_page']		= 2;
				$config['num_links']	= 5;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
				$this->db->order_by("id", "desc");
				
		$data['videos'] = $this->db->get('video', $config['per_page'], $this->uri->segment(3));
		$this->load->view('template/template', $data);
		}
		
		
		function read_more(){
		$news_id = $this->input->get('v_id');
		$this->load->model('common_model');
		$full_data 				= 	$this->common_model->full_info($news_id, "video", "id");
		if(!isset($full_data)){ $this->index();}
		else{
		$data['adds_top']=$this->extractor_model->get_adds('top');
		$data['links_korea']=$this->extractor_model->get_links('korea',10);
		$data['main_content']	=	"more_video";
		$data['title']			=	$full_data->title;
		$data['page']			=	"video";
		$data['video']		=	$full_data;
		$this->load->view('template/template', $data);
		}
	
		}
	}
?>