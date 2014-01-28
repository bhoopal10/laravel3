<?php

class Admin_Home_Controller extends Admin_Base_Controller {

public $restful=true;


    public function get_home()
    {
        return View::make('admin::home.index');
    }

}