<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 14/10/13
 * Time: 10:56 PM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Examination_Controller extends Admin_Base_Controller {
    public $restful=true;
    public function get_addquestion()
    {
        return View::make('admin::examination.add_question');
    }
    public function get_viewQuestion()
    {
        return View::make('admin::examination.view_question');
    }
    public function post_questionadd()
    {
        $module_id=Input::get('module_id');
        $question=Input::get('question');
        $option=json_encode(Input::get('option'));
        $marks=json_encode(Input::get('marks'));
        $data=array(
            'module_id'=>$module_id,
            'question'=>$question,
            'option'=>$option,
            'marks'=>$marks);
        $res=Examination::AddQuestion($data);
       if($res)
       {
           return "sucess";
       }
        else
        {
            return "fai";
        }
      }

    public function get_addModule()
    {
        return View::make('admin::examination.add_module');
    }
    public function get_viewModule()
    {
        return View::make('admin::examination.view_module');
    }


}