<?php
class UserController extends CI_Controller{
    private function navbar(){
        $this->load->view("user/navbar");
    }
    private function footer(){
        $this->load->view("user/footer");
    }
    public function index(){
        // $this->navbar();
        $this->load->view("user/index");
        // $this->footer();
    }
    
}
?>