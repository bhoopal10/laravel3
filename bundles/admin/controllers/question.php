<?php


class Admin_Question_Controller extends Admin_Base_Controller{
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::questions.add_questions')
            ->with('data',Module::viewModule());
    }
    public function  post_AddQuestions()
    {
        $question_name=Input::get('question');
        $module_id=Input::get('module_id');
        $options=Input::get('options');
        $marks=Input::get('marks');
        $option=array();
        $i=0;
        foreach($options as $value)
        {
            $opt=array($value=>$marks[$i]);
            array_push($option,$opt);
            $i++;
        }

        $option_marks=json_encode($option);
        $data=array(
            'question'=>$question_name,
            'module_id'=>$module_id,
            'options'  =>$option_marks
        );
        $res=Question::addQuestion($data);
        if($res)
        {
            return Redirect::to_action('admin::question@Index');
        }
        else{
            echo "fail";
        }
    }
    public function get_ViewQuestions()
    {
        return View::make('admin::questions.view_questions')
            ->with('data',Question::viewQuestions());
    }

}