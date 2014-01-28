<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 16/10/13
 * Time: 12:59 PM
 * To change this template use File | Settings | File Templates.
 */

class User extends Eloquent {
    public static $table='user';
    public static function addUser($data)
    {
        $res=DB::table(self::$table)
            ->insert($data);
        return $res;
    }
    public static function viewUser($paginate=false,$filter='')
    {
        if($paginate==false && !isset($filter))
        {
            $res=DB::table(self::$table)
                ->get();
        }
        if($paginate==true && !isset($filter))
        {
            $res=DB::table(self::$table)
                ->paginate('5');
        }
        if($paginate==true && isset($filter))
        {
            $res=DB::table(self::$table)
                ->where
                ->paginate('5');
        }

        $res=DB::table(self::$table)
            ->get();
        return $res;
//       $a=new ReflectionMethod('DB','table');
//        return $a->invokeArgs(DB,array('users'));
    }
    public static function viewUserPaginate()
    {
        $res=DB::table(self::$table)
            ->paginate('5');

        return $res;
    }


    public static function viewUserByID($id)
    {
        $res=DB::table(self::$table)
            ->where('user_id','=',$id)
            ->first();
        return $res;
    }
    public static function viewUserDetailByEmail($email)
    {
        $res=DB::table(self::$table)
            ->where('user_email','=',$email)
            ->first();
        return $res;
    }
    public static function updateUserByID($data,$id)
    {
        $res=DB::table(self::$table)
            ->where('user_id','=',$id)
            ->update($data);
        return $res;
    }
    public static function deleteUserByID($id)
    {
        $res=DB::table(self::$table)
            ->where('user_id','=',$id)
            ->delete();
        return $res;
    }
    public static function addRole($data)
    {
        $res=DB::table('role')
            ->insert($data);
        return $res;
    }
    public static function viewRole()
    {
        $res=DB::table('role')
            ->get();
        return $res;
    }
    public static function roleByID($id) // userRole
    {
        $res=DB::table('role')
            ->where('role_id','=',$id)
            ->first();
        return $res;
    }


}