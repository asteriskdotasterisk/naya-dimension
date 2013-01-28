<?php 
class Gallery extends CI_Controller{
	
	function index(){
		
		$data['main_content']="gallery_view";
		$data['title']="Nepalikorea :: Photogallery";
		$data['page']="gallery";
		$data['adds_top']=$this->extractor_model->get_adds('top');
		$data['adds_side']=$this->extractor_model->get_adds('side');
				
				$config['base_url']		= base_url().'gallery/index';
				$config['total_rows']	= $this->db->get('gallery')->num_rows;
				$config['per_page']		= 9;
				$config['num_links']	= 5;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				
				
				$this->pagination->initialize($config);
				$this->db->select('title, photo, content');
				$this->db->order_by("id", "desc");
				
		$data['images'] = $this->db->get('gallery', $config['per_page'], $this->uri->segment(3));
	$this->load->view('template/template', $data);
		}
	}
?>