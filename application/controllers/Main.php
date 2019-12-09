<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->Model('Blog_model');
        $this->load->library('form_validation');
        $this->load->Model('MainModel');
        date_default_timezone_set('Asia/Kolkata');

    }
    public function prod(){
        redirect(CTRL."Products/index");
    }
    public function mainpage()
    {
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['check'] = 0;
        }
        else {
            $data['check'] = 1;
        }
        $this->load->view('dataplay/index',$data);
    }

    public function course_ml($id = 1) {
        $data = array();
        $data['current'] = $this->MainModel->getcurrent($id);
        $data['list'] = $this->MainModel->getlist('ml');
        if($data['current']['status'] && $data['list']['status']) {
            $this->load->view('dataplay/course_ml',$data);
        } else {
            redirect(CTRL."Main/mainpage");
        }
    }

    public function course_dl($id = 6) {
        $data = array();
        $data['current'] = $this->MainModel->getcurrent($id);
        $data['list'] = $this->MainModel->getlist('dl');
        if($data['current']['status'] && $data['list']['status']) {
            $this->load->view('dataplay/course_dl',$data);
        } else {
            redirect(CTRL."Main/mainpage");
        }
    }

    public function course_stats($id = 11) {
        $data = array();
        $data['current'] = $this->MainModel->getcurrent($id);
        $data['list'] = $this->MainModel->getlist('stats');
        if($data['current']['status'] && $data['list']['status']) {
            $this->load->view('dataplay/course_stats',$data);
        } else {
            redirect(CTRL."Main/mainpage");
        }
    }

    public function statistics() 
    {
        $data = array();
        $data['check'] = 0;
        if($this->session->userdata('isUserLoggedIn')){
            // $sheet = $this->MainModel->coursedata($this->session->userdata('usersecondId'));
            //redirect(CTRL."Main/".$this->session->userdata('usersecondid'));
            $user_id = $this->session->userdata['usersecondId'];
            $course_data = $this->MainModel->checkcourseregister($user_id,1);
            if ($course_data['status']) {
                // $this->load->view('dataplay/courses',$course_data);
                $data['check'] = 1;
            } else {
                // redirect(CTRL."Main/mainpage");
                $data['check'] = 2;
            }
            
        }
        // else{
        //     // redirect(CTRL."Main/mainpage");
        //     $data = 3;
        // }
        $this->load->view('dataplay/statistics',$data);
    }
    public function ml() 
    {
        $data = array();
        $data['check'] = 0;
        if($this->session->userdata('isUserLoggedIn')){
            $user_id = $this->session->userdata['usersecondId'];
            $course_data = $this->MainModel->checkcourseregister($user_id,2);
            if ($course_data['status']) {
                $data['check'] = 1;
            } else {
                $data['check'] = 2;
            }
            
        }
        $this->load->view('dataplay/ml',$data);
    }
    public function dl() 
    {
        $data = array();
        $data['check'] = 0;
        if($this->session->userdata('isUserLoggedIn')){
            $user_id = $this->session->userdata['usersecondId'];
            $course_data = $this->MainModel->checkcourseregister($user_id,3);
            if ($course_data['status']) {
                $data['check'] = 1;
            } else {
                $data['check'] = 2;
            }
            
        }
        $this->load->view('dataplay/dl',$data);
    }
    public function about() 
    {
        $this->load->view('dataplay/about');
    }
    public function no_courses_yet() 
    {
        $this->load->view('dataplay/no_courses_yet');
    }
    public function coursepage()
    {
        // $this->load->Model('NotesModel');
        if($this->session->userdata('isUserLoggedIn')){
            // $sheet = $this->MainModel->coursedata($this->session->userdata('usersecondId'));
            //redirect(CTRL."Main/".$this->session->userdata('usersecondid'));
            $user_id = $this->session->userdata['usersecondId'];
            $course_data = $this->MainModel->coursedatamodel($user_id);
            if ($course_data['status']) {
                $this->load->view('dataplay/courses',$course_data);
            } else {
                redirect(CTRL."Main/no_courses_yet");
            }
            
        }
        else{
            $course_data = $this->MainModel->all_courses();
            if ($course_data['status']) {
                $this->load->view('dataplay/courses',$course_data);
            } else {
                redirect(CTRL."Main/mainpage");
            }
        }
        
    }
    public function all_courses()
    {
        $course_data = $this->MainModel->all_courses();
        if ($course_data['status']) {
            $this->load->view('dataplay/courses',$course_data);
        } else {
            redirect(CTRL."Main/mainpage");
        }
        
    }
    public function new_register(){
        if(isset($_POST['submit']))
        {
            $data=array();
            $data['user_second_id'] = md5($_POST['first_name'].$_POST['email']);
            $data['fname']= $_POST['first_name'];
            $data['sname'] = $_POST['last_name'];
            $data['email'] = $_POST['email'];
            $data['password'] = hash(sha256 , $_POST['password']);
            $hash = md5(rand(0, 1000));
            $data['hash'] = $hash;
            //$this->load->Model('MainModel');
            $sheet = $this->MainModel->newregistermodel($data);
            if($sheet['status_1']==1){
                
                    // redirect(CTRL."Main/mainpage");
                // $config = array(
                //     'protocol' => 'smtp',
                //     'smtp_host' => 'ssl://smtp.googlemail.com',
                //     'smtp_port' => 465,
                //     'smtp_user' => '<a href="mailto:ashishkirtis@gmail.com" rel="nofollow">ashishkirtis@gmail.com</a>', // change it to yours
                //     'smtp_pass' => 'Dhannu@IIITMG', // change it to yours
                //     'mailtype' => 'html',
                //     'charset' => 'iso-8859-1',
                //     'wordwrap' => TRUE
                // );
                $message =  "<!DOCTYPE html><html><head></head><body>";
                $message .= '<p>Dear ' . $data['fname'] . ',</p>';
                $message .= "Click <strong><a href='localhost/dataplay/index.php/Main/activate/".$data['user_second_id']."/".$data['hash']."'>here</a> </strong> to activate your account";
                $message .= '</body></html>';
     
                $this->load->library('email');
                $config = array();
                $config['protocol']    = 'smtp';
                $config['smtp_host']    = 'ssl://smtp.gmail.com';
                $config['smtp_port']    = '465';
                $config['smtp_timeout'] = '7';
                $config['smtp_user']    = 'akirtis.1999@gmail.com';
                $config['smtp_pass']    = 'Dhannu@IIITMG';
                $config['charset']    = 'utf-8';
                $config['newline']    = "\r\n";
                $config['mailtype'] = 'html'; // or html
                $config['validation'] = TRUE; // bool whether to validate email or not 
                $this->email->set_mailtype('html');
                $this->email->initialize($config);
                $this->email->from('ashksin121@gmail.com', 'Dataplay');
                $this->email->to($data['email']);
                $this->email->subject('Signup Verification Email');
                $this->email->message($message);
     
                //sending email
                if($this->email->send()){
                    $this->session->set_flashdata('message','Activation code sent to email');
                }
                else{
                    $this->session->set_flashdata('message', $this->email->print_debugger());
                    redirect(CTRL."Main/about");
                }
     
                // redirect('register');
                redirect(CTRL."Main/mainpage");
            }
                   
        }
    }

    public function activate(){
        $id =  $this->uri->segment(3);
        $code = $this->uri->segment(4);
 
        //fetch user details
        $user = $this->MainModel->getUser($id);
 
        //if code matches
        if($user['hash'] == $code){
            //update user active status
            $data['is_verified'] = true;
            $query = $this->MainModel->activate($data, $id);
 
            if($query){
                $this->session->set_flashdata('message', 'User activated successfully');
            }
            else{
                $this->session->set_flashdata('message', 'Something went wrong in activating account');
            }
        }
        else{
            $this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
        }
 
        // redirect('register');
        redirect(CTRL."Main/mainpage");
 
    }

    public function send_confirmation() {
        $this->load->library('email');      //load email library
        $this->email->from('ashksin121@gmail.com', 'My Site'); //sender's email
        $address = $_POST['email'];   //receiver's email
        $subject="Welcome to MySite!";    //subject
        $message= /*-----------email body starts-----------*/
        'Thanks for signing up, '.$_POST['fname'].'!

        Your account has been created. 
        Here are your login details.
        -------------------------------------------------
        Email   : ' . $_POST['email'] . '
        Password: ' . $_POST['password'] . '
        -------------------------------------------------
                        
        Please click this link to activate your account:
            
        ' . base_url() . 'index.php/user_registration/verify?' . 
        'email=' . $_POST['email'] . '&hash=' . $this->data['hash'] ;
        /*-----------email body ends-----------*/             
        $this->email->to($address);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }
    function index()
    {
        //this function will retrive all entry in the database
        $data['query'] = $this->Blog_model->get_all_posts();
        $this->load->view('blog/index',$data);
    }

    function new_entry()
    {
        //this function will retrive all entry in the database
        // $data['query'] = $this->Blog_model->get_all_posts();
        $this->load->view('blog/add_new_entry');
    }

    public function add_new_comment($id)
    {
        $this->load->helper('form');
        $this->load->library(array('form_validation','session'));
 
        //set validation rules
        // $this->form_validation->set_rules('entry_name', 'Title', 'required');
        $this->form_validation->set_rules('comment_body', 'Comment', 'required');

        $user_id = $this->session->userdata('usersecondId');
        $result = $this->MainModel->get_user_data($user_id);
 
        if ($this->form_validation->run() == FALSE || $result['status'] == FALSE)
        {
            //if not valid
            // $this->load->view('blog/about');
            redirect(CTRL."Main/post/$id");
        }
        else
        {
            //if valid
            $data=array();
            // $data['entry_name']= $_POST['entry_name'];
            $data['entry_id'] = $id;
            $data['comment_name'] = $result['user_data'][0]['fname'];
            $data['comment_email'] = $result['user_data'][0]['email'];
            $data['comment_body'] = $_POST['comment_body'];
            $sheet = $this->Blog_model->add_new_comment($data);
            redirect(CTRL."Main/post/$id");
        }
    }
 
    public function add_new_entry()
    {
        $this->load->helper('form');
        $this->load->library(array('form_validation','session'));
 
        //set validation rules
        $this->form_validation->set_rules('entry_name', 'Title', 'required');
        $this->form_validation->set_rules('entry_body', 'Body', 'required');
 
        if ($this->form_validation->run() == FALSE)
        {
            //if not valid
            // $this->load->view('blog/about');
            redirect(CTRL."Main/new_entry");
        }
        else
        {
            //if valid
            $data=array();
            $data['entry_name']= $_POST['entry_name'];
            $data['entry_body'] = $_POST['entry_body'];
            $sheet = $this->Blog_model->add_new_entry($data);
            redirect(CTRL."Main/index");
        }
        // $this->load->view('dataplay/about');
        // $data=array();
        // $data['entry_name']= $_POST['entry_name'];
        // $data['entry_body'] = $_POST['entry_body'];
        // //$this->load->Model('MainModel');
        // $sheet = $this->Blog_model->add_new_entry($data);
        //     redirect(CTRL."Main/index");
        // if($this->input->post())
        // {
        //     $name = $this->input->post('entry_name');
        //     $body = $this->input->post('entry_body');
        //     $this->Blog_model->add_new_entry($name,$body);
        //     $this->session->set_flashdata('message', '1 new entry added!');
        //     redirect(CTRL."Main/index");
        // } 
        // else {
        //     $this->load->view('blog/add_new_entry');
        // }
    }

    public function post($id)
    {
        $data['query'] = $this->Blog_model->get_post($id);
        $ans = $this->Blog_model->get_post_comment($id);
        $data['post_id'] = $id;
        $data['check'] = true;
        if($this->session->userdata('isUserLoggedIn')) {
            $user_id = $this->session->userdata['usersecondId'];
            $data['check'] = $this->Blog_model->check_rating($id,$user_id);
        }
        if($ans['status']) {
            $data['comments'] = $ans['comment'];
        }        
        $data['total_comments'] = $this->Blog_model->total_comments($id);

        if($data['query']['status']){
            $this->load->view('blog/post',$data);
        } else {
            redirect(CTRL."Main/index");
        }
     
        // $this->load->helper('form');
        // $this->load->library(array('form_validation','session'));
     
        // //set validation rules
        // $this->form_validation->set_rules('commentor', 'Name', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        // $this->form_validation->set_rules('comment', 'Comment', 'required');
     
        // if($this->Blog_model->get_post($id))
        // {
        //     foreach($this->Blog_model->get_post($id) as $row)
        //     {
        //         //set page title
        //         $data['title'] = $row['entry_name'];
        //     }
     
        //     if ($this->form_validation->run() == FALSE)
        //     {
        //         //if not valid
        //         $this->load->view('blog/post',$data);
        //     }
        //     else
        //     {
        //         //if valid
        //         $name = $this->input->post('commentor');
        //         $email = strtolower($this->input->post('email'));
        //         $comment = $this->input->post('comment');
        //         $post_id = $this->input->post('post_id');
     
        //         $this->Blog_model->add_new_comment($post_id,$name,$email,$comment);
        //         $this->session->set_flashdata('message', '1 new comment added!');
        //         redirect('post/'.$id);
        //     }
        // }
        // else
        //     show_404();
    }
    public function logout()
    {
        $this->session->sess_destroy();
        // redirect(base_url().'index.php/blog/');
        redirect(CTRL."Main/mainpage");
    }
    public function new_rating($id)
    {
        $user_id = $this->session->userdata['usersecondId'];
        $rate = $_POST['rating'];
        $result = $this->MainModel->rating_count($id,$user_id,$rate);
        $data = $this->MainModel->update_rating($id,$user_id);
        // if($data['status'] && $result['status']) {
        redirect(CTRL."Main/post/$id");
        // }
        // redirect(CTRL."Main/mainpage");
    }
    public function main_login(){
        if($this->input->post('submit')){
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $data=array();
                $data['email'] = $this->input->post('email');
                $data['password'] = hash(sha256 , $this->input->post('password'));
                $checkLogin = $this->MainModel->logincheckmodel($data);
                if($checkLogin['login_status'] && $checkLogin['data'][0]['is_verified']){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('usersecondId',$checkLogin['data'][0]['user_second_id']);
                    redirect(CTRL."Main/coursepage", $course_data['course']);
                    
                    // $enrolled=array();
                    // $enrolled = $this->MainModel->enrolledcheckmodel($user_id);

                    // $course_data = array();
                    // $course_data['course_1'] = $this->MainModel->coursedatamodel($enrolled);
                    // echo "<script>console.log('aaa')</script>";
                    
                    // echo "<script>console.log('" . $enrolled . "');</script>";
                    // echo "<script>console.log('" . json_encode($enrolled) . "');</script>";
                }else{
                    $this->session->set_flashdata('message', 'Something went wrong in activating account');
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                    redirect(CTRL."Main/mainpage");
                }
            }
        }
    }
}

?>
