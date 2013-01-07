<?php

class Chat extends Core{
    public function getActive(){
        $this->query("
            SELECT      active.name,
                        active.group
            FROM        active
            ORDER BY    active.name
            ASC
        ");
        return $this->rows();
    }
}