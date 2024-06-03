<?php
class AdminController extends CI_Controller{
    private function navbar(){
        $data['basic_info']=$this->My_model->select("basic_info");
        $this->load->view("admin/navbar",$data);
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
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/basic_info");
        }else{
            $this->My_model->update("basic_info",$_POST);
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/basic_info");
        }
        unset($_SESSION['update_data']);
      
    }
    public function slider(){
        $this->navbar();
        $data['slider_info']=$this->My_model->select("slider");
        $this->load->view("admin/slider",$data);
        $this->footer();
    }
    public function save_slider_info(){
        $filename=time().rand(1111,9999).$_FILES['slider_image']['name'];
        move_uploaded_file($_FILES['slider_image']['tmp_name'],"public/upload/slider_image/$filename");
        $_POST['slider_image']=$filename;
        $this->My_model->insert("slider",$_POST);
        $_SESSION['save_data']="Slider Data Save Successfully..";
        redirect(base_url()."admincontroller/slider");
    }
    public function delete_slider_data($sli_id){
        $filename=$this->My_model->select_image("slider",['sli_id'=>$sli_id],"slider_image");
        $file_path=$filename[0]['slider_image'];
        $full_path="public/upload/slider_image/$file_path";
        unlink($full_path);
        $this->My_model->delete("slider",['sli_id'=>$sli_id]);
        $_SESSION['delete_data']="Data Deleted Successfully...";
        redirect(base_url()."admincontroller/slider");
    }
    public function edit_slider_data($sli_id){
        $data['sli_data']=$this->My_model->select("slider",['sli_id'=>$sli_id]);
        $this->navbar();
        $this->load->view("admin/edit_slider_data",$data);
        $this->footer();

    }
    public function update_slider_info(){
        if($_FILES['slider_image']['name']!=""){
            $filename=$this->My_model->select_image("slider",['sli_id'=>$_POST['sli_id']],"slider_image");
            $file_path=$filename[0]['slider_image'];
            $full_path="public/upload/slider_image/$file_path";
            unlink($full_path);

            $file_name=time().rand(1111,9999).$_FILES['slider_image']['name'];
            move_uploaded_file($_FILES['slider_image']['tmp_name'],"public/upload/slider_image/$file_name");
            $_POST['slider_image']=$file_name; 
            $this->My_model->update_cond("slider",$_POST,['sli_id'=>$_POST['sli_id']]);
            $_SESSION['update_data']="Slider Data Updated Successfully";
            redirect(base_url()."admincontroller/slider");
        }
        else{
            $this->My_model->update_cond("slider",$_POST,['sli_id'=>$_POST['sli_id']]);
            $_SESSION['update_data']="Slider Data Updated Successfully";
            redirect(base_url()."admincontroller/slider");
        }
    }
}
?>

