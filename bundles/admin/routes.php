<?php


Route::get('(:bundle)',array('as'=>'Home','uses'=>'admin::home@home'));


Route::get('(:bundle)/test',array('as'=>'Test','uses'=>'admin::test@Index'));
Route::get('(:bundle)/test/edit/(:any)',array('as'=>'TestEdit','uses'=>'admin::test@EditTest'));
Route::post('(:bundle)/test/add',array('as'=>'AddTest','uses'=>'admin::test@AddTest'));
Route::get('(:bundle)/test/view',array('as'=>'ViewTest','uses'=>'admin::test@ViewTest'));
Route::get('(:bundle)/test/delete/(:any)',array('as'=>'TestDelete','uses'=>'admin::test@DeleteTest'));

Route::get('(:bundle)/module',array('as'=>'Module','uses'=>'admin::module@Index'));
Route::post('(:bundle)/module/add',array('as'=>'AddModule','uses'=>'admin::module@AddModule'));
Route::get('(:bundle)/module/view',array('as'=>'ViewModule','uses'=>'admin::module@ViewModule'));
Route::get('(:bundle)/module/edit/(:any)',array('as'=>'EditModule','uses'=>'admin::module@EditModule'));
Route::get('(:bundle)/module/delete/(:any)',array('as'=>'DeleteModule','uses'=>'admin::module@DeleteModule'));


Route::get('(:bundle)/questions',array('as'=>'Questions','uses'=>'admin::question@Index'));
Route::post('(:bundle)/questions/add',array('as'=>'AddQuestions','uses'=>'admin::question@AddQuestions'));
Route::get('(:bundle)/questions/view',array('as'=>'ViewQuestions','uses'=>'admin::question@ViewQuestions'));

Route::get('(:bundle)/User',array('as'=>'User','uses'=>'admin::user@Index'));
Route::post('(:bundle)/User/add',array('as'=>'AddUser','uses'=>'admin::user@AddUser'));
Route::get('(:bundle)/User/view',array('as'=>'ViewUser','uses'=>'admin::user@ViewUser'));
Route::get('(:bundle)/User/edit/(:any)',array('as'=>'EditUser','uses'=>'admin::user@EditUser'));
Route::get('(:bundle)/User/delete/(:any)',array('as'=>'DeleteUser','uses'=>'admin::user@DeleteUser'));
Route::post('(:bundle)/user/action',array('as'=>'Action','uses'=>'admin::user@Action'));
Route::post('(:bundle)/user/add-file',array('as'=>'UserFile','uses'=>'admin::user@File'));
Route::get('(:bundle)/user/role',array('as'=>'Role','uses'=>'admin::user@Role'));
Route::post('(:bundle)/user/role/add',array('as'=>'AddRole','uses'=>'admin::user@AddRole'));
Route::post('(:bundle)/user/role/Assign-role',array('as'=>'AssignRole','uses'=>'admin::user@AssignRoleToUser'));


Route::get('(:bundle)/cases',array('as'=>'Cases','uses'=>'admin::cases@Index'));
Route::get('(:bundle)/cases/view-cases',array('as'=>'ViewCases','uses'=>'admin::cases@ViewCases'));

Route::get('(:bundle)/contacts',array('as'=>'Contacts','uses'=>'admin::contact@Index'));
Route::get('(:bundle)/contacts/view-contacts',array('as'=>'ViewContacts','uses'=>'admin::contact@ViewContacts'));

Route::get('(:bundle)/appointment',array('as'=>'Appointment','uses'=>'admin::appointment@Index'));
Route::get('(:bundle)/appointment/view',array('as'=>'ViewAppointment','uses'=>'admin::appointment@ViewAppointment'));

Route::get('(:bundle)/document',array('as'=>'Documents','uses'=>'admin::document@Index'));
Route::get('(:bundle)/document/view-documents',array('as'=>'ViewDocuments','uses'=>'admin::document@ViewDocuments'));

Route::get('(:bundle)/tasks',array('as'=>'Tasks','uses'=>'admin::task@Index'));
Route::get('(:bundle)/tasks/view-tasks',array('as'=>'ViewTasks','uses'=>'admin::task@ViewTasks'));

Route::get('(:bundle)/calender',array('as'=>'Calender','uses'=>'admin::calender@Index'));


/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});