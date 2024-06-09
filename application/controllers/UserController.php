<?php
class UserController extends CI_Controller{
    public function check_user_login(){
        $cond=['user_email'=>$_POST['user_email'],'user_password'=>$_POST['user_password']];
        $data=$this->My_model->select("user_data",$cond);
        if(count($data)>0){
            $_SESSION['user_id']=$data[0]['user_id'];
            $_SESSION['login_success']=$data[0]['user_name']." login success";
            redirect(base_url()."usercontroller/");

        }else{
            $_SESSION['login_fail']="Login Fail Enter Valid Record";
            redirect(base_url()."usercontroller/userprofile");
        }
    }
    public function logout_account($user_id){
        $this->My_model->delete("user_data",['user_id'=>$user_id]);
        unset( $_SESSION['user_id']);
        $_SESSION['login_success']="You Logo Out From Your Account";
        redirect(base_url()."usercontroller/");
    }
    private function navbar(){
        if(isset( $_SESSION['user_id'])){
            $data['user_data']=$this->My_model->select("user_data",['user_id'=>$_SESSION['user_id']]);   
        }
        $data['basic_info']=$this->My_model->select("basic_info");
        $this->load->view("user/navbar",$data);
    }
    private function footer(){
        $this->load->view("user/footer");
    }
    public function index(){
        $this->navbar();
        $data['slider_info']=$this->My_model->select("slider");
        $data['about_info']=$this->My_model->select("about");
        $data['offer_rooms_data']=$this->My_model->select_special_room();
        $data['extra_service']=$this->My_model->select("extra_service");
        $data['extra_service_slider']=$this->My_model->select("extra_service_slider");
        $data['pro_data']=$this->My_model->select("promotional_video");
        $data['fac_data']=$this->My_model->select("hotel_facility");
        $data['test_data']=$this->My_model->select("testimonial");
        $data['test_back_image']=$this->My_model->select("test_back_image");
        $data['metting_hall']=$this->My_model->select("metting_halls");
        if(isset($_SESSION['user_id'])){
            $data['add_to_cart_data']=$this->My_model->select("add_to_cart",['user_id'=>$_SESSION['user_id']]);
        }
        $this->load->view("user/index",$data);
        $this->footer();
    }
    public function about(){
        $this->navbar();
        $data['about_info']=$this->My_model->select("about");
        $data['extra_service']=$this->My_model->select("extra_service");
        $data['extra_service_slider']=$this->My_model->select("extra_service_slider");
        $data['metting_hall']=$this->My_model->select("metting_halls");
        $data['test_data']=$this->My_model->select("testimonial");
        $data['test_back_image']=$this->My_model->select("test_back_image");
        $this->load->view("user/about",$data);
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
    public function rooms_details($room_id){
        $this->navbar();
        if(isset($_SESSION['user_id'])){
            $data['add_to_cart_data']=$this->My_model->select("add_to_cart",['product_id'=>$room_id,'user_id'=>$_SESSION['user_id']]);
        }
        $data['room_details']=$this->My_model-> select_special_room_with_id($room_id);
        $data['special_rooms']=$this->My_model->select_special_room();
        $this->load->view("user/rooms_details",$data);
        $this->footer();
    }
    public function registration(){
        $this->navbar();
        $this->load->view("user/registration");
        $this->footer();
    }
    public function save_user_data(){
        if($_FILES['user_image']['name']!=null){
            $imagename=time().rand(1111,9999).$_FILES['user_image']['name'];
            move_uploaded_file($_FILES['user_image']['tmp_name'],"public/upload/user_image/$imagename");
            $_POST['user_image']=$imagename;
            $this->My_model->insert("user_data",$_POST);
            $_SESSION['save_user_data']="Account Created Successfully";
            redirect(base_url()."usercontroller/userprofile");
        }else{
            $this->My_model->insert("user_data",$_POST);
            $_SESSION['save_user_data']="Account Created Successfully";
            redirect(base_url()."usercontroller/userprofile");

        }
    }
    public function view_profile($user_id){
        $this->navbar();
        if(isset($_SESSION['user_id'])){
            $data['user_info']=$this->My_model->select("user_data",['user_id'=>$_SESSION['user_id']]);
            $this->load->view("user/view_profile",$data);
        }
        $this->footer();
    }
    public function page_not_found(){
        $this->navbar();
        $this->load->view("user/page_not_found");
        $this->footer();
    }
    public function add_to_cart($room_id){
        if(isset($_SESSION['user_id'])){
            $data['user_id']=$_SESSION['user_id'];
        }
        $data['product_id']=$room_id;
        $data['qty']=1;
        $data['status']='Active';
        $this->My_model->insert("add_to_cart",$data);
        $_SESSION['login_success']="Product Added Into Cart Successfully ...";
        redirect(base_url()."usercontroller/");
        
    }
    public function remove_product_form_cart($product_id){
        if(isset($_SESSION['user_id'])){
            $this->My_model->delete("add_to_cart",['product_id'=>$product_id,'user_id'=>$_SESSION['user_id']]);
            redirect(base_url()."usercontroller/");
        }
    }
    public function metting_hall_details($mt_id){
        $this->navbar();
        $data['hall_details']=$this->My_model->select("metting_halls",['mt_id'=>$mt_id]);
        $data['metting_hall']=$this->My_model->select("metting_halls");
        $this->load->view("user/metting_hall_details",$data);
        $this->footer();

    }
    public function book_now($mt_id){
        $this->navbar();
        $data['hall_data']=$this->My_model->select("metting_halls",['mt_id'=>$mt_id]);
        $this->load->view("user/book_now",$data);
        $this->footer();
    }
    public function book_hall_data(){
        $config=[
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.gmail.com',
            'smtp_timeout'=>30,
            'smpt_port'=>465,
            'smtp_user'=>'khushaboosonawane202@gmail.com',
            'smtp_pass'=>"8446054113",
            'charset'=>'utf-8',
            'mailtype'=>'html',
            'newline'=>'\r\n'
        ];
        $this->email->initialize($config);
        $this->email->from('khushaboosonawane202@gmail.com', 'Khushaboo Sonawane');
        $this->email->to('v.sonawane8975@gmail.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        if($this->email->send()){
            echo "mai send";
        }else{
            print_r($this->email->print_debugger());
        }
    }
    
    
}
?>