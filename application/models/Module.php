<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 15/10/13
 * Time: 7:15 PM
 * To change this template use File | Settings | File Templates.
 */

class Module extends Eloquent {
    public static $table='module';
    public static function addModule($data)
    {
        $res=DB::table(self::$table)
            ->insert_get_id($data);
        return $res;
    }
    public static function viewModule()
    {
        $res=DB::table(self::$table)
            ->get();
        return $res;
    }
    public static function viewModuleByID($id)
    {
        $res=DB::table(self::$table)
            ->where('module_id','=',$id)
            ->first();
        return $res;

    }
    public static function updateModuleByID($data,$id)
    {
        $res=DB::table(self::$table)
            ->where('module_id','=',$id)
            ->update($data);
        return $res;
    }
    public static function deleteModuleByID($id)
    {
        $res=DB::table(self::$table)
            ->where('module_id','=',$id)
            ->delete();
        return $res;
    }


}