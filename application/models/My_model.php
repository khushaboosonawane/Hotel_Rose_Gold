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
        return $this->db->query("select * from category,sub_category where category.cat_id=sub_category.cat_id and category.cat_status='Active'")->result_array();
    }
    public function select_sub_cat($sub_cat_id){
        return $this->db->query("select * from category,sub_category where category.cat_id=sub_category.cat_id and sub_category.sub_cat_id=$sub_cat_id and category.cat_status='Active'")->result_array();
    }
    public function update_sub_category($tablename,$data){
        extract($data);
        echo $sub_cat_id;
        $this->db->query("update sub_category set sub_cat_name='$sub_cat_name',sub_cat_status='$sub_cat_status',cat_id='$cat_id' where sub_cat_id='$sub_cat_id'");
    }
    public function select_special_room(){
       return $this->db->query("select * from category,sub_category,rooms where rooms.cat_id=category.cat_id and rooms.sub_cat_id=sub_category.sub_cat_id and rooms.room_type='special_offer_room' order by room_id desc")->result_array();
    }
    public function select_special_room_with_id($room_id){
        return $this->db->query("select * from category,sub_category,rooms where rooms.cat_id=category.cat_id and rooms.sub_cat_id=sub_category.sub_cat_id and rooms.room_id=$room_id")->result_array();
    }
    public function update_special_room($tablename,$data){
        extract($data);
        $this->db->query("update rooms set cat_id='$cat_id',sub_cat_id='$sub_cat_id',room_name='$room_name',room_desc='$room_desc',room_bed='$room_bed',person_count='$person_count',room_breakfast='$room_breakfast',room_price='$room_price',wifi_status='$wifi_status',room_image='$room_image',status='Active',order_status='Active',rating='$rating' where room_id='$room_id'");
    }
    public function update_special_room_without_image($tablename,$data){
        extract($data);
        $this->db->query("update rooms set cat_id='$cat_id',sub_cat_id='$sub_cat_id',room_name='$room_name',room_desc='$room_desc',room_bed='$room_bed',person_count='$person_count',room_breakfast='$room_breakfast',room_price='$room_price',wifi_status='$wifi_status',status='Active',order_status='Active',rating='$rating' where room_id='$room_id'");
    }
    public function select_food(){
        return $this->db->query("select * from category,sub_category,food where food.cat_id=category.cat_id and food.sub_cat_id=sub_category.sub_cat_id")->result_array();
    }
    public function select_food_data_id($food_id){
        return $this->db->query("select * from category,sub_category,food where food.cat_id=category.cat_id and food.sub_cat_id=sub_category.sub_cat_id and food_id=$food_id")->result_array();
    }
    
   
}
?>
