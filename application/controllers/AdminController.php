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
    public function category(){
        $this->navbar();
        $this->load->view("admin/category");
        $this->footer();
    }
    public function save_category(){
        $this->My_model->insert("category",$_POST);
        $_SESSION['save_data']="Category Data Save Successfully";
        redirect(base_url()."admincontroller/category_data");
    }
    public function category_data(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("category"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/category_data"),
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
        $data['cat_data']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"category",'cat_id');
        $this->load->view("admin/category_data",$data);
        $this->footer();
    }
    public function delete_cat_data($cat_id){
        $this->My_model->delete("category",['cat_id'=>$cat_id]);
        $_SESSION['delete_data']="Category data deleted successfully...";
        redirect(base_url()."admincontroller/category_data");
    }
    public function edit_category_data($cat_id){
        $this->navbar();
        $data['cat_info']=$this->My_model->select("category",['cat_id'=>$cat_id]);
        $this->load->view("admin/edit_category_data",$data);
        $this->footer();
    }
    public function update_category(){
        $this->My_model->update_cond("category",$_POST,['cat_id'=>$_POST['cat_id']]);
        $_SESSION['update_data']="Category Data Updated Successfully...";
        redirect(base_url()."admincontroller/category_data");
    }
    public function sub_category(){
        $this->navbar();
        $data['cat_data']=$this->My_model->select("category",['cat_status'=>'Active']);
        $this->load->view("admin/sub_category",$data);
        $this->footer();
    }
    public function save_sub_category(){
        $this->My_model->insert("sub_category",$_POST);
        $_SESSION['save_data']="Data Save Successfully";
        redirect(base_url()."admincontroller/subcategory_data");
    }
    public function subcategory_data(){
        $this->navbar();
        $data['sub_category_data']=$this->My_model->select_category_data();
        $this->load->view("admin/subcategory_data",$data);
        $this->footer();
    }
    public function delete_sub_cat_data($sub_cat_id){
        $this->My_model->delete("sub_category",['sub_cat_id'=>$sub_cat_id]);
        $_SESSION['delete_data']="Data Deleted Successfully..";
        redirect(base_url()."admincontroller/subcategory_data");
    }
    public function edit_sub_cat_data($sub_cat_id){
        $this->navbar();
        $data['cat_data']=$this->My_model->select("category");
       $data['sub_cat_data']=$this->My_model->select_sub_cat($sub_cat_id);
        $this->load->view("admin/edit_sub_cat_data",$data);
        $this->footer();
    }
    public function update_sub_category(){
        $this->My_model->update_sub_category("sub_category",$_POST);
        $_SESSION['update_data']="Data Updated Successfully";
        redirect(base_url()."admincontroller/subcategory_data");
    }
    public function special_offer_room(){
        $this->navbar();
        $data['cat_data']=$this->My_model->select("category",['cat_status'=>'Active']);
        $this->load->view("admin/special_offer_room",$data);
        $this->footer();
    }
    public function getSubCateUseAjax($cat_id){
        $cond=['cat_id'=>$cat_id];
        $data=$this->My_model->select("sub_category",$cond);
        echo json_encode($data);
    }
    public function save_room(){
        $roomname=time().rand(1111,9999).$_FILES['room_image']['name'];
        move_uploaded_file($_FILES['room_image']['tmp_name'],"public/upload/rooms_image/$roomname");
        $_POST['room_image']=$roomname;
        $_POST['status']='Active';
        $_POST['order_status']='Active';
        $this->My_model->insert("rooms",$_POST);
        $_SESSION['save_data']="Rooms Data Save Successfully...";
        redirect(base_url()."admincontroller/rooms_data");
    }
    public function rooms_data(){
        $this->navbar();
        $data['special_room']=$this->My_model->select_special_room();
        $this->load->view("admin/rooms_data",$data);
        $this->footer();
    }
    public function delete_special_rooms_data($room_id){
        $img_name=($this->My_model->select_image("rooms",['room_id'=>$room_id],'room_image'))[0]['room_image'];
        unlink("public/upload/rooms_image/$img_name");
        $this->My_model->delete("rooms",['room_id'=>$room_id]);
        $_SESSION['delete_data']="Data Deleted Successfully..";
        redirect(base_url()."admincontroller/rooms_data");
    }
    public function edit_special_rooms_data($room_id){
        $this->navbar();
        $data['cat_data']=$this->My_model->select("category",['cat_status'=>"Active"]);
        $data['special_rooms_data']=$this->My_model->select_special_room_with_id($room_id);
        $this->load->view("admin/edit_special_rooms_data",$data);
        $this->footer();
    }
    public function update_special_room(){
        if($_FILES['room_image']['name']!=""){
            $img_name=($this->My_model->select_image("rooms",['room_id'=>$_POST['room_id']],'room_image'))[0]['room_image'];
            unlink("public/upload/rooms_image/$img_name");
            $roomname=time().rand(1111,9999).$_FILES['room_image']['name'];
            move_uploaded_file($_FILES['room_image']['tmp_name'],"public/upload/rooms_image/$roomname");
            $_POST['room_image']=$roomname;
            $this->My_model->update_special_room("rooms",$_POST);
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/rooms_data");
        }else{
            $this->My_model->update_special_room_without_image("rooms",$_POST);
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/rooms_data");

        }
    }
    public function extra_service(){
        $this->navbar();
        $data['extra_service']=$this->My_model->select("extra_service");
        $this->load->view("admin/extra_service",$data);
        $this->footer();
    }
    public function update_extra_service(){
        $this->My_model->update("extra_service",$_POST);
        $_SESSION['update_data']="Extra service data updated successfully";
        redirect(base_url()."admincontroller/extra_service");
    }
}
?>

