<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class StripeController extends CI_Controller {
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->Model('Blog_model');
        $this->load->library('form_validation');
        $this->load->Model('MainModel');
        date_default_timezone_set('Asia/Kolkata');
    }
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index($id)
    {
        if($this->session->userdata('isUserLoggedIn')){
            $data = $this->MainModel->get_price($id);
            if($data['status']) {
                $data['id'] = $id;
                $this->load->view('my_stripe',$data);
            } else {
                redirect(CTRL."Main/mainpage");
            }
        } else {
            redirect(CTRL."Main/mainpage");
        }
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function stripe_post($id)
    {
        require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
     
        $data = $this->MainModel->get_price($id);
        $amount = $data['price'];

        \Stripe\Charge::create ([
                "amount" => $amount,
                "currency" => "usd",
                "source" => $this->input->post('stripeToken'),
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
            
        $this->session->set_flashdata('success', 'Payment made successfully.');

        $user_id = $this->session->userdata['usersecondId'];
        $this->MainModel->update_enrolled($id,$user_id);
             
        redirect('/my-stripe', 'refresh');
    }
}
