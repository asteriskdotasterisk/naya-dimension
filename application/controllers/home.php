<?php

class Home extends CI_Controller {

    private $hash_index = 777;

    function index() {
        $data['main_content'] = "index";
        $data['title'] = "nayaDimension";
        $data['active'] = array('home' => 'active', 'contact' => '', 'about' => '');
        //get_news('type', 'content sub string length', limit)	
        $this->load->view('template/template', $data);
    }

    function contact() {
        $data['title'] = "contact";
        $data['main_content'] = "contact";
        $data['info'] = null;
        //$data['active']="contact"
        //$data['active'] = array('home' => '', 'about' => '', 'contact' => 'active');
        if($this->input->post("submit")){
        $this->load->model("mail_model");
        $this->mail_model->sendmail();
        $data['info'] = "Message Successfully Sent.";
        }
        $this->load->view('template/template', $data);
    }

    function about() {
        $data['title'] = "About us";
        $data['main_content'] = "about";
        //$data['active']="contact"
        $data['active'] = array('home' => '', 'about' => 'active', 'contact' => '');
        $this->load->view('template/template', $data);
    }

    function more() {
        $add_id = $this->input->get('n_id');
        $this->load->model('common_model');

        $full_add = $this->common_model->full_info($add_id, "adds", "id");
        if (!isset($full_add)) {
            $this->index();
        } else {
            $data['adds_top'] = $this->extractor_model->get_adds('top');
            $data['links_korea'] = $this->extractor_model->get_links('korea', 10);

            $data['main_content'] = "view_detail_add";
            $data['title'] = $full_add->title;
            $data['page'] = "";
            $data['add'] = $full_add;
            $this->load->view('template/template', $data);
        }
    }

}

?>
