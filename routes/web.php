<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Front End Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/frontend/contact', 'FrontendController@contact')->name('contact');
Route::get('/frontend/about', 'FrontendController@about')->name('about');
Route::get('/frontend/trading', 'FrontendController@trading')->name('trading');
Route::get('/frontend/posts/{slug}',[
    'uses'=>'FrontendController@tradeSplash',
    'as'=>'frontend.tradesplash'
]);
 Route::get('/post/view/{slug}',[
    'uses'=>'FrontendController@singlePost',
    'as'=>'post.single'
 ]);
Route::get('/frontend/canvass', 'FrontendController@canvass')->name('canvass');
// Laravel 5.1.17 and above
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
Route::post('subscribe',['as'=>'subscriber','uses'=>'ContactUSController@subscribe']);

//Dashboard Routes

Route::get('dashboard', ['uses'=>'HomeController@index', 
'as'=>'dashboard'
]);

Route::get('courses', ['uses'=>'CoursesController@index', 
'as'=>'courses'
]);

Route::get('course/modules', ['uses'=>'CoursesController@show', 
'as'=>'lesson'
]);

Route::get('course/index', ['uses'=>'CoursesController@course', 
'as'=>'course.index'
]);

Route::get('profile', ['uses'=>'ProfilesController@index', 
'as'=>'profile'
]);

//Blog
Route::get('/post/create',['uses'=>'PostsController@create',
'as'=>'post.create'
]);

Route::post('/post/store',['uses'=>'PostsController@store',
'as'=>'post.store'
]);

Route::get('/post/delete/{id}',['uses'=>'PostsController@destroy',
'as'=>'post.delete'
]);

Route::get('/post/edit/{id}',['uses'=>'PostsController@edit',
'as'=>'post.edit'
]);

Route::post('/post/update/{id}',['uses'=>'PostsController@update',
'as'=>'post.update'
]);

Route::get('/posts',['uses'=>'PostsController@index',
'as'=>'posts'
]);

Route::get('/category/create',['uses'=>'CategoriesController@create',
'as'=>'category.create'
]);

Route::post('/category/store',['uses'=>'CategoriesController@store',
'as'=>'category.store'
]);

Route::get('/category/edit/{id}',['uses'=>'CategoriesController@edit',
'as'=>'category.edit'
]);
Route::get('/category/delete/{id}',['uses'=>'CategoriesController@destroy',
'as'=>'category.delete'
]);
 Route::post('/category/update/{id}',['uses'=>'CategoriesController@update',
'as'=>'category.update'
]);

Route::get('tags',[
    'uses'=>'TagsController@index',
    'as'=>'tags'
]);
Route::get('/tag/edit/{id}',[
    'uses'=>'TagsController@edit',
    'as'=>'tag.edit'
]);
Route::post('/tag/update/{id}',[
    'uses'=>'TagsController@update',
    'as'=>'tag.update'
]);

Route::post('/tag/store',[
    'uses'=>'TagsController@store',
    'as'=>'tag.store'
]);

Route::get('course/{slug}', ['uses' => 'CoursesController@show', 'as' => 'courses.show']);
Route::post('course/payment', ['uses' => 'CoursesController@payment', 'as' => 'courses.payment']);
Route::post('course/{course_id}/rating', ['uses' => 'CoursesController@rating', 'as' => 'courses.rating']);
Route::get('lesson/{course_id}/{slug}', ['uses' => 'LessonsController@show', 'as' => 'lessons.show']);
Route::post('lesson/{slug}/test', ['uses' => 'LessonsController@test', 'as' => 'lessons.test']);
// Authentication Routes...
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
// $this->post('login', 'Auth\LoginController@login')->name('auth.login');
// $this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');
// // Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
// $this->post('register', 'Auth\RegisterController@register')->name('auth.register');
// // Change Password Routes...
// $this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
// $this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');
// // Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');
Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'Admin\DashboardController@index');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('courses', 'Admin\CoursesController');
    Route::post('courses_mass_destroy', ['uses' => 'Admin\CoursesController@massDestroy', 'as' => 'courses.mass_destroy']);
    Route::post('courses_restore/{id}', ['uses' => 'Admin\CoursesController@restore', 'as' => 'courses.restore']);
    Route::delete('courses_perma_del/{id}', ['uses' => 'Admin\CoursesController@perma_del', 'as' => 'courses.perma_del']);
    Route::resource('lessons', 'Admin\LessonsController');
    Route::post('lessons_mass_destroy', ['uses' => 'Admin\LessonsController@massDestroy', 'as' => 'lessons.mass_destroy']);
    Route::post('lessons_restore/{id}', ['uses' => 'Admin\LessonsController@restore', 'as' => 'lessons.restore']);
    Route::delete('lessons_perma_del/{id}', ['uses' => 'Admin\LessonsController@perma_del', 'as' => 'lessons.perma_del']);
    Route::resource('questions', 'Admin\QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'Admin\QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::post('questions_restore/{id}', ['uses' => 'Admin\QuestionsController@restore', 'as' => 'questions.restore']);
    Route::delete('questions_perma_del/{id}', ['uses' => 'Admin\QuestionsController@perma_del', 'as' => 'questions.perma_del']);
    Route::resource('questions_options', 'Admin\QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'Admin\QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    Route::post('questions_options_restore/{id}', ['uses' => 'Admin\QuestionsOptionsController@restore', 'as' => 'questions_options.restore']);
    Route::delete('questions_options_perma_del/{id}', ['uses' => 'Admin\QuestionsOptionsController@perma_del', 'as' => 'questions_options.perma_del']);
    Route::resource('tests', 'Admin\TestsController');
    Route::post('tests_mass_destroy', ['uses' => 'Admin\TestsController@massDestroy', 'as' => 'tests.mass_destroy']);
    Route::post('tests_restore/{id}', ['uses' => 'Admin\TestsController@restore', 'as' => 'tests.restore']);
    Route::delete('tests_perma_del/{id}', ['uses' => 'Admin\TestsController@perma_del', 'as' => 'tests.perma_del']);
    Route::post('/spatie/media/upload', 'Admin\SpatieMediaController@create')->name('media.upload');
    Route::post('/spatie/media/remove', 'Admin\SpatieMediaController@destroy')->name('media.remove');

    
});