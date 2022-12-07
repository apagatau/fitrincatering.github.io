<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class send extends CI_Controller {

    function __construct() {
        parent::__construct();

        $user = $this->session->userdata('user');
            if(empty($user)) {
                $this->session->set_flashdata('msg', 'Your session has been expired');
                redirect(base_url().'login/');
            }
        
        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->model('Order_model');
        $this->load->model('User_model');
        $this->controller = 'send';
    }

    public function index() {
       	if (isset($_POST['submit'])) {
		$name = $_POST['namepro'];
		$alamat = $_POST['address'];
		$total = $_POST['total'];
		$qty = $_POST['qty'];
		$nowa = $_POST['nowa'];
		header("location:https://api.whatsapp.com/send?phone=6287784809181&text=Pesan:%20$name%20%0DQuantity:%20$qty%20%0DAlamat:%20$alamat%20%0DTotal:%20$total");
		}
	}
}