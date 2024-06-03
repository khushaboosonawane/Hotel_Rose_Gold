<?php
class AdminController extends CI_Controller{
    private function navbar(){
        $this->load->view("admin/navbar");
    }
    private function footer(){
        $this->load->view("admin/footer");
    }
    public function index(){
        $this->navbar();
        $this->load->view("admin/index");
        $this->footer();
    }
    public function basic_info(){
        $this->navbar();
        $data['basic_info']=$this->My_model->select("basic_info");
        $this->load->view("admin/basic_info",$data);
        $this->footer();
    }
    public function update_basic_info(){
        if($_FILES['hotel_logo']['name']!=""){
            $firstfilename=$this->db->query("SELECT hotel_logo FROM basic_info")->result_array();
            $filename=$firstfilename[0]['hotel_logo'];
            $filepath="public/upload/hotel_logo/$filename";
            unlink($filepath);
            $filename=time().rand(1111,9999).$_FILES['hotel_logo']['name'];
            move_uploaded_file($_FILES['hotel_logo']['tmp_name'],"public/upload/hotel_logo/$filename");
            $_POST['hotel_logo']=$filename;
            $this->My_model->update("basic_info",$_POST);
            redirect(base_url()."admincontroller/basic_info");
        }else{
            $this->My_model->update("basic_info",$_POST);
            redirect(base_url()."admincontroller/basic_info");
        }
      
    }
}
?>

