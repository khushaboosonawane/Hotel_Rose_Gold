<?php
defined("BASEPATH") or exit("no direct script is allowed");
require APPPATH."views/razorpay/vendor/razorpay/razorpay/Razorpay.php";
require APPPATH.'views/mail/vendor/autoload.php';
use Razorpay\Api\Api;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class UserController extends CI_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $mail = new PHPMailer(true);
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
        $data['food_spe']=$this->db->query("select * from category,sub_category,food where category.cat_id=food.cat_id and sub_category.sub_cat_id=food.sub_cat_id and sub_category.sub_cat_name='Maharashtrian'")->result_array();
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
        $data['gallery']=$this->My_model->select("gallery");
        $data["two_image"]=$this->db->query("select * from gallery order by gar_id desc limit 2")->result_array();
        $data['gallery_video']=$this->My_model->select("gallery_video");
        $this->load->view("user/gallery",$data);
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
            $_POST['login_date']=date('Y-m-d H:iA');
            $this->My_model->insert("user_data",$_POST);
            $_SESSION['login_success']="Account Created Successfully";
            redirect(base_url()."usercontroller/userprofile");
        }else{
            $_POST['login_date']=date('Y-m-d H:iA');
            $this->My_model->insert("user_data",$_POST);
            $_SESSION['login_success']="Account Created Successfully";
            redirect(base_url()."usercontroller/userprofile");

        }
    }
    public function view_profile($user_id){
        $this->navbar();
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $data['user_info']=$this->My_model->select("user_data",['user_id'=>$_SESSION['user_id']]);
            $data['order_food']=$this->db->query("select * from order_food,food where order_food.food_id=food.food_id and order_food.user_id='$user_id'")->result_array();
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
        $data['hall_book_status']=$this->db->query("select * from book_hall,metting_halls where book_hall.mt_id=metting_halls.mt_id and book_hall.mt_id='$mt_id'")->result_array();
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
        if(isset($_SESSION['user_id'])){
            $_POST['user_id']=$_SESSION['user_id'];
        }
        $_POST['status']="Active";
        $_POST['order_status']="Active";
        $_POST['order_date']=date('Y-m-d H:iA');
        $this->My_model->insert("book_hall",$_POST);
        $_SESSION['login_success']="Hall Book Successfully";
        redirect(base_url()."usercontroller/");
    }
    public function checkoutHall(){
        $basic_info=$this->My_model->select("basic_info");
        $key="rzp_test_hzb65wV2pSukU2";
        $secret="7EMFkUDHs4ppm1bfqMvqXinP";
        $price= $_POST['hall_price'] * 100;
        $api = new Api($key, $secret);
        $order=$api->order->create(
            array('receipt' => '123',
             'amount' => $price,
              'currency' => 'INR', 
              'notes'=> array('key1'=> 'value3','key2'=> 'value2')
            ));
            $_SESSION['hall_data']=$_POST;
            
            $this->load->view("user/razorpay_hall_checkpayout",['customerdata'=>$_POST,"order"=>$order,"key"=>$key,"secret"=>$secret,"basic_info"=>$basic_info]);
            
       
    }
    
 public function paymenthallstatus(){
        $key="rzp_test_hzb65wV2pSukU2";
        $secret="7EMFkUDHs4ppm1bfqMvqXinP";
        $razorpay_payment_id=$_POST['razorpay_payment_id'];
        $razorpay_order_id=$_POST['razorpay_order_id']; 
        $razorpay_signature=$_POST['razorpay_signature'];
        $data=$razorpay_order_id . "|" . $razorpay_payment_id;
        $generated_signature = hash_hmac("sha256",$data,$secret);


        if ($generated_signature == $razorpay_signature) {
            
            $mail = new PHPMailer(true);
            if(isset($_SESSION['user_id'])){
                $hall_data['user_id']=$_SESSION['user_id'];
            }
            $hall_data['status']="Active";
            $hall_data['order_status']="Active";
            $hall_data['order_date']=date('Y-m-d H:iA');
            $hall_data['user_name']=$_SESSION['hall_data']['user_name'];
            $hall_data['user_mobile']=$_SESSION['hall_data']['user_mobile'];
            $hall_data['user_email']=$_SESSION['hall_data']['user_email'];
            $hall_data['purpose_book']=$_SESSION['hall_data']['purpose_book'];
            $hall_data['check_in_date']=$_SESSION['hall_data']['check_in_date'];
            $hall_data['check_out_date']=$_SESSION['hall_data']['check_out_date'];
            $hall_data['hall_name']=$_SESSION['hall_data']['hall_name'];
            $hall_data['hall_price']=$_SESSION['hall_data']['hall_price'];
            $hall_data['mt_id']=$_SESSION['hall_data']['mt_id'];
            $hall_data['razor_order_id ']=$razorpay_order_id;
            $this->My_model->insert("book_hall",$hall_data);
            $_SESSION['login_success']="Hall Book Successfully";

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'sokhushaboo202@gmail.com';                     //SMTP username
                $mail->Password   = 'dhhbcaqljukamhsj';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('sokhushaboo202@gmail.com', 'khushaboo sonawane');
                $mail->addAddress($_SESSION['hall_data']['user_email'], $_SESSION['hall_data']['user_name']);
                
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Hall Booking';
                $mail->Body    = "
                                <h1>Your Booking Confirmation Will Be Inform You On Your Registered Email Within 24 Hour</h1>
                                <h2>Thanku For Your Booking</h2>

                                
                ";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                $status=$mail->send();
                if($status){
                    unset($_SESSION['hall_data']);
                    redirect(base_url()."usercontroller/payment_successfull");  
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            } 
        }else{
            redirect(base_url()."usercontroller/payment_failed");
        }

    }
    public function view_food_details($food_id){
        $this->navbar();
        $data['food_data']=$this->My_model->select_food_data_id($food_id);
        if(isset($_SESSION['user_id'])){
            $data['cart_data']=$this->My_model->select("add_to_cart",['product_id'=>$food_id]);
        }
        $this->load->view("user/view_food_details",$data);
        $this->footer();
    }
    public function cart_page(){
        $this->navbar();
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $data['room_cart_data']=$this->db->query("select * from rooms,add_to_cart where rooms.room_id=add_to_cart.product_id and add_to_cart.product_name='special_room' and add_to_cart.user_id='$user_id'")->result_array();
            $data['food_cart_data']=$this->db->query("select * from food,add_to_cart where food.food_id=add_to_cart.product_id and add_to_cart.product_name='food' and add_to_cart.user_id='$user_id'")->result_array();
             $this->load->view("user/cart_page",$data);
            }else{
            $this->load->view("user/cart_page");
            }
        $this->footer();
    }
    public function remove_room_from_cart($cart_id){
        $this->My_model->delete("add_to_cart",['cart_id'=>$cart_id]);
        $_SESSION['login_success']="Room Is Remove From Add To Cart";
        redirect(base_url()."usercontroller/cart_page");
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
    public function checkout(){
        $basic_info=$this->My_model->select("basic_info");
        $key="rzp_test_hzb65wV2pSukU2";
        $secret="7EMFkUDHs4ppm1bfqMvqXinP";
        $price= $_POST['room_price'] * 100;
        $api = new Api($key, $secret);
        $order=$api->order->create(
            array('receipt' => '123',
             'amount' => $price,
              'currency' => 'INR', 
              'notes'=> array('key1'=> 'value3','key2'=> 'value2')
            ));
            $_SESSION['customer_data']=$_POST;
            
            $this->load->view("user/razorpay_checkpayout",['customerdata'=>$_POST,"order"=>$order,"key"=>$key,"secret"=>$secret,"basic_info"=>$basic_info]);
            
       
    }
    public function paymentstatus(){
        $key="rzp_test_hzb65wV2pSukU2";
        $secret="7EMFkUDHs4ppm1bfqMvqXinP";
        $razorpay_payment_id=$_POST['razorpay_payment_id'];
        $razorpay_order_id=$_POST['razorpay_order_id']; 
        $razorpay_signature=$_POST['razorpay_signature'];
        $data=$razorpay_order_id . "|" . $razorpay_payment_id;
        $generated_signature = hash_hmac("sha256",$data,$secret);


        if ($generated_signature == $razorpay_signature) {
            $data=[
                'user_name'=>$_SESSION['customer_data']['user_name'],
                'user_mobile'=>$_SESSION['customer_data']['user_mobile'],
                'user_email'=>$_SESSION['customer_data']['user_email'],
                'room_id'=>$_SESSION['customer_data']['room_id'],
                'user_id'=>$_SESSION['user_id'],
                "order_status"=>"Active",
                "book_date"=>date('Y-m-d H:iA'),
                "room_price"=>$_SESSION['customer_data']['room_price'],
                "user_checkin_date"=>$_SESSION['customer_data']['user_checkin_date'],
                "user_checkout_date"=>$_SESSION['customer_data']['user_checkout_date'],
                "order_id"=>$razorpay_order_id
                ];

                // Date insert into book room table 

                $this->My_model->insert("room_book",$data);
               
                // data deleted from add to cart 
                $user_id=$_SESSION['user_id'];
                $product_id=$_SESSION['customer_data']['room_id'];
                $product_name=$_SESSION['customer_data']['product_name'];
                $this->db->query("delete from add_to_cart where user_id='$user_id' and product_id='$product_id' and product_name='$product_name'");
                $room_booking_details=$this->db->query("select * from rooms,room_book where rooms.room_id='$product_id' and room_book.room_id='$product_id' and user_id='$user_id'")->result_array();
                // send mail 
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'sokhushaboo202@gmail.com';                     //SMTP username
                $mail->Password   = 'dhhbcaqljukamhsj';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('sokhushaboo202@gmail.com', 'khushaboo sonawane');
                $mail->addAddress($_SESSION['customer_data']['user_email'], $_SESSION['customer_data']['user_name']);
                $room_name=$room_booking_details[0]['room_name'];
                $room_image=$room_booking_details[0]['room_image'];
        
                $room_desc=$room_booking_details[0]['room_desc'];
                $room_price=$room_booking_details[0]['room_price'];
                $room_order_id=$room_booking_details[0]['order_id'];
                // <img src='../public/upload/rooms_image/$room_image' alt='img not found' style='height:100%;width:100%;object-fit:cover'>
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Room Booking';
                $mail->Body    = "
                                
                                <h1 style='color:blue;'>$room_name<h1>
                                <h5>Your Room Id= <span style='color:red'>$room_order_id</span></h5>
                                <span class='lead'>$room_desc</span>
                                <h2 style='color:blue'>$room_price &#8377;</h2>
                                <p style='color:color:green'>Your Payment Was Successfully done</p>
                                <h3 style='color:red'>We Will Send Confirmation Mail In Your Register Email Within 24 Hours</h3>
                                <h2 style='color:blue'>Thank you For Your Booking</h2>
                                
                ";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                $status=$mail->send();
                if($status){
                    unset($_SESSION['customer_data']);
                    redirect(base_url()."usercontroller/payment_successfull");  
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            } 
        }else{
            redirect(base_url()."usercontroller/payment_failed");
        }

    }
    public function payment_successfull(){
        $this->load->view("user/payment_successfull");
    }
    public function payment_failed(){
        $this->load->view("user/payment_failed");
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
            $mail = new PHPMailer(true);
            $room_booking_details=$this->db->query("select * from room_book,rooms where room_book.room_id='$room_id' and rooms.room_id='$room_id'")->result_array();
            $room_name=$room_booking_details[0]['room_name'];
            $room_image=$room_booking_details[0]['room_image'];
    
            $room_desc=$room_booking_details[0]['room_desc'];
            $room_price=$room_booking_details[0]['room_price'];
            $room_order_id=$room_booking_details[0]['order_id'];
            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'sokhushaboo202@gmail.com';                     //SMTP username
                $mail->Password   = 'dhhbcaqljukamhsj';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('sokhushaboo202@gmail.com', 'khushaboo sonawane');
                $mail->addAddress($room_booking_details[0]['user_email'],$room_booking_details[0]['user_name']);
               
               
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Room Booking';
                $mail->Body    = "
                 <h1 style='color:blue;'>$room_name<h1>
                                <h5>Your Room Id= <span style='color:red'>$room_order_id</span></h5>
                                <span class='lead'>$room_desc</span>
                                <h2 style='color:blue'>$room_price &#8377;</h2>
                                <h3 style='color:red'>Your Booking cancel Successfully</h3>
                                <h2 style='color:blue'>Thank you For Contact With Us</h2>
                                
                ";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                $status=$mail->send();
                if($status){
                    $this->My_model->delete("room_book",['room_id'=>$room_id,'user_id'=>$_SESSION['user_id']]);
                    $_SESSION['login_success']="Your Order Cancel Sucessfully..";
                    unset($_SESSION['customer_data']);
                    redirect(base_url()."usercontroller/order_page");  
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                redirect(base_url()."usercontroller/");
            } 
        
        
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
            $result['basic_info']=$this->My_model->select("basic_info");
            $this->load->view("user/confirm_address",$result);

        }else{
            $data['basic_info']=$this->My_model->select("basic_info");
            $this->load->view("user/confirm_address",$data);
        }
    }
    public function checkFoodAddress(){
        $basic_info=$this->My_model->select("basic_info");
        $key="rzp_test_hzb65wV2pSukU2";
        $secret="7EMFkUDHs4ppm1bfqMvqXinP";
        $price= $_POST['amount'] * 100;
        $api = new Api($key, $secret);
        $order=$api->order->create(
            array('receipt' => '123',
             'amount' => $price,
              'currency' => 'INR', 
              'notes'=> array('key1'=> 'value3','key2'=> 'value2')
            ));
            $_SESSION['order_food_data']=$_POST;
            $this->load->view("user/razorpay_food_checkpayout",['customerdata'=>$_POST,"order"=>$order,"key"=>$key,"secret"=>$secret,"basic_info"=>$basic_info]);
            
       
    }
    public function paymentfoodstatus(){
        $key="rzp_test_hzb65wV2pSukU2";
        $secret="7EMFkUDHs4ppm1bfqMvqXinP";
        $razorpay_payment_id=$_POST['razorpay_payment_id'];
        $razorpay_order_id=$_POST['razorpay_order_id']; 
        $razorpay_signature=$_POST['razorpay_signature'];
        $data=$razorpay_order_id . "|" . $razorpay_payment_id;
        $generated_signature = hash_hmac("sha256",$data,$secret);


        if ($generated_signature == $razorpay_signature) {
            
            if(isset($_SESSION['user_id'])){
                $food_data['deliver_to']=$_SESSION['order_food_data']['deliver_to'];
                $food_data['country']=$_SESSION['order_food_data']['country'];
                $food_data['state']=$_SESSION['order_food_data']['state'];
                $food_data['dist']=$_SESSION['order_food_data']['dist'];
                $food_data['tal']=$_SESSION['order_food_data']['tal'];
                $food_data['street']=$_SESSION['order_food_data']['street'];
                $food_data['pincode']=$_SESSION['order_food_data']['pincode'];
                $food_data['user_order_name']=$_SESSION['order_food_data']['user_order_name'];
                $food_data['user_order_mobile']=$_SESSION['order_food_data']['user_order_mobile'];
                $food_data['user_order_email']=$_SESSION['order_food_data']['user_order_email'];
                $food_data['amount']=$_SESSION['order_food_data']['amount'];
                $food_data['user_id']=$_SESSION['user_id'];
                $user_id=$_SESSION['user_id'];
              
                $this->My_model->insert("user_order_address",$food_data);
               
                $data=$this->db->query("select * from add_to_cart where user_id='$user_id' and product_name='food'")->result_array();
                
                
                if(count($data)>0){
                    foreach($data as $key=>$row){
                        $result[$key]['food_id']=$row['product_id'];
                        $result[$key]['user_id']=$_SESSION['user_id'];
                        $result[$key]['order_date']=date('Y-m-d H:iA');
                        $result[$key]['order_status']="Active";
                        $result[$key]['order_qty']=$row['qty'];
                        $result[$key]['deliver_to']=$_SESSION['order_food_data']['deliver_to'];
                        $result[$key]['country']=$_SESSION['order_food_data']['country'];
                        $result[$key]['state']=$_SESSION['order_food_data']['state'];
                        $result[$key]['dist']=$_SESSION['order_food_data']['dist'];
                        $result[$key]['tal']=$_SESSION['order_food_data']['tal'];
                        $result[$key]['street']=$_SESSION['order_food_data']['street'];
                        $result[$key]['pincode']=$_SESSION['order_food_data']['pincode'];
                        $result[$key]['user_order_name']=$_SESSION['order_food_data']['user_order_name'];
                        $result[$key]['user_order_mobile']=$_SESSION['order_food_data']['user_order_mobile'];
                        $result[$key]['user_order_email']=$_SESSION['order_food_data']['user_order_email'];
                        $result[$key]['razor_order_id ']=$razorpay_order_id;

                    }
                }
               }
               foreach($result as $key=>$row){
                $this->My_model->insert("order_food",$row);
               }
               if(count($data)>0){
                foreach($data as $key=>$row){
                    $this->My_model->delete("add_to_cart",$row);
                }
               }
               
            //   send data 
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'sokhushaboo202@gmail.com';                     //SMTP username
                $mail->Password   = 'dhhbcaqljukamhsj';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('sokhushaboo202@gmail.com', 'khushaboo sonawane');
                $mail->addAddress($food_data['user_order_email'],$food_data['user_order_name']);
               
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Food Order Confirmation';
                $mail->Body    = "
                                <div style='height:50vh;width:50%;margin:5px auto;text-align:center;border:1px solid black;padding:20px'>
                                    <h1 style='color:blue'>Your Food Order Successfully</h1>
                                    <h3>Your Order Will Be Delivered Within 5 hours</h3>
                                    <h3>Thankyou For Choosing Our Hotel !....</h3>
                                </div>
                               
                ";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                $status=$mail->send();
                if($status){
                    unset($_SESSION['customer_data']);
                    redirect(base_url()."usercontroller/payment_successfull");  
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }


        }else{
            redirect(base_url()."usercontroller/payment_failed");
        }

    }
   
    public function order_confirm(){
        $this->load->view("user/order_confirm");
    }
    public function cancel_food_order($order_id){
        $this->My_model->update_cond("order_food",['order_status'=>'Disabled'],['order_id'=>$order_id]);
        $_SESSION['login_success']="Order Cancel Successfully!..";
        redirect(base_url()."usercontroller/order_page");
    }
    public function save_user_contact_info(){
        $this->My_model->insert("contact_info",$_POST);
        $_SESSION['login_success']="Your Information Save Successfully !...";
        redirect(base_url()."usercontroller/contact");
    }
    public function blog(){
        $this->navbar();
        $data['blog_data']=$this->My_model->select("blog");
        $this->load->view("user/blog",$data);
        $this->footer();
    }
    public function metting_events(){
        $this->navbar();
        $data['hall_book_status']=$this->db->query("select * from book_hall,metting_halls where book_hall.mt_id=metting_halls.mt_id")->result_array();
        $data['metting_hall']=$this->My_model->select("metting_halls");
        $this->load->view("user/metting_events",$data);
        $this->footer();
    }
    public function view_order_details($order_id){
        $this->navbar();
        $data['order_details']=$this->db->query("select * from food,order_food where food.food_id=order_food.food_id and order_food.order_id='$order_id'")->result_array();
        $data['sub_total']=($this->db->query("select sum(order_qty*food_price) as total_amount from order_food,food where order_food.food_id=food.food_id and order_id=$order_id")->result_array())[0]['total_amount'];
        
        $this->load->view("user/view_order_details",$data);
        $this->footer();
    }
    
}
?>

<!-- Array
(
    [0] => Array
        (
            [food_id] => 3
            [cat_id] => 6
            [sub_cat_id] => 5
            [food_name] => Dosa
            [food_rating] => 5
            [food_desc] => South Indian cuisine is a flavorful journey through the southern states of India, celebrated for its vibrant spices, diverse ingredients, and unique cooking techniques. Rice, lentils, coconut, and an array of fresh vegetables form the backbone of South Indian dishes. Iconic dishes like dosa (fermented rice and lentil crepes), idli (steamed rice cakes), and vada (savory fried lentil donuts) are breakfast staples, often served with chutneys and sambar (a tangy lentil soup). The region's cuisine also boasts a variety of aromatic rice dishes such as biryani and lemon rice. Coconut-based curries like avial and kootu, as well as spicy seafood delicacies like fish curry and meen varuval, showcase the region's coastal influences. South 
            [food_price] => 200
            [off_price] => 30% OFF 200Rs
            [food_image] => 17179054444500southfood.jpg
            [order_id] => 1
            [user_id] => 1
            [order_date] => 2024-06-18 09:35AM
            [order_status] => Delivered
            [order_qty] => 4
            [deliver_to] => dhiraj sonawane
            [country] => India
            [state] => MH
            [dist] => Ahemadnagar
            [tal] => Newasa
            [street] => Vantkothe Erandol Jalgaon Maharashtra
            [pincode] => 425110
            [user_order_name] => khushaboo sonawane
            [user_order_mobile] => 9665065113
            [user_order_email] => sokhushaboo202@gmail.com
            [razor_order_id] => order_OO5IoGWXSxDAYH
            [order_deliver_date] => 2024-06-18 09:36AM
        )

) -->