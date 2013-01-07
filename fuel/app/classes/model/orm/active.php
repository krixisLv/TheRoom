<?php

class Model_Orm_Active extends Orm\Model {

    protected static $_table_name = 'active';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
        'id',
	'name' => array(
	    'data_type' => 'varchar'),
        'group' => array(
	    'data_type' => 'int'),
        'updated_at'
    );
    protected static $_observers = array(
            'Orm\Observer_UpdatedAt' => array(
                    'events' => array('before_save'),
                    'mysql_timestamp' => true,
            ),
    );
    public static function check_active()
    {
	return \DB::select('id','name')
		    ->from('active')
                    ->where('updated_at', '<', time()-3600)
		    ->execute()
		    ->as_array('id','name');
    }
    public static function get_active()
    {
	return \DB::select('id','name')
		    ->from('active')
                    ->where('group',1)
                    ->where('updated_at', '>=', time()-3600)
		    ->execute()
		    ->as_array('id','name');
    }
    public static function get_active_mods()
    {
	return \DB::select('id','name')
		    ->from('active')
                    ->where('group',50)
		    ->execute()
		    ->as_array('id','name');
    }
    public static function remove_active($name)
    {
	// prepare an update statement
        $query = DB::delete('active');

        // Set a where statement
        $query->where('name', $name);
        $query->execute();
    }
}