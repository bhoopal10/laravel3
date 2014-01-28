<?php

class Home_Controller extends Base_Controller {

public $restful=true;


    public function get_home()
    {
        return View::make('home.index');
    }

}