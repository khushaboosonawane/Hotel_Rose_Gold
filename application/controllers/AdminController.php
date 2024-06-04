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
        $num_records=($this->My_model->num_rows("slider"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/slider"),
            'per_page'=>2,
            'total_rows'=>$num_records
        ];
        $config['full_tag_open']='<ul class="pagination">';
        $config['full_tag_close']='</ul>';
        $config['attributes']=['class'=>'page-link'];
        $config['first_link']=false; 
        $config['last_link']=false; 
        $config['first_tag_open']='<li class="page-item">';
        $config['first_tag_close']='</li>';
        $config['prev_link']='<i class="ri-arrow-left-s-line"></i>';
        $config['prev_tag_open']='<li class="page-item">';
        $config['prev_tag_close']='</li>';
        $config['next_link']='<i class="ri-arrow-right-s-line"></i>';
        $config['next_tag_open']='<li class="page-item">';
        $config['next_tag_close']='</li>';
        $config['last_tag_open']='<li class="page-item">'; 
        $config['last_tag_close']='</li>'; 
        $config['cur_tag_open']='<li class="page-item"><a href="" class="page-link active">'; 
        $config['cur_tag_close']='<span class="sr-only"></span></a></li>';
        $config['num_tag_open']='<li class="page-item">';
        $config['num_tag_close']='</li>';  
        $this->pagination->initialize($config);
        $data['slider_info']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"slider",'sli_id');
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
    public function about_page(){
        $this->navbar();
        $data['about_data']=$this->My_model->select("about");
        $this->load->view("admin/about_page",$data);
        $this->footer();
    }
    public function save_about_info(){
        
       if($_FILES['about_first_image']['name']!=""){
        $filepath=($this->My_model->select_image("about",['ab_id'=>1],'about_first_image'))[0]['about_first_image'];
        $full_path="public/upload/about_image/$filepath";
        unlink($full_path);
        $first_image_name=time().rand(1111,9999).$_FILES['about_first_image']['name'];
        move_uploaded_file($_FILES['about_first_image']['tmp_name'],"public/upload/about_image/$first_image_name");
        $_POST['about_first_image']=$first_image_name;
        $this->My_model->update("about",$_POST);
        $_SESSION['update_data']="About Section Updated Successfully";
        redirect(base_url()."admincontroller/about_page");
       }
       if($_FILES['about_second_image']['name']!=""){
        $filepath=($this->My_model->select_image("about",['ab_id'=>1],'about_second_image'))[0]['about_second_image'];
        $full_path="public/upload/about_image/$filepath";
        unlink($full_path);
        $second_image_name=time().rand(1111,9999).$_FILES['about_second_image']['name'];
        move_uploaded_file($_FILES['about_second_image']['tmp_name'],"public/upload/about_image/$second_image_name");
        $_POST['about_second_image']=$second_image_name;
        $this->My_model->update("about",$_POST);
        $_SESSION['update_data']="About Section Updated Successfully";
        redirect(base_url()."admincontroller/about_page");
       }
       $this->My_model->update("about",$_POST);
       $_SESSION['update_data']="About Section Updated Successfully";
       redirect(base_url()."admincontroller/about_page");
    }
}
?>

