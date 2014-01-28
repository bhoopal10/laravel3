<?php


class Admin_User_Controller extends Admin_Base_Controller {
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::user.add_user');
    }
    public function get_EditUser($id)
    {
        return View::make('admin::user.add_user')
            ->with('user',User::viewUserByID($id));

    }
    public function get_ViewUser()
    {
        return View::make('admin::user.view_user')
            ->with('user',User::viewUser())
            ->with('users',User::viewUserPaginate())
            ->with('role_id',User::viewRole());


//    $res=User::viewUser(false,'');
//
//        print_r($res);
    }
    public function get_DeleteUser($id)
    {
        $user=User::viewUserByID($id);
        $user_fname=$user->user_fname;;
        $res=User::deleteUserByID($id);
        if($res)
        {
            return Redirect::to_route('ViewUser')
                ->with('status',$user_fname.' is Deleted Successfully');
        }
        else
        {
            return Redirect::to_route('ViewUser')
                ->with('status',$user_fname.' is Failed to Delete');
        }
    }
    public function post_AddUser()
    {
        $user_id=Input::get('user_id');
        $user_fname=Input::get('user_fname');
        $user_lname=Input::get('user_lname');
        $user_email=Input::get('user_email');
        $user_password=Hash::make(Input::get('user_password'));

        if($user_id!=NULL)
        {
            $data=array(
                'user_fname'=>$user_fname,
                'user_lname'=>$user_lname,
                'user_email'=>$user_email,
                'user_password'=>$user_password
            );
            $res=User::updateUserByID($data,$user_id);
            if($res)
            {
                return Redirect::to_route('ViewUser')
                    ->with('status',$user_fname.' is Updated Successfully');
            }
            else{
                return Redirect::to_route('ViewUser')
                    ->with('status',$user_fname.' is Failed to Update');
            }
        }
        else
        {
            $data=array(
                'user_fname'=>$user_fname,
                'user_lname'=>$user_lname,
                'user_email'=>$user_email,
                'user_password'=>$user_password
            );
            $res=User::addUser($data);
            if($res)
            {
                return Redirect::to_route('User')
                    ->with('status',$user_fname.' is Added Successfully');
            }
            else
            {
                return Redirect::to_route('User')
                    ->with('status',$user_fname.' is Fail to Add Try Again');
            }
        }
    }
    public function post_Action()
    {
        $options=Input::get('check');
        $action=Input::get('action');
        if($options==NULL)
        {
            return Redirect::to_route('ViewUser')
                ->with('status','Your Not Select any User');
        }

        if($action=='delete')
        {
          for($i=0;$i<count($options);$i++)
          {
              $res=User::deleteUserByID($options[$i]);
          }
          return Redirect::to_route('ViewUser')
              ->with('status','Deleted');
        }
        if($action=='activate')
        {

            for($i=0;$i<count($options);$i++)
            {
                $status=User::viewUserByID($options[$i]);
                $state=$status->status;
                if($state!='activate' || $state==NULL)
                {
                    $data=array('status'=>'activate');
                    $res=User::updateUserByID($data,$options[$i]);
                }

            }
            return Redirect::to_route('ViewUser')
                ->with('status','Activated');
        }
        if($action=='deactivate')
        {
            for($i=0;$i<count($options);$i++)
            {
                $status=User::viewUserByID($options[$i]);
                $state=$status->status;
                if($state!='deactivate' || $state==NULL)
                {
                    $data=array('status'=>'deactivate');
                    $res=User::updateUserByID($data,$options[$i]);
                }

            }
            return Redirect::to_route('ViewUser')
                ->with('status','Deactivated');
        }



    }
    public function post_File()
    {

        $file=Input::file('user');
        $path=$file['tmp_name'];
        if($path!=NULL)
        {

            $handle=fopen($path,'r');

            while (($cols = fgetcsv($handle, 1000, "\t")) !== FALSE) {
                foreach( $cols as $key => $val  ) {
                    $cols[$key] = trim( $cols[$key] );
                    foreach($cols as $v)
                        $user=explode(",",$v);
                    $data=array(
                        'user_fname'=>$user[0],
                        'user_lname'=>$user[1],
                        'user_email'=>$user[2],
                        'user_password'=>Hash::make(Str::random(8))
                    );
                    $res=User::addUser($data);
                }

            }
            return Redirect::to_route('User')
                ->with('status','File Users are Uploaded Successfully');

         }
        else
        {
            return Redirect::to_route('User')
                ->with('status','your Not Select Any file');
        }
    }
    public function get_Role()
    {
        return View::make('admin::user.add_roles')
            ->with('user',User::viewUser())
            ->with('role_id',User::viewRole());
    }
    public function post_AddRole()
    {
        $role=Input::get('role');
        $data=array('role_name'=>$role);
        if($role!=NULL)
        {
            $res=User::addRole($data);
            if($res)
            {
                return Redirect::to_route('Role')
                    ->with('status',$role." is Added Successfully");
            }
            else
            {
                return Redirect::to_route('Role')
                    ->with('status',$role." is Failed to Add");
            }
        }
        else
        {
            return Redirect::to_route('Role')
                ->with('status',"Your Not Add Any Data");
        }
    }
    public function post_AssignRoleToUser()
    {
        $user_id=Input::get('user_id');
        $role_id=Input::get('role_id');
        $option=array();
        foreach($role_id as $role)
        {
            array_push($option,$role);
        }
      $value=json_encode($option);
        $data=array(
            'roles'=>$value
        );
        $res=User::updateUserByID($data,$user_id);
        if($res)
        {
            return Redirect::to_route('ViewUser')
                ->with('status',"Role Assigned  Successfully");
        }
        else
        {
            return Redirect::to_route('ViewUser')
                ->with('status',"Failed to Assign role");
        }
    }






}