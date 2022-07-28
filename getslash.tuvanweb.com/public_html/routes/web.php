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
Route::group(['middleware' => 'locale'], function () {


    // Route::get('career/{slug}', 'IndexController@getSingleRecruitments')->name('pages.recruitments.single');
    // Route::get('tags/{slug}', 'IndexController@getTagsNews')->name('pages.tags.post');





    Route::get('career', 'IndexController@getPageRecruitments')->name('pages.recruitments');
    Route::get('/', 'IndexController@getHome')->name('pages.index');
    Route::get('/home-merchant', 'IndexController@getForShop')->name('pages.forshop');
    Route::get('shop', 'IndexController@getShop')->name('pages.shop');
    Route::get('faq-merchant', 'IndexController@getFaqmerchant')->name('pages.faq-merchant');
    Route::post('faq-merchant', 'IndexController@getFaqmerchant');
    Route::get('faq', 'IndexController@getFaq')->name('pages.faq');
    Route::post('faq', 'IndexController@getFaq')->name('pages.post.faq');
    Route::get('press', 'IndexController@getPress')->name('pages.press');
    Route::get('press/{slug}', 'IndexController@getSinglePress')->name('press.single');
    Route::get('toturial', 'IndexController@getToturial')->name('pages.toturial');
    Route::get('about', 'IndexController@getAbout')->name('pages.about');
    Route::get('contact', 'IndexController@getContact')->name('pages.contact');
    Route::post('contact', 'IndexController@postContact')->name('pages.contact.post');
    Route::get('news', 'IndexController@getArchiveNews')->name('pages.post');
    Route::get('news/{slug}', 'IndexController@getSingleNews')->name('pages.post.single');
    Route::get('category/{slug}', 'IndexController@getCategoriesNews')->name('pages.category.post');
    Route::post('contact-popup', 'IndexController@postContactpopup')->name('pages.contact.postpopup');





});


Route::group(['namespace' => 'Admin'], function () {

    Route::group(['prefix' => 'backend', 'middleware' => 'auth'], function () {
       	Route::get('/home', 'HomeController@index')->name('backend.home');

        Route::resource('users', 'UserController', ['except' => [
            'show'
        ]]);

        $routes = config('admin.route');

        foreach ($routes as $key => $route) {
            Route::resource($key, ucfirst($key).'Controller', ['except' => ['show']] );
            if($route['multi_del'] == true){
                Route::post( $key.'/postMultiDel', ['as' => $key.'.postMultiDel', 'uses' => ucfirst($key).'Controller@deleteMuti']);
            }
        }
        Route::get('recruitments/get-slug', 'RecruitmentsController@getAjaxSlug')->name('recruitments.get-slug');
        Route::get('styles/get-slug', 'StylesController@getAjaxSlug')->name('styles.get-slug');
        
        

        Route::resource('posts', 'PostController', ['except' => ['show']]);
        Route::post('posts/postMultiDel', ['as' => 'posts.postMultiDel', 'uses' => 'PostController@deleteMuti']);
        Route::get('posts/get-slug', 'PostController@getAjaxSlug')->name('posts.get-slug');
        Route::resource('category', 'CategoryController', ['except' => ['show']]);

        Route::group(['prefix' => 'pages'], function() {
            Route::get('/', ['as' => 'pages.list', 'uses' => 'PagesController@getListPages']);
            Route::get('build', ['as' => 'pages.build', 'uses' => 'PagesController@getBuildPages']);
            Route::post('build', ['as' => 'pages.build.post', 'uses' => 'PagesController@postBuildPages']);
            Route::post('/create', ['as' => 'pages.create', 'uses' => 'PagesController@postCreatePages']);
        });

        Route::group(['prefix' => 'options'], function() {
            Route::get('/general', 'SettingController@getGeneralConfig')->name('backend.options.general');
            Route::post('/general', 'SettingController@postGeneralConfig')->name('backend.options.general.post');

            Route::get('/dev', 'SettingController@getDeveloperConfig')->name('backend.options.developer-config');
            Route::post('/developer-config', 'SettingController@postDeveloperConfig')->name('backend.options.developer-config.post');

            Route::get('/smtp', 'SettingController@getSmtpConfig')->name('backend.options.smtp-config');
            Route::post('/smtp-config', 'SettingController@postSmtpConfig')->name('backend.options.smtp-config.post');
            Route::post('/send-mail-test', 'SettingController@postSendTestEmail')->name('backend.options.send-mail.post');

        });

        Route::group(['prefix' => 'menu'], function () {
            Route::get('/', ['as' => 'setting.menu', 'uses' => 'MenuController@getListMenu']);
            Route::get('edit/{id}', ['as' => 'backend.config.menu.edit', 'uses' => 'MenuController@getEditMenu']);
            Route::post('add-item/{id}', ['as' => 'setting.menu.addItem', 'uses' => 'MenuController@postAddItem']);
            Route::post('update', ['as' => 'setting.menu.update', 'uses' => 'MenuController@postUpdateMenu']);
            Route::get('delete/{id}', ['as' => 'setting.menu.delete', 'uses' => 'MenuController@getDelete']);
            Route::get('edit-item/{id}', ['as' => 'setting.menu.geteditItem', 'uses' => 'MenuController@getEditItem']);
            Route::post('edit', ['as' => 'setting.menu.editItem', 'uses' => 'MenuController@postEditItem']);
        });

        Route::group(['prefix' => 'contact'], function () {
            Route::get('/', ['as' => 'get.list.contact', 'uses' => 'ContactController@getListContact']);
            Route::post('/delete-muti', ['as' => 'contact.postMultiDel', 'uses' => 'ContactController@postDeleteMuti']);
            Route::get('{id}/edit', ['as' => 'contact.edit', 'uses' => 'ContactController@getEdit']);
            Route::post('{id}/edit', ['as' => 'contact.post', 'uses' => 'ContactController@postEdit']);
            Route::delete('{id}/delete', ['as' => 'contact.destroy', 'uses' => 'ContactController@getDelete']);
        });
        Route::resource('categories-post', 'CategoriesPostController', ['except' => [
            'show','create'
        ]]);

        Route::get('/get-layout', 'HomeController@getLayOut')->name('get.layout');

    });
});

Auth::routes(
    [
        'register' => false,
        'verify' => false,
        'reset' => false,
    ]
);
