<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 18/10/13
 * Time: 12:50 PM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Login_Controller extends Admin_Base_Controller  {
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::login.admin_login');
    }
    public function post_AdminAuth()
    {
        $username=Input::get('username');
        $password=Input::get('password');
        $credential=array(
            'username'=>$username,
            'password'=>$password
        );
        if(Auth::attempt($credential))
        {
            return Redirect::to_route('Home');
        }
        else
        {
            return Redirect::to_route('/')
                ->with('status',"authentication failed");
        }
    }

}