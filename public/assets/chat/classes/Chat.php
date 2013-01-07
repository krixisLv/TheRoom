<?php

class Chat extends Core{
    public function fetchMessages(){
        $this->query("
            SELECT      messages.message,
                        messages.created_at,
                        users.username,
                        users.id
            FROM        messages
            JOIN        users
            ON          messages.uid = users.id
            ORDER BY    messages.created_at
            ASC
        ");
        
        return $this->rows();
    }
    
    public function throwMessage($user_id, $message){
        $message = $this->db->real_escape_string(htmlentities($message));
        $this->query("
            INSERT INTO messages (uid, message, created_at)
            VALUES ( '$user_id' , '$message', CURRENT_TIMESTAMP)
            ");

        //$this->db->real_escape_string(htmlentities($message)) 
    }
}