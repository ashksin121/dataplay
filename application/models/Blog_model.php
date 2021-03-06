<?php
Class Blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    function get_all_posts()
    {
        //get all entry
        $this->db->from('entry');
        $this->db->order_by("rating","desc");
        $query = $this->db->get();
        return $query->result();
        // $sql = "SELECT entry_id,entry_name,entry_body,entry_date,rating FROM entry ORDER BY rating DESC";
        // $query = $this->db->query($sql);
        // $result = array();
        // if ($query->num_rows() > 0) {
        //     $data = $query->result_array();
        //     $result['data'] = $data;
        //     $result['status'] = true;
        // } else {
        //     $result['status'] = false;
        // }   
        // return $result;
    }
 
    function add_new_entry($data)
    {
        // $data = array(
        //     'entry_name' => $name,
        //     'entry_body' => $body
        // );
        // $this->db->insert('entry',$data);
        $this->db->insert('entry',$data);
    }

    function add_new_comment($data)
    {
        // $data = array(
        //     'entry_id'=>$post_id,
        //     'comment_name'=>$commentor,
        //     'comment_email'=>$email,
        //     'comment_body'=>$comment,
        // );
        $this->db->insert('comment',$data);
    }
 
function get_post($id)
{
    $result = array();
    $sql = "SELECT entry_name,entry_body,entry_date,rating FROM entry WHERE entry_id='$id'";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
        $data = $query->result_array();
        $result['post'] = $data;
        $result['status'] = true;
    } else {
        $result['status'] = false;
    }   
    return $result;
    // $this->db->where('entry_id',$id);
    // $query = $this->db->get('entry');
    // if($query->num_rows()!==0)
    // {
    //     return $query->result();
    // }
    // else
    //     return FALSE;
}

function check_rating($id,$user_id)
{
    $result = array();
    $sql = "SELECT * FROM rating WHERE post_id='$id' AND user_id='$user_id'";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
        $result['status'] = true;
    } else {
        $result['status'] = false;
    }   
    return $result;
    // $this->db->where('entry_id',$id);
    // $query = $this->db->get('entry');
    // if($query->num_rows()!==0)
    // {
    //     return $query->result();
    // }
    // else
    //     return FALSE;
}
 
function get_post_comment($id)
{
    $result = array();
    $sql = "SELECT comment_id,comment_name,comment_email,comment_body,comment_date FROM comment WHERE entry_id='$id'";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
        $data = $query->result_array();
        $result['comment'] = $data;
        $result['status'] = true;
    } else {
        $result['status'] = false;
    }   
    return $result;
    // $this->db->where('entry_id',$post_id);
    // $query = $this->db->get('comment');
    // return $query->result();
}
 
function total_comments($id)
{
    $this->db->like('entry_id', $id);
    $this->db->from('comment');
    return $this->db->count_all_results();
}
}