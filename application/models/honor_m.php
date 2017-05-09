<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Honor_m extends CI_Model
{

    function __construct()
    {
        parent::__construct();


    }

    function select()
    {
        $sql = "SELECT * FROM `honor`;";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    function write($username,$message)
    {
        $username = "\"".$username."\"";
        $message = "\"".$message."\"";

        $sql = "INSERT INTO `honor`(`user_name`,`user_message`) VALUES ($username,$message)";
        $this->db->query($sql);

    }

}

?>