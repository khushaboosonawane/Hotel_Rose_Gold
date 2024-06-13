<?php
class AdminController extends CI_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if(!isset($_SESSION['admin_id'])){
            redirect(base_url()."adminlogincontroller/");
            exit();
        }
    }
    private function navbar(){
        if(isset($_SESSION['admin_id'])){
            $data['admin_data']=$this->My_model->select("admin_data",['admin_id'=>$_SESSION['admin_id']]);
        }
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
    public function save_extra_service_slider(){
        $extra_service_image=time().rand(1111,9999).$_FILES['extra_service_image']['name'];
        move_uploaded_file($_FILES['extra_service_image']['tmp_name'],"public/upload/extra_service_slider_image/$extra_service_image");
        $_POST['extra_service_image']=$extra_service_image;
        $this->My_model->insert("extra_service_slider",$_POST);
        $_SESSION['save_data']="Data Save Successfully...";
        redirect(base_url()."admincontroller/extra_service_slider_info");
    }
    public function extra_service_slider_info(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("extra_service_slider"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/extra_service_slider_info"),
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
        $data['slider_data']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"extra_service_slider",'extra_service_id');
        $this->load->view("admin/extra_service_slider_info",$data);
        $this->footer();
    }
    public function delete_extra_slider_data($extra_service_id){
        $data=($this->My_model->select_image("extra_service_slider",['extra_service_id'=>$extra_service_id],'extra_service_image'))[0]['extra_service_image'];
        unlink("public/upload/extra_service_slider_image/$data");
        $this->My_model->delete("extra_service_slider",['extra_service_id'=>$extra_service_id]);
        $_SESSION['delete_data']="Data deleted successfully";
        redirect(base_url()."admincontroller/extra_service_slider_info");
    }
    public function edit_extra_slider_data($extra_service_id){
        $data['slider_data']=$this->My_model->select("extra_service_slider",['extra_service_id'=>$extra_service_id]);
        $this->navbar();
        $this->load->view("admin/edit_extra_slider_data",$data);
        $this->footer();
    }
    public function update_extra_service_slider(){
        if($_FILES['extra_service_image']['name']!=""){
            $data=($this->My_model->select_image("extra_service_slider",['extra_service_id'=>$_POST['extra_service_id']],'extra_service_image'))[0]['extra_service_image'];
            unlink("public/upload/extra_service_slider_image/$data");
            $extra_service_image=time().rand(1111,9999).$_FILES['extra_service_image']['name'];
            move_uploaded_file($_FILES['extra_service_image']['tmp_name'],"public/upload/extra_service_slider_image/$extra_service_image");
            $_POST['extra_service_image']=$extra_service_image;
            $this->My_model->update_cond("extra_service_slider",$_POST,['extra_service_id'=>$_POST['extra_service_id']]);
            $_SESSION['update_data']="Slider Data Updated Successfully";
            redirect(base_url()."admincontroller/extra_service_slider_info");
        }else{
            $this->My_model->update_cond("extra_service_slider",$_POST,['extra_service_id'=>$_POST['extra_service_id']]);
            $_SESSION['update_data']="Slider Data Updated Successfully";
            redirect(base_url()."admincontroller/extra_service_slider_info");
        }
    }
    public function promotional_video(){
        $this->navbar();
        $data['pro_data']=$this->My_model->select('promotional_video');
        $this->load->view("admin/promotional_video",$data);
        $this->footer();
    }
    public function update_promotional_video(){
        if($_FILES['promotional_video']['name']!=""){
            $data=($this->My_model->select_image("promotional_video",['pro_id'=>1],'promotional_video'))[0]['promotional_video'];
            unlink("public/upload/promotional_video/$data");
            $promotional_video=time().rand(1111,9999).$_FILES['promotional_video']['name'];
            move_uploaded_file($_FILES['promotional_video']['tmp_name'],"public/upload/promotional_video/$promotional_video");
            $_POST['promotional_video']=$promotional_video;
            $this->My_model->update("promotional_video",$_POST);
            $_SESSION['update_data']="Data updated successfully..";
            redirect(base_url()."admincontroller/promotional_video");
        }else{
            $this->My_model->update('promotional_video',$_POST);
            $_SESSION['update_data']="Data updated successfully..";
            redirect(base_url()."admincontroller/promotional_video");
        }
       
    }
    public function hotel_facility(){
        $this->navbar();
        $this->load->view("admin/hotel_facility");
        $this->footer();
    }
    public function save_facility_info(){
        $this->My_model->insert("hotel_facility",$_POST);
        $_SESSION['save_data']='Data Save Successfully...';
        redirect(base_url()."admincontroller/view_facility_data");
    }
    public function view_facility_data(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("hotel_facility"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/view_facility_data"),
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
        $data['fac_data']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"hotel_facility",'fac_id');
        $this->load->view("admin/view_facility_data",$data);
        $this->footer();
    }
    public function delete_fac_data($fac_id){
        $this->My_model->delete("hotel_facility",['fac_id'=>$fac_id]);
        $_SESSION['delete_data']="Data Deleted successfully...";
        redirect(base_url()."admincontroller/view_facility_data");
    }
    public function edit_fac_data($fac_id){
        $this->navbar();
        $data['fac_data']=$this->My_model->select("hotel_facility",['fac_id'=>$fac_id]);
        $this->load->view("admin/edit_fac_data",$data);
        $this->footer();
    }
    public function update_facility_info(){
        $this->My_model->update_cond("hotel_facility",$_POST,['fac_id'=>$_POST['fac_id']]);
        $_SESSION['update_data']="Data updated Successfully";
        redirect(base_url()."admincontroller/view_facility_data");
    }
    public function testimonial(){
        $this->navbar();
        $data['test_back']=$this->My_model->select("test_back_image");
        $this->load->view("admin/testimonial",$data);
        $this->footer();
    }
    public function save_test_info(){
        $test_image=time().rand(1111,9999).$_FILES['test_image']['name'];
        move_uploaded_file($_FILES['test_image']['tmp_name'],"public/upload/testimonial_image/$test_image");
        $_POST['test_image']=$test_image;
        $this->My_model->insert("testimonial",$_POST);
        $_SESSION['save_data']="Data Added Successfully";
        redirect(base_url()."admincontroller/view_test_data");
    }
    public function view_test_data(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("testimonial"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/view_test_data"),
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
        $data['test_data']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"testimonial",'test_id');
        $this->load->view("admin/view_test_data",$data);
        $this->footer();
    }
    public function delete_test_data($test_id){
        $data=($this->My_model->select_image("testimonial",['test_id'=>$test_id],'test_image'))[0]['test_image'];
        unlink("public/upload/testimonial_image/$data");
        $this->My_model->delete("testimonial",['test_id'=>$test_id]);
        $_SESSION['delete_data']="Data deleted successfully!..";
        redirect(base_url()."admincontroller/view_test_data");
    }
    public function edit_test_data($test_id){
        $this->navbar();
        $data['test_data']=$this->My_model->select("testimonial",['test_id'=>$test_id]);
        $this->load->view("admin/edit_test_data",$data);
        $this->footer();
    }
    public function update_test_info(){
        if($_FILES['test_image']['name']!=""){
            $data=($this->My_model->select_image("testimonial",['test_id'=>$_POST['test_id']],'test_image'))[0]['test_image'];
            unlink("public/upload/testimonial_image/$data");
            $test_image=time().rand(1111,9999).$_FILES['test_image']['name'];
            move_uploaded_file($_FILES['test_image']['tmp_name'],"public/upload/testimonial_image/$test_image");
            $_POST['test_image']=$test_image;
            $this->My_model->update_cond("testimonial",$_POST,['test_id'=>$_POST['test_id']]);
            $_SESSION['update_data']="Data updated successfully";
            redirect(base_url()."admincontroller/view_test_data");
        }else{
            $this->My_model->update_cond("testimonial",$_POST,['test_id'=>$_POST['test_id']]);
            $_SESSION['update_data']="Data updated successfully";
            redirect(base_url()."admincontroller/view_test_data");
        }
    }
    public function update_test_back_info(){
        $data=($this->My_model->select_image("test_back_image",['test_id'=>1],'test_back_image'))[0]['test_back_image'];
            unlink("public/upload/test_back_img/$data");
        $test_back_image=time().rand(1111,9999).$_FILES['test_back_image']['name'];
        move_uploaded_file($_FILES['test_back_image']['tmp_name'],"public/upload/test_back_img/$test_back_image");
        $_POST['test_back_image']=$test_back_image;
        $this->My_model->update_cond("test_back_image ",$_POST,['test_id'=>1]);
        $_SESSION['update_data']='Background image updated successfully';
        redirect(base_url()."admincontroller/testimonial");
    }
    public function metting_halls(){
        $this->navbar();
        $this->load->view("admin/metting_halls");
        $this->footer();
    }
    public function save_hall_info(){
        $hall_image=time().rand(1111,9999).$_FILES['hall_image']['name'];
        move_uploaded_file($_FILES['hall_image']['tmp_name'],"public/upload/hall_image/$hall_image");
        $_POST['hall_image']=$hall_image;
        $_POST['book_status']="disabled";
        $_POST['user_id']=0;
        $this->My_model->insert("metting_halls",$_POST);
        $_SESSION['save_data']="Data Save successfully!..";
        redirect(base_url()."admincontroller/view_hall_data");
    }
    public function view_hall_data(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("metting_halls"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/view_hall_data"),
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
        $data['metting_data']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"metting_halls",'mt_id');
        $this->load->view("admin/view_hall_data",$data);
        $this->footer();
    }
    public function delete_metting_data($mt_id){
        $hall_image=($this->My_model->select_image("metting_halls",['mt_id'=>$mt_id],"hall_image"))[0]['hall_image'];
        unlink("public/upload/hall_image/$hall_image");
        $this->My_model->delete("metting_halls",['mt_id'=>$mt_id]);
        $_SESSION['delete_data']="Data Deleted Successfully";
        redirect(base_url()."admincontroller/view_hall_data");
    }
    public function edit_metting_data($mt_id){
        $data['metting_data']=$this->My_model->select("metting_halls",['mt_id'=>$mt_id]);
        $this->navbar();
        $this->load->view("admin/edit_metting_data",$data);
        $this->footer();
    }
    public function update_hall_info(){
        if($_FILES['hall_image']['name']!=""){
            $hall_image=($this->My_model->select_image("metting_halls",['mt_id'=>$_POST['mt_id']],"hall_image"))[0]['hall_image'];
            unlink("public/upload/hall_image/$hall_image");

            $hall_image=time().rand(1111,9999).$_FILES['hall_image']['name'];
            move_uploaded_file($_FILES['hall_image']['tmp_name'],"public/upload/hall_image/$hall_image");
            $_POST['hall_image']=$hall_image;
            $_POST['book_status']="disabled";
            $_POST['user_id']=0;
            $this->My_model->update_cond("metting_halls",$_POST,['mt_id'=>$_POST['mt_id']]);
            $_SESSION['update_data']="Hall Data Updated Successfully";
            redirect(base_url()."admincontroller/view_hall_data");
        }else{
            $_POST['book_status']="disabled";
            $_POST['user_id']=0;
            $this->My_model->update_cond("metting_halls",$_POST,['mt_id'=>$_POST['mt_id']]);
            $_SESSION['update_data']="Hall data updated successfully";
            redirect(base_url()."admincontroller/view_hall_data");
        }
    }
    public function blog(){
        $this->navbar();
        $this->load->view("admin/blog");
        $this->footer();
    }
    public function save_blog_info(){
        $blog_img=time().rand(1111,9999).$_FILES['blog_img']['name'];
        move_uploaded_file($_FILES['blog_img']['tmp_name'],"public/upload/blog_image/$blog_img");
        $_POST['blog_img']=$blog_img;
        $this->My_model->insert("blog",$_POST);
        $_SESSION['save_data']="Data Save Successfully";
        redirect(base_url()."admincontroller/view_blog_data");
    }
    public function view_blog_data(){
        $this->navbar();
        $data['blog_data']=$this->My_model->select("blog");
        $this->load->view("admin/view_blog_data",$data);
        $this->footer();
    }
    public function delete_blog_data($blog_id){
        $data=($this->My_model->select_image("blog",['blog_id'=>$blog_id],"blog_img"))[0]['blog_img'];
        unlink("public/upload/blog_image/$data");
        $this->My_model->delete("blog",['blog_id'=>$blog_id]);
        $_SESSION['delete_data']="Data Deleted Successfully";
        redirect(base_url()."admincontroller/view_blog_data");
    }
    public function edit_blog_data($blog_id){
        $this->navbar();
        $data['blog_data']=$this->My_model->select("blog",['blog_id'=>$blog_id]);
        $this->load->view("admin/edit_blog_data",$data);
        $this->footer();
    }
    public function update_blog_info(){
        if($_FILES['blog_img']['name']!=""){
            $data=$this->My_model->select_image("blog",['blog_id'=>$_POST['blog_id']],"blog_img");
            unlink("public/upload/blog_image/$data");
            $blog_img=time().rand(1111,9999).$_FILES['blog_img']['name'];
            move_uploaded_file($_FILES['blog_img']['tmp_name'],"public/upload/blog_image/$blog_img");
            $_POST['blog_img']=$blog_img;
            $this->My_model->update_cond("blog",$_POST,['blog_id'=>$_POST['blog_id']]);
            $_SESSION['update_data']="Data updated successfully";
            redirect(base_url()."admincontroller/view_blog_data");
        }else{
            $this->My_model->update_cond("blog",$_POST,['blog_id'=>$_POST['blog_id']]);
            $_SESSION['update_data']="Data updated successfully";
            redirect(base_url()."admincontroller/view_blog_data");
        }

    }
    public function food(){
        $this->navbar();
        $data['cat_data']=$this->My_model->select("category",['cat_status'=>'Active']);
        $this->load->view("admin/food",$data);
        $this->footer();
    }
    public function save_food(){
        $food_image=time().rand(1111,9999).$_FILES['food_image']['name'];
        move_uploaded_file($_FILES['food_image']['tmp_name'],"public/upload/food_image/$food_image");
        $_POST['food_image']=$food_image;
        $this->My_model->insert("food",$_POST);
        $_SESSION['save_data']="Data Save Successfully";
        redirect(base_url()."admincontroller/food_data");
    }
    public function food_data(){
        $this->navbar();
        
        $data['food_data']=$this->My_model->select_food();
        $this->load->view("admin/food_data",$data);
        $this->footer();
    }
    public function delete_food_data($food_id){
        $data=($this->My_model->select_image("food",['food_id'=>$food_id],"food_image"))[0]['food_image'];
        unlink("public/upload/food_image/$data");
        $this->My_model->delete("food",['food_id'=>$food_id]);
        $_SESSION['delete_data']="Data Deleted Successfully";
        redirect(base_url()."admincontroller/food_data");
    }
    public function edit_food_data($food_id){
        $this->navbar();
        $data['cat_data']=$this->My_model->select("category",['category_name'=>"Food"]);
        $data['food_data']=$this->My_model->select_food_data_id($food_id);
        $this->load->view("admin/edit_food_data",$data);
        $this->footer();
    }
    public function update_food(){
        if($_FILES['food_image']['name']!=""){
            $data=($this->My_model->select_image("food",['food_id'=>$_POST['food_id']],"food_image"))[0]['food_image'];
            unlink("public/upload/food_image/$data");
            $food_image=time().rand(1111,9999).$_FILES['food_image']['name'];
            move_uploaded_file($_FILES['food_image']['tmp_name'],"public/upload/food_image/$food_image");
            $_POST['food_image']=$food_image;
            $this->My_model->update_cond("food",$_POST,['food_id'=>$_POST['food_id']]);
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/food_data");
        }else{
            $this->My_model->update_cond("food",$_POST,['food_id'=>$_POST['food_id']]);
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/food_data");
        }
    }
    public function order_food(){
        $this->navbar();
        $data['order_food']=$this->db->query("select * from food,order_food where order_food.food_id=food.food_id order by order_food.order_id desc")->result_array();
        $this->load->view("admin/order_food",$data);
        $this->footer();
    }
    public function cancel_food_order($order_id){
        $this->My_model->update_cond("order_food",['order_status'=>'Canceled'],['order_id'=>$order_id]);
        $_SESSION['update_data']="Order Cancel";
        redirect(base_url()."admincontroller/order_food");
    }
    public function deliver_order($order_id){
        $this->My_model->update_cond("order_food",['order_status'=>'Delivered'],['order_id'=>$order_id]);
        $_SESSION['update_data']="Order Deliver";
        redirect(base_url()."admincontroller/order_food");
    }
    public function dispatched_order($order_id){
        $this->My_model->update_cond("order_food",['order_status'=>'Dispatched'],['order_id'=>$order_id]);
        $_SESSION['update_data']="Order Dispatched";
        redirect(base_url()."admincontroller/order_food");
    }
    public function view_details($order_id){
        $this->navbar();
        $data['order_detail']=$this->db->query("select * from user_data,order_food,food where user_data.user_id=order_food.user_id and food.food_id=order_food.food_id and order_id='$order_id'")->result_array();
        $this->load->view("admin/view_details",$data);
        $this->footer();
    }
    public function team(){
        $this->navbar();
        $this->load->view("admin/team");
        $this->footer();
    }
    public function save_team_data(){
        $member_img=time().rand(1111,9999).$_FILES['member_img']['name'];
        move_uploaded_file($_FILES['member_img']['tmp_name'],"public/upload/team_image/$member_img");
        $_POST['member_img']=$member_img;
        $this->My_model->insert("team",$_POST);
        $_SESSION['data_save']="Data Save Successfully !...";
        redirect(base_url()."admincontroller/view_team_data");
    }
    public function view_team_data(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("team"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/view_team_data"),
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
        $data['team_data']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"team",'team_id');
        // $data['team_data']=$this->My_model->select("team");
        $this->load->view("admin/view_team_data",$data);
        $this->footer();
    }
    public function delete_team_data($team_id){
        $image=($this->My_model->select_image("team",['team_id'=>$team_id],"member_img"))[0]['member_img'];
        unlink("public/upload/team_image/$image");
    
        $this->My_model->delete("team",['team_id'=>$team_id]);
        $_SESSION['delete_data']="Data Deleted Successfully!..";
        redirect(base_url()."admincontroller/view_team_data");
    }
    public function edit_team_data($team_id){
        $this->navbar();
        $data['team_data']=$this->My_model->select("team",['team_id'=>$team_id]);
        $this->load->view("admin/edit_team_data",$data);
        $this->footer();
    }
    public function update_team_data(){
        if($_FILES['member_img']['name']!=""){
            $image=($this->My_model->select_image("team",['team_id'=>$_POST['team_id']],"member_img"))[0]['member_img'];
            unlink("public/upload/team_image/$image");
            $member_img=time().rand(1111,9999).$_FILES['member_img']['name'];
            move_uploaded_file($_FILES['member_img']['tmp_name'],"public/upload/team_image/$member_img");
            $_POST['member_img']=$member_img;
            $this->My_model->update_cond("team",$_POST,['team_id'=>$_POST['team_id']]); 
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/view_team_data");
        }else{
            $this->My_model->update_cond("team",$_POST,['team_id'=>$_POST['team_id']]); 
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/view_team_data");
        }
        
    }
    public function other_rooms(){
        $this->navbar();
        $data['cat_data']=$this->My_model->select("category",['cat_status'=>'Active']);
        $this->load->view("admin/other_rooms",$data);
        $this->footer();
    }
    public function save_ac_room(){
       $room_image=time().rand(1111,9999).$_FILES['room_image']['name'];
       move_uploaded_file($_FILES['room_image']['tmp_name'],"public/upload/rooms_image/$room_image");
       $_POST['room_image']=$room_image;
       $_POST['status']='Active';
       $_POST['order_status']="Active";
       $this->My_model->insert('rooms',$_POST);
       $_SESSION['save_data']="Data Save Successfully!..";
       redirect(base_url()."admincontroller/view_other_room_data");
    }
    public function view_other_room_data(){
        $this->navbar();
        $data['room_data']=$this->db->query("select * from category,sub_category,rooms where category.cat_id=rooms.cat_id and sub_category.sub_cat_id=rooms.sub_cat_id and rooms.room_type!='special_offer_room'")->result_array();
        
        $this->load->view("admin/view_other_room_data",$data);
        $this->footer();
    }
    public function delete_other_rooms_data($room_id){
        $image=($this->My_model->select_image("rooms",['room_id'=>$room_id],'room_image'))[0]['room_image'];
        unlink("public/upload/rooms_image/$image");
        $this->My_model->delete("rooms",['room_id'=>$room_id]);
        $_SESSION['delete_data']="Data Deleted Successfully!...";
        redirect(base_url()."admincontroller/view_other_room_data");
    }
    public function edit_other_rooms_data($room_id){
        $this->navbar();
        $data['cat_data']=$this->My_model->select("category",['cat_status'=>'Active']);
        $data['room_data']=$this->db->query("select * from category,sub_category,rooms where category.cat_id=rooms.cat_id and sub_category.sub_cat_id=rooms.sub_cat_id and rooms.room_id='$room_id'")->result_array();
        $this->load->view("admin/edit_other_rooms_data",$data);
        $this->footer();
    }
    public function update_ac_room(){
        if($_FILES['room_image']['name']!=""){
            $image=($this->My_model->select_image("rooms",['room_id'=>$_POST['room_id']],'room_image'))[0]['room_image'];
            unlink("public/upload/rooms_image/$image");
            $room_image=time().rand(1111,9999).$_FILES['room_image']['name'];
            move_uploaded_file($_FILES['room_image']['tmp_name'],"public/upload/rooms_image/$room_image");
            $_POST['room_image']=$room_image;
            $_POST['status']='Active';
            $_POST['order_status']="Active";
            $this->My_model->update_cond("rooms",$_POST,['room_id'=>$_POST['room_id']]);
            $_SESSION['update_data']="Data updated successfully!..";
            redirect(base_url()."admincontroller/view_other_room_data");
        }else{
            $this->My_model->update_cond("rooms",$_POST,['room_id'=>$_POST['room_id']]);
            $_SESSION['update_data']="Data updated successfully!..";
            redirect(base_url()."admincontroller/view_other_room_data");
        }

    }
    public function gallery(){
        $this->navbar();
        $this->load->view("admin/gallery");
        $this->footer();
    }
    public function save_gallery_info(){
        $gallery_image=time().rand(1111,9999).$_FILES['gallery_image']['name'];
        move_uploaded_file($_FILES['gallery_image']['tmp_name'],"public/upload/gallery_image/$gallery_image");
        $_POST['gallery_image']=$gallery_image;
        $this->My_model->insert("gallery",$_POST);
        $_SESSION['data_save']="Data Save Successfully !...";
        redirect(base_url()."admincontroller/view_gallery_data");
    }
    public function view_gallery_data(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("gallery"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/view_gallery_data"),
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
        $data['gallery_data']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"gallery",'gar_id');
        $this->load->view("admin/view_gallery_data",$data);
        $this->footer();
    }
    public function delete_gallery_data($gar_id){
        $image=($this->My_model->select_image("gallery",['gar_id'=>$gar_id],"gallery_image"))[0]['gallery_image'];
       unlink("public/upload/gallery_image/$image");
       $this->My_model->delete("gallery",['gar_id'=>$gar_id]);
       $_SESSION['delete_data']="Data deleted successfully!..";
       redirect(base_url()."admincontroller/view_gallery_data");
    }
    public function edit_gallery_data($gar_id){
        $data['gallery_data']=$this->My_model->select("gallery",['gar_id'=>$gar_id]);
        $this->navbar();
        $this->load->view("admin/edit_gallery_data",$data);
        $this->footer();
    }
    public function update_gallery_info(){
        $image=($this->My_model->select_image("gallery",['gar_id'=>$_POST['gar_id']],"gallery_image"))[0]['gallery_image'];
        unlink("public/upload/gallery_image/$image");
        $gallery_image=time().rand(1111,9999).$_FILES['gallery_image']['name'];
        move_uploaded_file($_FILES['gallery_image']['tmp_name'],"public/upload/gallery_image/$gallery_image");
        $_POST['gallery_image']=$gallery_image;
        $this->My_model->update_cond("gallery",$_POST,['gar_id'=>$_POST['gar_id']]);
        $_SESSION['update_data']="Data updated successfully!...";
        redirect(base_url()."admincontroller/view_gallery_data");
    }
    public function gallery_video(){
        $this->navbar();
        $this->load->view("admin/gallery_video");
        $this->footer();
    }
    public function save_gallery_video_info(){
        $gar_image=time().rand(1111,9999).$_FILES['gar_image']['name'];
        move_uploaded_file($_FILES['gar_image']['tmp_name'],"public/upload/gallery_image/$gar_image");
        $_POST['gar_image']=$gar_image;
        $this->My_model->insert("gallery_video",$_POST);
        $_SESSION['save_data']="Data Save Successfully !..";
        redirect(base_url()."admincontroller/view_gallery_video");
    }
    public function view_gallery_video(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("gallery_video"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/view_gallery_video"),
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
        $data['gallery_video']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"gallery_video",'gar_id');
        $this->load->view("admin/view_gallery_video",$data);
        $this->footer();
    }
    public function delete_video_gallery_data($gar_id){
        $image=($this->My_model->select_image("gallery_video",['gar_id'=>$gar_id],"gar_image"))[0]['gar_image'];
       unlink("public/upload/gallery_image/$image");
       $this->My_model->delete("gallery_video",['gar_id'=>$gar_id]);
       $_SESSION['delete_data']="Data deleted successfully!..";
       redirect(base_url()."admincontroller/view_gallery_video");
    }
    public function edit_video_gallery_data($gar_id){
        $this->navbar();
        $data['gallery_data']=$this->My_model->select("gallery_video",['gar_id'=>$gar_id]);
        $this->load->view("admin/edit_video_gallery_data",$data);
        $this->footer();
    }
    public function update_gallery_video_info(){
        if($_FILES['gar_image']['name']!=""){
            $image=($this->My_model->select_image("gallery_video",['gar_id'=>$_POST['gar_id']],"gar_image"))[0]['gar_image'];
            unlink("public/upload/gallery_image/$image");
            $gar_image=time().rand(1111,9999).$_FILES['gar_image']['name'];
            move_uploaded_file($_FILES['gar_image']['tmp_name'],"public/upload/gallery_image/$gar_image");
            $_POST['gar_image']=$gar_image;
            $this->My_model->update_cond("gallery_video",$_POST,['gar_id'=>$_POST['gar_id']]);
           $_SESSION['update_data']="Data updated successfully !..";
           redirect(base_url()."admincontroller/view_gallery_video");
        }else{
            $this->My_model->update_cond("gallery_video",$_POST,['gar_id'=>$_POST['gar_id']]);
            $_SESSION['update_data']="Data updated successfully !..";
            redirect(base_url()."admincontroller/view_gallery_video");
         
        }
    }
    public function users(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("user_data"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/users"),
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
        $data['users_info']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"user_data",'user_id');
        $this->load->view("admin/users",$data);
        $this->footer();
    }
    public function visitor_info(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("contact_info"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/visitor_info"),
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
        $data['contact_info']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"contact_info",'cont_id');
        $this->load->view("admin/visitor_info",$data);
        $this->footer();
    }
    public function room_book_details(){
        $this->navbar();
        $data['room_book']=$this->db->query("select * from rooms,room_book where rooms.room_id=room_book.room_id")->result_array();
        $this->load->view("admin/room_book_details",$data);
        $this->footer();
    }
    public function view_room_order_details($room_id){
        $this->navbar();
        $data['order_details']=$this->db->query("select * from rooms,room_book,user_data where rooms.room_id=room_book.room_id and room_book.user_id=user_data.user_id")->result_array();
       
        $this->load->view("admin/view_room_order_details",$data);
        $this->footer();
    }
    public function update_booking_status($order_id){
        $this->My_model->update_cond("room_book",['order_status'=>"Confirm"],['book_id'=>$order_id]);
        $_SESSION['update_data']="Booking Confirm Successfully !..";
        redirect(base_url()."admincontroller/room_book_details");
    }
    public function cancel_booking($order_id){
        $this->My_model->update_cond("room_book",['order_status'=>"Cancel"],['book_id'=>$order_id]);
        $_SESSION['update_data']="Booking Cancel Successfully !..";
        redirect(base_url()."admincontroller/room_book_details");
    }
    public function book_hall(){
        $this->navbar();
        $data['hall_details']=$this->db->query("select * from metting_halls,book_hall where book_hall.mt_id=metting_halls.mt_id")->result_array();
        $this->load->view("admin/book_hall",$data);
        $this->footer();
    }
    public function confirm_hall($book_id){
        $data['book_det']=$this->db->query("select * from book_hall")->result_array();
        $this->My_model->update_cond("book_hall",['order_status'=>"Confirm"],['book_id'=>$book_id]);
        $_SESSION['update_data']="Booking Confirm Successfully !..";
        redirect(base_url()."admincontroller/book_hall");
    }
    public function cancel_hall($book_id){
        $data['book_det']=$this->db->query("select * from book_hall")->result_array();
        $this->My_model->update_cond("book_hall",['order_status'=>"Cancel"],['book_id'=>$book_id]);
        $_SESSION['update_data']="Booking Cancel Successfully !..";
        redirect(base_url()."admincontroller/book_hall");
    }
    public function view_hall_order_details($mt_id){
        $data['hall_details']=$this->db->query("select * from book_hall,metting_halls where book_hall.mt_id=metting_halls.mt_id and book_hall.mt_id=$mt_id")->result_array();
        $this->navbar();
        $this->load->view("admin/view_hall_order_details",$data);
        $this->footer();

    }
    public function admin_data(){
        $this->navbar();
        $this->load->view("admin/admin_data");
        $this->footer();
    }
    public function save_admin_info(){
        $admin_image=time().rand(1111,9999).$_FILES['admin_image']['name'];
        move_uploaded_file($_FILES['admin_image']['tmp_name'],"public/upload/admin_image/$admin_image");
        $_POST['admin_image']=$admin_image;
        $admin_password=hash('sha256',$_POST['admin_pass']);
        $_POST['admin_pass']=$admin_password;
        $this->My_model->insert("admin_data",$_POST);
        $_SESSION['save_data']="Data Save Successfully !...";
        redirect(base_url()."admincontroller/view_admin_data");
        
    }
    public function view_admin_data(){
        $this->navbar();
        $num_records=($this->My_model->num_rows("admin_data"))[0]['total_rows'];
        $config=[
            'base_url'=>base_url("admincontroller/view_admin_data"),
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
        $data['admin_data']=$this->My_model->all($config['per_page'],$this->uri->segment(3),"admin_data",'admin_id');
        // $data['admin_data']=$this->My_model->select("admin_data");
        $this->load->view("admin/view_admin_data",$data);
        $this->footer();
    }
    public function delete_admin_data($admin_id){
        $image=($this->My_model->select("admin_data",['admin_id'=>$admin_id],"admin_image"))[0]['admin_image'];
        unlink("public/upload/admin_image/$image");
        $this->My_model->delete("admin_data",['admin_id'=>$admin_id]);
        $_SESSION['delete_data']="Data Deleted Successfully !...";
        redirect(base_url()."admincontroller/view_admin_data");
    }
    public function edit_admin_data($admin_id){
        $this->navbar();
        $data['admin_data']=$this->My_model->select("admin_data",['admin_id'=>$admin_id]);
        $this->load->view("admin/edit_admin_data",$data);
        $this->footer();
    }
    public function update_admin_info(){
        if($_FILES['admin_image']['name']!=""){
            $image=($this->My_model->select("admin_data",['admin_id'=>$_POST['admin_id']],"admin_image"))[0]['admin_image'];
            unlink("public/upload/admin_image/$image");

            $admin_image=time().rand(1111,9999).$_FILES['admin_image']['name'];
            move_uploaded_file($_FILES['admin_image']['tmp_name'],"public/upload/admin_image/$admin_image");
            $_POST['admin_image']=$admin_image;
            $this->My_model->update_cond("admin_data",$_POST,['admin_id'=>$_POST['admin_id']]);
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/view_admin_data");
        }else{
            $this->My_model->update_cond("admin_data",$_POST,['admin_id'=>$_POST['admin_id']]);
            $_SESSION['update_data']="Data Updated Successfully";
            redirect(base_url()."admincontroller/view_admin_data");
        }
    }
    public function view_profile(){
        $this->navbar();
        $this->load->view("admin/view_profile");
        $this->footer();
    }
    public function logout_user(){
       if(isset($_SESSION['admin_id'])){
        $image=($this->My_model->select_image("admin_data",['admin_id'=>$_SESSION['admin_id']],"admin_image"))[0]['admin_image'];
        unlink("public/upload/admin_image/$image");
        $this->My_model->delete("admin_data",['admin_id'=>$_SESSION['admin_id']]);
        unset($_SESSION['admin_id']);
        redirect(base_url()."adminlogincontroller/");
       }
    }
}
?>

