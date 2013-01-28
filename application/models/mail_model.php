<?php
class Mail_model extends CI_Model{
    function sendmail(){
        $name = $this->input->post("author");
        $from = $this->input->post("email");
        $to = "nayadimension.com";//$this->input->post("to");
        $cc = "nayadimension.com";//$this->input->post("cc");
        $bcc = "nayadimension.com";//$this->input->post("bcc");
        $subject = $this->input->post("subject");
        $body = $this->input->post("text");
        $data = array(
                      "from" => $from,
                       "to" => $to,
                       "cc" => $cc,
                       "bcc" => $bcc,
                       "subject" => $subject,
                       "body" => $body
            );
        $this->db->insert("mail", $data);
    } 
}
?>
