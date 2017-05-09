<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Member_m extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function login($query)
    {

        $userid = "\"".$query['user_id']."\""; // 유저 아이디
        $passwd = "\"".$query['user_pw']."\""; // 유저 비밀번호

        $sql = "SELECT * FROM member WHERE userid = $userid AND passwd = $passwd";
        $query = $this->db->query($sql);

        if( $query->num_rows() > 0 )
        {
            return $query->row();
        }else
        {
            return FALSE;
        }

    }

    public function register($query)
    {

        $userid = "\"".$query['user_id']."\"";
        $passwd = "\"".$query['user_pw']."\"";
        $username = "\"".$query['user_name']."\"";

        $sql = "INSERT INTO `member`(`userid`, `passwd`, `username`) VALUES ($userid,$passwd,$username)";
        $this->db->query($sql);

    }



}

?>