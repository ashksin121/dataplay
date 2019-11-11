<?php
Class MainModel extends CI_Model
{
        Public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function newregistermodel($data){
            $query=$this->db->insert('registered',$data);
            if($query){
            $result['status_1'] = true;
                    }
            return $result;

        }
        public function newcourseregister($data){
            $query=$this->db->insert('enrolled',$data);
            if($query){
            $result['status_1'] = true;
                    }
            return $result;

        }
        public function logincheckmodel($data){
            $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
            $this->db->select('user_second_id,fname,sname,email');
            $this->db->where($condition);
            $this->db->from('registered');
            $query=$this->db->get();
            if($query->num_rows()==1){
            $result['login_status'] = true;
            $result['data'] = $query->result_array();
                    }
            return $result;

        }
        // public function enrolledcheckmodel($id){
        //     $condition = "user_id =" . "'" . $id . "'";
        //     $this->db->select('user_id,course_id');
        //     $this->db->where($condition);
        //     $this->db->from('enrolled');
        //     $query=$this->db->get();
        //     $result=array();
        //     if($query->num_rows()>0){
        //         foreach($query->result_array() as $row){
        //             array_push($result,$row['course_id']);
        //         }
        //     }
        //     return $result;
        // }
        public function coursedatamodel($user_id) {
            $result = array();
            $sql = "SELECT courses.course_id,course_name,course_author,course_description,course_rating,link FROM courses, enrolled WHERE courses.course_id=enrolled.course_id AND enrolled.user_id='$user_id'";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data = $query->result_array();
                $result['course'] = $data;
                $result['status'] = true;
            } else {
                $result['status'] = false;
            }   
            return $result;
        }

        public function getcurrent($id) {
            $result = array();
            $sql = "SELECT * FROM link WHERE link_id='$id'";
            $query = $this->db->query($sql);
            if($query->num_rows() > 0) {
                $data = $query->result_array();
                $result['current'] = $data;
                $result['status'] = true;
            } else {
                $result['status'] = false;
            }
            return $result;
        }

        public function getlist($course) {
            $result = array();
            $sql = "SELECT * FROM link WHERE course='$course'";
            $query = $this->db->query($sql);
            if($query->num_rows() > 0) {
                $data = $query->result_array();
                $result['list'] = $data;
                $result['status'] = true;
            } else {
                $result['status'] = false;
            }
            return $result;
        }

        public function checkcourseregister($user_id,$course_id) {
            $result = array();
            $sql = "SELECT user_id,course_id FROM enrolled WHERE course_id='$course_id' AND user_id='$user_id'";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data = $query->result_array();
                $result['course'] = $data;
                $result['status'] = true;
            } else {
                $result['status'] = false;
            }
            return $result;
        }
}
?>
