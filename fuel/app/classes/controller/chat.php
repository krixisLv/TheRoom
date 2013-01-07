<?php

class Controller_Chat extends Controller_Template {
    
    public function action_index() {
        
        $auth = Auth::instance();
        $user_id = $auth->get_user_id();
        $name = $auth->get_screen_name();
        $group = Model_Orm_User::get_group($name);
        
        if (!Auth::has_access('chat.read')){
            Session::set_flash("error", "Only registered users can access this awsome room!");
            Response::redirect('users/index');
        }

        $left_content = View::forge("chat/list");
        $middle_content = View::forge("chat/chat");
        $right_content = View::forge("chat/profile");
        $form_info = Fieldset::forge('info');
        Model_Orm_Info::info($form_info);

        $information = Model_Orm_Info::getInfo($user_id[1]);
        $right_content->set('info', $form_info->build(), false);
        $right_content->set('information', $information);
        
        $title = "Main Page with a list of users!";

        if ($_POST and Input::post('Save')) {
            $form_info->repopulate();
            if(empty($information)){
                $new = new Model_Orm_Info();
                $new->uid = $user_id[0];
                $new->firstName = Input::post('firstName');
                $new->lastName = Input::post('lastName');
                $new->picture = Input::post('picture');
                $new->save();
            }else{
                $pic = Input::post('picture');
                if(isset($pic) and !empty($pic)){
                    Model_Orm_Info::updatePic($user_id[1], $pic);
                }
                $first = Input::post('firstName');
                if(isset($first) and !empty($first)){
                    Model_Orm_Info::updateName($user_id[1], $first);
                }
                $last = Input::post('lastName');
                if(isset($last) and !empty($last)){
                    Model_Orm_Info::updateLastName($user_id[1], $last);
                }
            }
            Session::set_flash('success', 'Successfully saved Profile information!');
            Response::redirect('chat/');
        }
        
        $this->template->col_3 = true;
        $this->template->title = $title;
        $this->template->content_left = $left_content;
        $this->template->content_middle = $middle_content;
        $this->template->content_right = $right_content;
    }
    
}

