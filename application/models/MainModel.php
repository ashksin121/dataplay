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
            $this->db->select('user_second_id,fname,sname,email,is_verified');
            $this->db->where($condition);
            $this->db->from('registered');
            $query=$this->db->get();
            if($query->num_rows()==1){
            $result['login_status'] = true;
            $result['data'] = $query->result_array();
                    }
            return $result;

        }
        public function getUser($id){
            $query = $this->db->get_where('registered',array('user_second_id'=>$id));
            return $query->row_array();
        }
     
        public function activate($data, $id){
            $this->db->where('registered.user_second_id', $id);
            return $this->db->update('registered', $data);
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

        public function get_user_data($user_id) {
            $result = array();
            $sql = "SELECT * FROM registered WHERE user_second_id='$user_id'";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data = $query->result_array();
                $result['user_data'] = $data;
                $result['status'] = true;
            } else {
                $result['status'] = false;
            }   
            return $result;
        }

        public function rating_count($id,$user_id,$rate) {
            $result = array();
            $sql = "SELECT * FROM entry WHERE entry_id='$id'";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data = $query->result_array();
                $sum = $data[0]['sum'];
                $count = $data[0]['count'];
                $sum = $sum + $rate;
                $count = $count + 1;
                $rating = $sum / $count;
                $data = array(
                    'rating' => $rating,
                    'count' => $count,
                    'sum' => $sum
                );

                $this->db->where('entry_id', $id);
                return $this->db->update('entry', $data);
                $result['status'] = true;
            } else {
                $result['status'] = false;
            }   
            return $result;
        }

        public function update_rating($id,$user_id) {
            $data = array(
                'user_id' => $user_id,
                'post_id' => $id
            );
            $this->db->insert('rating',$data);
        }

        public function all_courses() {
            $result = array();
            $sql = "SELECT course_id,course_name,course_author,course_description,course_rating,link FROM courses ";
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
