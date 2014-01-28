<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 10/26/13
 * Time: 7:40 PM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Document_Controller extends Admin_Base_Controller
{
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::documents.add_document');
    }
    public function get_ViewDocuments()
    {
        return View::make('admin::documents.view_document');
    }

}