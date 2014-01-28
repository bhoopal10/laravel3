<?php

class Admin_Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */


    public function __construct()
    {


        Asset::container('header')->add('bootstrap','http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css');
        Asset::container('header')->add('bootstrap-res', 'public/css/bootstrap-responsive.min.css');
//        Asset::container('header')->add('jquery', 'js/jquery.js');
        /*        Asset::container('header')->add('site-js', 'js/jansy.min.js');*/
        Asset::container('header')->add('site-css','public/css/style.css');
        Asset::container('header')->add('jbootstrapjs', 'public/js/bootstrap.min.js','jquery');
        Asset::container('header')->add('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
        Asset::container('header')->add('jquery-9','public/js/jquery-1.9.1.js');
        Asset::container('header')->add('jquery-ui','public/js/jquery-ui.js');
//        Asset::container('header')->add('dropdown','http://twitter-bootstrap.node1.zygote.cc/js/bootstrap-dropdown.js');

        Asset::container('header')->add('angular-js','https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js');
//        Asset::container('header')->add('angular-js','js/angular.js');
        Asset::container('header')->add('font-awesome','http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css');
//        Asset::container('header')->add('Google-css','http://fonts.googleapis.com/css?family=Open+Sans:400,300');
        Asset::container('header')->add('Ace-css','public/css/ace.min.css');
        Asset::container('header')->add('Ace-Res','public/css/ace-responsive.min.css');
        Asset::container('header')->add('ace-skin-css','public/css/ace-skins.min.css');
        Asset::container('header')->add('jquery-us','public/css/jquery-ui.css');
        Asset::container('header')->add('date-picker','public/css/datepicker.css');
        Asset::container('header')->add('time-picker','public/css/bootstrap-timepicker.css');
        Asset::container('header')->add('calender','public/css/fullcalendar.css');


        Asset::container('footer')->add('jquery-ui','public/js/jquery-ui-1.10.3.custom.min.js');
        Asset::container('footer')->add('ace-elements-js','public/js/ace-elements.min.js');
        Asset::container('footer')->add('jquery-ui-ounch','public/js/jquery.ui.touch-punch.min.js');
        Asset::container('footer')->add('ace-js1','public/js/ace.min.js');
        Asset::container('footer')->add('app-js','public/js/app.js','angular-js');
        Asset::container('footer')->add('controller-js','public/js/controller.js','service-js');
        Asset::container('footer')->add('service-js','public/js/service.js','app-js');
        Asset::container('footer')->add('fuelux-js','public/js/fuelux.wizard.min.js','fuelux');
        Asset::container('footer')->add('validate-js','public/js/jquery.validate.min.js','validate');
        Asset::container('footer')->add('methods-js','public/js/additional-methods.min.js','methods');
        Asset::container('footer')->add('bootbox-js','public/js/bootbox.min.js','bootbox');
        Asset::container('footer')->add('maskedinput-js','public/js/jquery.maskedinput.min.js','maskedinput');
        Asset::container('footer')->add('chosen-js','public/js/chosen.jquery.min.js','chosen');
        Asset::container('footer')->add('date-picker-js','public/js/bootstrap-datepicker.min.js','date-picker');
        Asset::container('footer')->add('time-picker-js','public/js/bootstrap-timepicker.min.js','time-picker');
        Asset::container('footer')->add('calender-js','public/js/fullcalendar.min.js','calender');


        parent::__construct();
    }
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}