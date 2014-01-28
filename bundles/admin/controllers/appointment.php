<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 10/25/13
 * Time: 3:39 PM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Appointment_Controller extends Admin_Base_Controller {
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::appointment.add_appointment');
    }
    public function get_ViewAppointment()

    {
        return View::make('admin::appointment.view_appointment');
    }
}