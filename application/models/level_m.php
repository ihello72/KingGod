<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Level_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function selectComment($level_fk)
    {
        $sql = "SELECT * FROM `stage_text` WHERE level_fk = $level_fk;";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;

    }

    public function addText($level_fk , $user_pk, $contents, $user_name)
    {

        $contents = "\"".$contents."\"";
        $username = "\"".$user_name."\"";

        $sql = "INSERT INTO `stage_text` (`level_fk`, `user_pk`, `contents`,`username`) VALUES ($level_fk,$user_pk,$contents,$username);";
        $this->db->query($sql);
    }

}

?>