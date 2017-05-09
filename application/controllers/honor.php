<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class Honor extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database(); // DB Included
        $this->load->model('honor_m');
        $this->load->helper('alert'); // alert helper included
    }

    public function index()
    {

    }

    public function lists()
    {
        $data['list'] = $this->honor_m->select();
        $this->load->view("honor/honor_show",$data);
    }

    public function insertHonor()
    {
        $user_message = $this->input->post('contents', TRUE);
        $username = $this->session->userdata('user_name');
        $this->honor_m->write($username,$user_message);

        alert("명예의 전당의 등록되었습니다!",'/kinggod/member/main');

    }



}

?>