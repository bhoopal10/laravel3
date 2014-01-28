<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 10/25/13
 * Time: 11:58 AM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Contact_Controller extends Admin_Base_Controller {
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::contact.add_contact');
    }
    public function get_ViewContacts()
    {
        return View::make('admin::contact.view_contacts');
    }

}