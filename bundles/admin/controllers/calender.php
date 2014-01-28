<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 10/28/13
 * Time: 10:28 AM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Calender_Controller extends Admin_Base_Controller{
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::calender.calender');
    }

}