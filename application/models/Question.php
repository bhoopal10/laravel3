<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 15/10/13
 * Time: 10:04 PM
 * To change this template use File | Settings | File Templates.
 */

class Question extends Eloquent {
    public static $table='question';
    public static function addQuestion($data)
    {
        $res=DB::table(self::$table)
            ->insert_get_id($data);
        return $res;
    }
    public static function viewQuestions()
    {
        $res=DB::table(self::$table)
            ->get();
        return $res;
    }

}