<?php
class AdminLoginController extends CI_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if(isset($_SESSION['admin_id'])){
            redirect(base_url()."admincontroller/");
            exit();
        }
    }
    public function index(){
        $this->load->view("login/index");
    }
    public function checkadminlogin(){

        if(isset($_POST['user_email']) && isset($_POST['user_pass'])){
            $user_pass=hash("sha256",$_POST['user_pass']);
    
            $admin_data=$this->My_model->select("admin_data",['admin_email'=>$_POST['user_email'],"admin_pass"=>$user_pass]);
           if(count($admin_data)>0){
            $_SESSION['admin_id']=$admin_data[0]['admin_id'];
            redirect(base_url()."admincontroller/");
           }else{
            $_SESSION['invalid_login']="Login Invalid Please Enter Valid Details";
            redirect(base_url()."adminlogincontroller/");
           }
        }else{
            $_SESSION['invalid_login']="Enter Useremail and password";
            redirect(base_url()."adminlogincontroller/");
        }
      
    }
}
?>