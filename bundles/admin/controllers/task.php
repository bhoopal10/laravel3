<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 10/27/13
 * Time: 12:47 AM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Task_Controller extends Admin_Base_Controller
{
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::task.add_task');
    }
    public function get_ViewTasks()
    {
        return View::make('admin::task.view_task');
    }

}