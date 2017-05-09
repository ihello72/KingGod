<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class Member extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('member_m');
        $this->load->helper('alert'); // 헬퍼 로드
    }

    function index()
    {
        $this->login();
    }

    public function main()
    {
        $this->load->view('member/main');
    }

    public function login()
    {
        if($_POST)
        {
            $userid = $this->input->post('userid', TRUE); // userid
            $userpw = $this->input->post('userpw', TRUE); // userpw

            $query = array( 'user_id' => $userid,  'user_pw' => $userpw );
            $result = $this->member_m->login($query);

            if($result) {
                // 세션 생성
                $newdata = array(
                    'user_pk' => $result->userpk,
                    'user_name' => $result->username,
                    'user_id' => $result->userid,
                    'logged_in' => TRUE
                );
                // 세션 등록
                $this->session->set_userdata($newdata);
                // 홈 뷰로 이동.
                echo "<script>location.href='/kinggod/member/main';</script>";
            }else{ // 아이디 또는 비밀번호가 불일치일 경우 로그인 뷰로 이동.
                alert('아이디어 또는 비밀번호가 일치하지 않습니다.','/kinggod/member/login');
            }
        }else{
            $this->load->view('member/login');
        }

    }

    public function register()
    {
        if($_POST)
        {

            $userid  = $this->input->post('userid', TRUE);
            $userpw = $this->input->post('userpw', TRUE);;
            $username = $this->input->post('username', TRUE);;

            $query = array(
                'user_id' => $userid,
                'user_pw' => $userpw,
                'user_name' => $username
            );

            $this->member_m->register($query);
            alert('회원가입 완료','/kinggod/member/login');

        }else{
            $this->load->view('member/register');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        alert('로그아웃!','/kinggod/member/login');
    }



}

?>