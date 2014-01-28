<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 15/10/13
 * Time: 7:00 PM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Module_Controller extends Admin_Base_Controller{
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::module.add_module')
            ->with('data',Test::viewTest());
    }
    public function get_EditModule($id)
    {
        return View::make('admin::module.add_module')
            ->with('module',Module::viewModuleByID($id))
            ->with('data',Test::viewTest());
    }
    public function get_DeleteModule($id)
    {
        $module=Module::viewModuleByID($id);
        $module_name=$module->module_name;
        $res=Module::deleteModuleByID($id);
        if($res)
        {
            return Redirect::to_route('ViewModule')
                ->with('status',$module_name.' is Deleted Successfully.');
        }
        else
        {
            return Redirect::to_route('ViewModule')
                ->with('status',$module_name.' is Fail to Delete.');
        }

    }
    public function  post_AddModule()
    {
        $module_id=Input::get('module_id');
        $module_name=Input::get('module_name');
        $test_id=Input::get('test_id');

        if($module_name!=NULL)
        {
            if($module_id!=NULL)
            {
                $data=array(
                    'module_name'=>$module_name,
                    'test_id'=>$test_id
                );

                $res=Module::addModule($data);
                if($res)
                {
                    return Redirect::to_action('admin::module@Index')
                        ->with('status','Module is added successfully');
                }
                else{
                    return Redirect::to_action('admin::module@Index')
                        ->with('status','Module is  Failed to Add Try again');
                }
            }
            else
            {
                $data=array(
                    'module_name'=>$module_name,
                    'test_id'=>$test_id
                );
                $res=Module::updateModuleByID($data,$module_id);
                if($res)
                {
                    return Redirect::to_action('admin::module@Index')
                        ->with('status','Module is Updated successfully');
                }
                else
                {
                    return Redirect::to_action('admin::module@Index')
                        ->with('status','Module is  Failed to Upload Try again');
                }
            }
        }
        else
        {
            return Redirect::to_action('admin::module@Index')
                ->with('status','Module is  Failed to Add Try again');
        }
    }
    public function get_ViewModule()
    {
        return View::make('admin::module.view_module')
            ->with('data',Module::viewModule());
    }

}