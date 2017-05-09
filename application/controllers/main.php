<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('member_m');
    }

    function index()
    {

        $this->home();

    }

    function home()
    {

        echo "메인 홈페이지 입니다.";

        /*$username = $this->session->userdata('user_name');
        $userid = $this->session->userdata('user_id');
        $logged_in = $this->session->userdata('logged_in');

        echo $username."<br>";
        echo $userid."<br>";
        echo $logged_in;*/

    }

}

?>