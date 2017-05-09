<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database(); // DB Included
        $this->load->helper('alert'); // alert helper included
    }

    public function question_insert()
    {
        if($_POST)
        {

            print_r($_POST);
            exit;

            $subject = $this->input->post('subject', TRUE);
            $contents = $this->input->post('contents', TRUE);
            $correct = $this->input->post('correct', TRUE);


        }else{
            $this->load->view('admin/qinsert');
        }


    }



}

?>