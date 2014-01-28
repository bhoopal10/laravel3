<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 14/10/13
 * Time: 11:26 PM
 * To change this template use File | Settings | File Templates.
 */

class Examination extends Eloquent {
    public static $table="add_question";
    public static $timestamp=false;
    public static  function AddQuestion($data)
    {
        $res=DB::table(self::$table)
            ->insert_get_id($data);
        return $res;
    }
}