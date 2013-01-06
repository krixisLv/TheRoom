<?php

class Controller_Chat extends Controller_Template {
    
    public function action_index() {
        
        $auth = Auth::instance();
        $user_id = $auth->get_user_id();
        $groups = $auth->get_groups();
        if (!Auth::has_access('chat.read')){
            Session::set_flash("error", "Only registered users can access this awsome room!");
            Response::redirect('users/index');
        }
        
        $users = Model_Orm_Active::get_active();
        $mod_users = Model_Orm_Active::get_active_mods();
        $sleep_users = Model_Orm_Active::check_active();

        $left_content = View::forge("chat/list");
        $left_content->set("chat_users", $users);
        $left_content->set("chat_mods", $mod_users);
        $left_content->set("sleep_users", $sleep_users);
        $middle_content = View::forge("chat/chat");
        $right_content = View::forge("chat/profile");
        $title = "Main Page with a list of users!";

        $this->template->col_3 = true;
        $this->template->title = $title;
        $this->template->content_left = $left_content;
        $this->template->content_middle = $middle_content;
        $this->template->content_right = $right_content;
    }
    
}

