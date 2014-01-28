<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 15/10/13
 * Time: 5:05 PM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Test_Controller extends Admin_Base_Controller{
    public $restful=true;

    public function get_Index()
    {

        return View::make('admin::test.add_test');
    }
    public function get_EditTest($id)
    {
        return View::make('admin::test.add_test')
            ->with('test',Test::viewTestByID($id));
    }
    public function get_DeleteTest($id)
    {
        $res=Test::deleteTestByID($id);
        if($res)
        {
            return Redirect::to_route('ViewTest')
                ->with('status','Deleted Successfully');
        }
        else{
            return Redirect::to_route('ViewTest')
                ->with('status','Fail to Delete');
        }
    }
    public function get_ViewTest()
    {
        return View::make('admin::test.view_test')
            ->with('test',Test::viewTest());
    }
    public function post_AddTest()
    {
        $test_id=Input::get('test_id');
        $test_name=Input::get('test_name');
        $total_marks=Input::get('total_marks');
        if($test_id!=NULL)
        {
           $data= array(

               'test_name'=>$test_name,
               'test_total_marks'=>$total_marks
           );
            $res=Test::updateTest($data,$test_id);
            if($res){
            $status="Your Test is Updated Successfully";
                return Redirect::to_route('ViewTest')
                    ->with('status',$status);
            }
            else{
                $status="Your Not Modified";
                return Redirect::to_route('ViewTest')
                    ->with('status',$status);
            }

        }
        else
        {
        $data=array(
            'test_name'=>$test_name,
            'test_total_marks'=>$total_marks
            );
        $res=Test::addTest($data);
            $status="Your Test is Added Successfully";
        }

        if($res)
        {
           return Redirect::to('admin/test')
               ->with('status',$status);

        }
        else
        {
            echo "fail";
        }
    }

}