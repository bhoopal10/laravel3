<?php
class Authentication extends Eloquent
{
    /**
     * @param $id
     * @return mixed
     */
    public function userRoles($id)
    {
        $res=DB::table('role')
            ->where('role_id','=',$id)
            ->first();
        return $res;
    }

    public static function allRoles()
    {
        $res=DB::table('role')

                ->get(array('role_id','role_name'));
        return $res;
    }
}
?>