<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class Level extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database(); // DB Included
        $this->load->model('level_m');
        $this->load->helper('alert'); // alert helper included
    }


    public function index()
    {
        $this->level1();
    }

    public function _remap($method)
    {
        // 헤더 include
        $this->load->view('level/inc/header');

        if ( method_exists($this,$method) )
        {
            $this->{"{$method}"}();
        }

        //  푸터 include

        $this->load->view('level/inc/footer');
    }



    public function level1()
    {
        $level_fk = 1;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "dgsw"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level2');

            }
            else{
                alert('응 아니야','/kinggod/level/level1');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level1",$data);

        }
    }

    public function level2(){

        $level_fk = 2;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "이상구"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level3');

            }
            else{
                alert('응 아니야','/kinggod/level/level2');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level2",$data);

        }

    }


    public function level3(){ // 그냥 점프!
        $level_fk = 3;

        if($_GET)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct1 = "무시한다"; // 정답
            $correct2 = "물어본다";


            if(!strcmp($answer,$correct1)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                /*echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');*/

                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level4');


            }else if(!strcmp($answer,$correct2)){

                alert('보너스 스테이지로 넘어갑니다!' ,'/kinggod/level/level3_1');

            }
            else{
                alert('응 아니야','/kinggod/level/level2');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level3",$data);

        }
    }

    public function level3_1()
    {
        $level_fk = 31000;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "1117"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level3_2');

            }
            else{
                alert('응 아니야','/kinggod/level/level3_1');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level3_1",$data);

        }
    }

    public function level3_2()
    {
        $level_fk = 32000;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "1117"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level4');

            }
            else{
                alert('응 아니야','/kinggod/level/level3_2');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level3_2",$data);

        }
    }

    public function level4(){

        $level_fk = 4;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "이상구"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level5');

            }
            else{
                alert('응 아니야','/kinggod/level/level4');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level4",$data);

        }
    }

    public function level4_1()
    {
        $level_fk = 4;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "1036"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level4_2');

            }
            else{
                alert('응 아니야','/kinggod/level/level4_1');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level4_1",$data);

        }
    }

    public function level4_2()
    {
        $level_fk = 450;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "1036"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level5');

            }
            else{
                alert('응 아니야','/kinggod/level/level4_2');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level4_2",$data);

        }
    }

    public function level5()
    {
        $level_fk = 5;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "1036"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level5_1');

            }
            else{
                alert('응 아니야','/kinggod/level/level5');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level5",$data);

        }
    }

    public function level5_1()
    {
        $level_fk = 5;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "ox"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level5_2');

            }
            else{
                alert('응 아니야','/kinggod/level/level5_1');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level5_1",$data);

        }
    }

    public function level5_2()
    {
        $level_fk = 5223;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "poker"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level5_3');

            }
            else{
                alert('응 아니야','/kinggod/level/level5_2');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level5_2",$data);

        }
    }

    public function level5_3()
    {
        $level_fk = 52233;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "100"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level5_4');

            }
            else{
                alert('응 아니야','/kinggod/level/level5_3');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level5_3",$data);

        }
    }

    public function level5_4()
    {
        $level_fk = 522332;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "substituation"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level6');

            }
            else{
                alert('응 아니야','/kinggod/level/level5_4');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level5_4",$data);

        }
    }

    public function level6(){
        $level_fk = 58238;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "substituation"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level6_1');

            }
            else{
                alert('응 아니야','/kinggod/level/level6');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level6",$data);

        }
    }

    public function level6_1()
    {
        $level_fk = 5852;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "4"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level6_2');

            }
            else{
                alert('응 아니야','/kinggod/level/level6_1');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level6_1",$data);

        }
    }

    public function level6_2()
    {
        $level_fk = 52256;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "애플조아"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level6_3');

            }
            else{
                alert('응 아니야','/kinggod/level/level6_2');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level6_2",$data);

        }
    }

    public function level6_3()
    {
        $level_fk = 5234256;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "qsuvyb"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level6_4');

            }
            else{
                alert('응 아니야','/kinggod/level/level6_3');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level6_3",$data);

        }
    }

    public function level6_4()
    {
        $level_fk = 88856;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "1088"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level6_5');

            }
            else{
                alert('응 아니야','/kinggod/level/level6_4');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level6_4",$data);

        }
    }

    public function level6_5()
    {
        $level_fk = 106;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "15"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level6_6');

            }
            else{
                alert('응 아니야','/kinggod/level/level6_5');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level6_5",$data);

        }
    }

    public function level6_6()
    {
        $level_fk = 52358556;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "15"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level7');

            }
            else{
                alert('응 아니야','/kinggod/level/level6_6');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level6_6",$data);

        }
    }

    public function level7()
    {
        $level_fk = 6556;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "15"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level7_1');

            }
            else{
                alert('응 아니야','/kinggod/level/level7');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level7",$data);

        }
    }

    public function level7_1()
    {
        $level_fk = 768556;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "2340"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level7_4');

            }
            else{
                alert('응 아니야','/kinggod/level/level7_1');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level7_1",$data);

        }
    }

    public function level7_2()
    {
        $level_fk = 6556;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "knight"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level7_5');

            }
            else{
                alert('응 아니야','/kinggod/level/level7_2');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level7_2",$data);

        }
    }

    public function level7_3()
    {
        $level_fk = 6556;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "maze"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level8');

            }
            else{
                alert('응 아니야','/kinggod/level/level7_3');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level7_3",$data);

        }
    }

    public function level7_4()
    {
        $level_fk = 655126;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "maze"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level7');

            }
            else{
                alert('응 아니야','/kinggod/level/level7_4');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level7_4",$data);

        }
    }

    public function level7_5()
    {
        $level_fk = 852623;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "maze"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level7');

            }
            else{
                alert('응 아니야','/kinggod/level/level7_5');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level7_5",$data);

        }
    }

    public function level8()
    {
        $level_fk = 65518526;

        if($_POST)
        {
            $answer = $this->input->post('answer', TRUE); // 정답을 POST방식으로 받음

            $correct = "maze"; // 정답

            if(!strcmp($answer,$correct)){ // 동일하면 0을 리턴함.

                /*
                 *  작업 목록
                 *
                 * -> 맞춘 사람은 페이지를 리다이렉트해서 문제에 댓글을 입력함.
                 *
                 * */

                echo "<script> alert('다음 스테이지로 넘어가기 전에 약올리세요!'); </script>";
                $this->load->view('level/inc/addText');

            }else if(@$_POST['contents']){

                $user_pk = $this->session->userdata('user_pk');
                $user_name = $this->session->userdata('user_name');
                $contents = $this->input->post('contents', TRUE);

                $this->level_m->addText($level_fk,$user_pk,$contents,$user_name);
                alert('다음 스테이지로 넘어갑니다!' ,'/kinggod/level/level8');

            }
            else{
                alert('응 아니야','/kinggod/level/level8');
            }
        }else{

            $data['list'] = $this->level_m->selectComment($level_fk);
            $this->load->view("level/level8",$data);

        }
    }


}

?>