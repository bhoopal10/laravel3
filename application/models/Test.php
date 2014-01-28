<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 15/10/13
 * Time: 5:34 PM
 * To change this template use File | Settings | File Templates.
 */

class Test extends Eloquent {
    public static $table='tests';
    public static function addTest($data)
    {
        $res=DB::table(self::$table)
            ->insert_get_id($data);
       return $res;
    }
    public static function viewTest()
    {
        $res=DB::table(self::$table)
            ->get();
        return $res;
    }
    public static function viewTestByID($id)
    {
        $res=DB::table(self::$table)
            ->where('test_id','=',$id)
            ->first();
        return $res;
    }
    public static function updateTest($data,$id)
    {
        $res=DB::table(self::$table)
            ->where('test_id','=',$id)
            ->update($data);
        return $res;
    }
    public static function deleteTestByID($id)
    {
        $res=DB::table(self::$table)
        ->where('test_id','=',$id)
            ->Delete();
        return $res;
    }

}