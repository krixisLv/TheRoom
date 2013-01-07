<?php

class Core{
    protected $db, $result;
    private $rows;
    
    public function __construct(){
        $this->db = new mysqli("localhost", "root", "", "the_room");
//        $link = mysql_connect('localhost', 'root', '');
//        $db = mysql_select_db('the_room', $link);
    }
    
    public function query($sql){
        $this->result = $this->db->query($sql);
    }
    
    public function rows(){
        for($i=1; $i <= $this->db->affected_rows; $i++){
            $this->rows[] = $this->result->fetch_assoc();
        }
        return $this->rows;
    }
}
