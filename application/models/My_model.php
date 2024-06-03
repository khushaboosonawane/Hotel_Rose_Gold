<?php
class My_model extends CI_Model{
    public function index(){
        echo "mymodel executed";
    }
    public function update($tablename,$data,$con=null){
        $this->db->update($tablename,$data);
    }
    public function select($tablename){
       return $this->db->get($tablename)->result_array();

    }
}
?>

<!-- create table basic_info(basic_in int primary key auto_increment,hotel_name varchar(200),hotel_mobile varchar(10),hotel_email varchar(2000),hotel_reservation_number varchar(10),hotel_address varchar(500),hotel_map_link varchar(3000),hotel_owner_name varchar(500),hotel_owner_information varchar(2000),hotel_information varchar(2000),hotel_reservation_details varchar(3000),facebook_link text,twitter_link text,youtube_link text,instagram_link text,hotel_logo text); -->