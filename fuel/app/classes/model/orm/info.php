<?php

class Model_Orm_Info extends Orm\Model {

    protected static $_table_name = 'user_info';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
        'id',
        'uid' => array(
	    'data_type' => 'int'),
	'firstName' => array(
	    'data_type' => 'varchar'),
        'lastName'  => array(
	    'data_type' => 'varchar'),
        'picture'  => array(
	    'data_type' => 'varchar'),
    );
    public static function info(Fieldset $form)
	{
                $form->add('picture', '', array('placeholder' => 'Picture Address:jpg, jpeg, png, gif'));
		$form->add('firstName', '', array('placeholder' => 'First Name'));
                $form->add('lastName', '', array('placeholder' => 'Last Name'));
                $form->add('Save', ' ', array('type'=>'submit', 'value' => 'Save Information'));
		return $form;
	}
    public static function getInfo($uid)
    {
	return \DB::select()
		    ->from('user_info')
                    ->where('uid', $uid)
		    ->execute()
		    ->as_array();
    }
    public static function updatePic($uid, $pic)
    {
	\DB::update('user_info')
            ->value("picture", $pic)
            ->where('uid', $uid)
            ->execute();
    }
    public static function updateName($uid, $name)
    {
	\DB::update('user_info')
            ->value("firstName", $name)
            ->where('uid', $uid)
            ->execute();
    }
    public static function updateLastName($uid, $lastName)
    {
	\DB::update('user_info')
            ->value("lastName", $lastName)
            ->where('uid', $uid)
            ->execute();
    } 
}