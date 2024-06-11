<?php
class UserController extends CI_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
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
            $user_id=$_SESSION['user_id'];
            $data['user_data']=$this->My_model->select("user_data",['user_id'=>$_SESSION['user_id']]);
            $data['cart_data']=$this->My_model->select("add_to_cart",['user_id'=>$_SESSION['user_id']]);   
            $data['room_order_count']=$this->db->query("select count(*) as total from room_book where user_id=$user_id and order_status='Active'")->result_array();
            $data['food_order_count']=$this->db->query("select count(*) as total from order_food where user_id=$user_id and order_status='Active'")->result_array();
            if(count($data['room_order_count'])<=0){
                $data['room_order_count']=0;
            }
            if(count($data['food_order_count'])<=0){
                $data['food_order_count']=0;
            }
            
            $data['total']=$data['room_order_count'][0]['total']+$data['food_order_count'][0]['total'];
            
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
        $data['blog_data']=$this->My_model->select("blog");
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
        $data['food_data']=$this->My_model->select_food();
        $data['team']=$this->My_model->select("team");
        $this->load->view("user/about",$data);
        $this->footer();
    }
    public function rooms_suits(){
        $this->navbar();
        $data['offer_rooms_data']=$this->My_model->select_special_room();
        $data['ac_rooms']=$this->db->query("select * from category,sub_category,rooms where category.cat_id=rooms.cat_id and sub_category.sub_cat_id=rooms.sub_cat_id and rooms.room_type='Ac Rooms'")->result_array();
        $data['non_ac_rooms']=$this->db->query("select * from category,sub_category,rooms where category.cat_id=rooms.cat_id and sub_category.sub_cat_id=rooms.sub_cat_id and rooms.room_type='Non Ac Rooms'")->result_array();
        $data['other_room']=$this->db->query("select * from category,sub_category,rooms where category.cat_id=rooms.cat_id and sub_category.sub_cat_id=rooms.sub_cat_id")->result_array();
        $data['extra_service']=$this->My_model->select("extra_service");
        $data['extra_service_slider']=$this->My_model->select("extra_service_slider");
        $this->load->view("user/rooms_suits",$data);
        $this->footer();
    }
    public function foods(){
        $this->navbar();
        $data['food_spe']=$this->db->query("select * from category,sub_category,food where category.cat_id=food.cat_id and sub_category.sub_cat_id=food.sub_cat_id and sub_category.sub_cat_name='Maharashtrian'")->result_array();
        $data['wine_spe']=$this->db->query("select * from category,sub_category,food where category.cat_id=food.cat_id and sub_category.sub_cat_id=food.sub_cat_id and sub_category.sub_cat_name='Wines'")->result_array();
        $data['food']=$this->My_model->select("food");
        if(isset($_SESSION['user_id'])){
            $data['add_to_cart']=$this->My_model->select("add_to_cart",['product_name'=>'food','user_id'=>$_SESSION['user_id']]);
        }
        $this->load->view("user/foods",$data);
        $this->footer();
    }
    public function contact(){
        $this->navbar();
        $this->load->view("user/contact");
        $this->footer();
    }
    public function services(){
        $this->navbar();
        $data['service']=$this->My_model->select("extra_service_slider");
        $this->load->view("user/services",$data);
        $this->footer();
    }
    public function gallery(){
        $this->navbar();
        $this->load->view("user/gallery");
        $this->footer();
    }
    public function team(){
        $this->navbar();
        $data['test_data']=$this->My_model->select("testimonial");
        $data['test_back_image']=$this->My_model->select("test_back_image");
        $data['team']=$this->My_model->select("team");
        $this->load->view("user/team",$data);
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
        $data['product_name']='special_room';
        $this->My_model->insert("add_to_cart",$data);
        $_SESSION['login_success']="Product Added Into Cart Successfully ...";
        redirect(base_url()."usercontroller/");
        
    }
    public function add_to_cart_food($room_id){
        if(isset($_SESSION['user_id'])){
            $data['user_id']=$_SESSION['user_id'];
        }
        $data['product_id']=$room_id;
        $data['qty']=1;
        $data['status']='Active';
        $data['product_name']='food';
        $this->My_model->insert("add_to_cart",$data);
        $_SESSION['login_success']="Product Added Into Cart Successfully ...";
        redirect(base_url()."usercontroller/");
        
    }
    public function remove_product_form_cart($product_id){
        if(isset($_SESSION['user_id'])){
            $this->My_model->delete("add_to_cart",['product_id'=>$product_id,'user_id'=>$_SESSION['user_id'],'product_name'=>'special_room']);
            $_SESSION['login_success']="Product remove form cart successfully!..";
            redirect(base_url()."usercontroller/");
        }
    }
    public function remove_product_form_cart_food($product_id){
        if(isset($_SESSION['user_id'])){
            $this->My_model->delete("add_to_cart",['product_id'=>$product_id,'user_id'=>$_SESSION['user_id'],'product_name'=>'food']);
            $_SESSION['login_success']="Product remove form cart successfully!..";
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
    public function view_food_details($food_id){
        $this->navbar();
        $data['food_data']=$this->My_model->select_food_data_id($food_id);
        if(isset($_SESSION['user_id'])){
            $data['cart_data']=$this->My_model->select("add_to_cart",['product_id'=>$food_id]);
            // echo "<pre>";
            // print_r($data['cart_data']);
            // exit();
        }
        $this->load->view("user/view_food_details",$data);
        $this->footer();
    }
    public function cart_page(){
        $this->navbar();
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $data['room_cart_data']=$this->db->query("select * from rooms,add_to_cart where rooms.room_id=add_to_cart.product_id and add_to_cart.product_name='special_room' and user_id='$user_id'")->result_array();
            $data['food_cart_data']=$this->db->query("select * from food,add_to_cart where food.food_id=add_to_cart.product_id and product_name='food' and user_id='$user_id'")->result_array();
             $this->load->view("user/cart_page",$data);
            }else{
            $this->load->view("user/cart_page");
            }
        $this->footer();
    }
    public function book_room($room_id){
        $this->navbar();
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $data['room_cart_data']=$this->db->query("select * from rooms,add_to_cart where rooms.room_id=add_to_cart.product_id and add_to_cart.product_name='special_room' and user_id='$user_id' and rooms.room_id='$room_id'")->result_array();
            $this->load->view("user/book_room",$data);
        }
        $this->footer();
    }
    public function booked(){
        $_POST['user_id']=$_SESSION['user_id'];
        $_POST['order_status']='Active';
        $_SESSION['login_success']='Room book Successfully..';
        $_POST['book_date ']=date('Y-m-d H:iA');
        $this->My_model->insert("room_book",$_POST);
        $this->My_model->delete("add_to_cart",['user_id'=>$_SESSION['user_id'],'product_id'=>$_POST['room_id']]);
        redirect(base_url()."usercontroller/order_page");
    }
    public function order_page(){
        $this->navbar();
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $data['order_room']=$this->db->query("select * from rooms,room_book where rooms.room_id=room_book.room_id and room_book.user_id=$user_id")->result_array();
            $data['food_order']=$this->db->query("select * from food,order_food where food.food_id=order_food.food_id and user_id='$user_id'")->result_array();
            $this->load->view("user/order_page",$data);
        }else{
            $this->load->view("user/order_page");
        }
        $this->footer();
    }
    public function cancel_order($room_id){
        $this->My_model->delete("room_book",['room_id'=>$room_id,'user_id'=>$_SESSION['user_id']]);
        $_SESSION['login_success']="Your Order Cancel Sucessfully..";
        redirect(base_url()."usercontroller/");
    }
    public function increase_cart_qty($food_id){
        if(isset($_SESSION['user_id'])){
            $data=$this->My_model->select("add_to_cart",['user_id'=>$_SESSION['user_id'],'product_name'=>'food','product_id'=>$food_id]);
            $newqty=$data[0]['qty']+1;
            $this->My_model->update_cond("add_to_cart",['qty'=>$newqty],['user_id'=>$_SESSION['user_id'],'product_name'=>'food','product_id'=>$food_id]);
            echo json_encode($newqty);
        }else{
            echo json_encode(['status'=>"failed",'msg'=>'invalid login']);
        }
       
    }
    public function decrease_cart_qty($food_id){
        if(isset($_SESSION['user_id'])){
            $data=$this->My_model->select("add_to_cart",['user_id'=>$_SESSION['user_id'],'product_name'=>'food','product_id'=>$food_id]);
            $newqty=$data[0]['qty']-1;
            if($newqty>=1){
                $this->My_model->update_cond("add_to_cart",['qty'=>$newqty],['user_id'=>$_SESSION['user_id'],'product_name'=>'food','product_id'=>$food_id]);
            }
            echo json_encode($newqty);
        }else{
            echo json_encode(['status'=>"failed",'msg'=>'invalid login']);
        }
    }
    public function cal_total($food_id){
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $data=$this->db->query("select * from food,add_to_cart where food.food_id=add_to_cart.product_id  and add_to_cart.product_name='food' and add_to_cart.product_id='$food_id' and add_to_cart.user_id='$user_id'")->result_array();
            echo json_encode($data[0]['qty']*$data[0]['food_price']);
        }else{
            echo json_encode(['status'=>'invalid','msg'=>'login fail']);
        }
    }
    public function confirm_address(){
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $data=$this->db->query("select sum(qty*food_price) as total from food,add_to_cart where food.food_id=add_to_cart.product_id  and add_to_cart.product_name='food' and add_to_cart.user_id='$user_id'")->result_array();
            $result['total']=$data[0]['total'];
            // echo "<pre>";
            // print_r($result['total']);
            // exit();
            $this->load->view("user/confirm_address",$result);

        }else{
            $this->load->view("user/confirm_address");
        }
    }
    public function save_address(){
       if(isset($_SESSION['user_id'])){
        $_POST['user_id']=$_SESSION['user_id'];
        $this->My_model->insert("user_order_address",$_POST);
        $data['cart_data']=$this->My_model->select("add_to_cart",['user_id'=>$_SESSION['user_id'],'product_name'=>'food']);
        
        if(count($data['cart_data'])>0){
            foreach($data['cart_data'] as $key=>$row){
                $result[$key]['food_id']=$row['product_id'];
                $result[$key]['user_id']=$_SESSION['user_id'];
                $result[$key]['order_date']=date('Y-m-d H:iA');
                $result[$key]['order_status']="Active";
                $result[$key]['order_qty']=$row['qty'];
            }
        }
       }
       foreach($result as $key=>$row){
        $this->My_model->insert("order_food",$row);
       }
       if(count($data['cart_data'])>0){
        foreach($data['cart_data'] as $key=>$row){
            $this->My_model->delete("add_to_cart",$row);
        }
       }
       redirect(base_url()."usercontroller/order_confirm");
       
    }
    public function order_confirm(){
        $this->load->view("user/order_confirm");
    }
    public function cancel_food_order($order_id){
        $this->My_model->update_cond("order_food",['order_status'=>'Disabled'],['order_id'=>$order_id]);
        $_SESSION['login_success']="Order Cancel Successfully!..";
        redirect(base_url()."usercontroller/order_page");
    }
    
    
}
?>