<?php
class My_model extends CI_Model{
    public function index(){
        echo "mymodel executed";
    }
    public function update($tablename,$data,$cond=null){
        if($cond!=null){
            $this->db->where($cond)->update($tablename,$data);
        }
        $this->db->update($tablename,$data);
    }
    public function select($tablename,$cond=null){
        if($cond!=null){
            return $this->db->where($cond)->get($tablename)->result_array();
        }
       return $this->db->get($tablename)->result_array();
    }
    public function insert($tablename,$data){
        $this->db->insert($tablename,$data);
    }
    public function delete($tablename,$table_id){
       $this->db->where($table_id)->delete($tablename);
    }
    public function select_image($tablename,$cond,$colname){
        return $this->db->select($colname)->from($tablename)->where($cond)->get()->result_array();
    }
    public function update_cond($tablename,$data,$cond){
        $this->db->where($cond)->update($tablename,$data);
    }
    public function num_rows($tablename){
        return $this->db->query("select count(*) as total_rows from $tablename")->result_array();
    }
    public function all($limit,$offset,$tablename,$order_id){
        return $this->db->limit($limit,$offset)->order_by($order_id, 'DESC')->get_where($tablename)->result_array();
    }
    public function select_category_data(){
        return $this->db->query("select * from category,sub_category where category.cat_id=sub_category.cat_id and category.status='Active'")->result_array();
    }
    public function select_sub_cat($sub_cat_id){
        return $this->db->query("select * from category,sub_category where category.cat_id=sub_category.cat_id and sub_category.sub_cat_id=$sub_cat_id and category.status='Active'")->result_array();
    }
    public function update_sub_category($tablename,$data){
        extract($data);
        echo $sub_cat_id;
        $this->db->query("update sub_category set sub_cat_name='$sub_cat_name',sub_cat_status='$sub_cat_status',cat_id='$cat_id' where sub_cat_id='$sub_cat_id'");
    }
   
}
?>

<!-- create table basic_info(basic_in int primary key auto_increment,hotel_name varchar(200),hotel_mobile varchar(10),hotel_email varchar(2000),hotel_reservation_number varchar(10),hotel_address varchar(500),hotel_map_link varchar(3000),hotel_owner_name varchar(500),hotel_owner_information varchar(2000),hotel_information varchar(2000),hotel_reservation_details varchar(3000),facebook_link text,twitter_link text,youtube_link text,instagram_link text,hotel_logo text); -->

<!-- create table slider(sli_id integer primary key auto_increment,slider_title varchar(500),slider_subtitle varchar(700),slider_rating integer,slider_image text); -->

<!-- create table about(ab_id integer primary key auto_increment,about_title varchar(1000),about_description varchar(1000),about_first_image text,about_second_image text); -->

<!-- create table category(cat_id integer primary key auto_increment,category_name varchar(2000),cat_status varchar(2000)); -->

<!-- create table sub_category(sub_cat_id integer primary key auto_increment,sub_cat_name varchar(2000),sub_cat_status varchar(2000),cat_id integer); -->