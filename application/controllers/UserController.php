<?php
class UserController extends CI_Controller{
    private function navbar(){
        $this->load->view("user/navbar");
    }
    private function footer(){
        $this->load->view("user/footer");
    }
    public function index(){
        $this->navbar();
        $this->load->view("user/index");
        $this->footer();
    }
    public function about(){
        $this->navbar();
        $this->load->view("user/about");
        $this->footer();
    }
    public function rooms_suits(){
        $this->navbar();
        $this->load->view("user/rooms_suits");
        $this->footer();
    }
    
}
?>