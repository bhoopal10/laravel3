<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 10/24/13
 * Time: 2:23 PM
 * To change this template use File | Settings | File Templates.
 */
class Admin_Cases_Controller extends Admin_Base_Controller {
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::cases.add_cases');
    }
    public function get_ViewCases()
    {
        return View::make('admin::cases.view_cases');
    }

}