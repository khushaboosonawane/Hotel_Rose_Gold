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
    public function foods(){
        $this->navbar();
        $this->load->view("user/foods");
        $this->footer();
    }
    public function contact(){
        $this->navbar();
        $this->load->view("user/contact");
        $this->footer();
    }
    public function services(){
        $this->navbar();
        $this->load->view("user/services");
        $this->footer();
    }
    public function gallery(){
        $this->navbar();
        $this->load->view("user/gallery");
        $this->footer();
    }
    public function team(){
        $this->navbar();
        $this->load->view("user/team");
        $this->footer();
    }
    public function userprofile(){
        $this->navbar();
        $this->load->view("user/userprofile");
        $this->footer();
    }
    public function search_section(){
        $this->navbar();
        $this->load->view("user/search_section");
        $this->footer();
    }
    
}
?>