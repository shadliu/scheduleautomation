<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard.index');

    // Fontend Controller Routes
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::post('search/train', [FrontendController::class, 'search_train'])->middleware(['auth'])->name('search.train');
    Route::get('aboutus', [FrontendController::class, 'aboutus'])->name('aboutus');
    Route::get('address', [FrontendController::class, 'address'])->name('address');
    Route::get('booking', [FrontendController::class, 'booking'])->name('booking');
    Route::get('car/service', [FrontendController::class, 'car_service'])->name('car.service');
    Route::get('carrent', [FrontendController::class, 'carrent'])->name('carrent');
    Route::post('contact/message', [FrontendController::class, 'contactmessage'])->name('contact.message');


    Route::get('contactus', [FrontendController::class, 'contactus'])->name('contactus');



    Route::resources([
        'addproperty' => 'AddPropertyController',
    ]);


    // Route::get('subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');
    // Route::get('business/scope', [FrontendController::class, 'business_scope'])->name('business.scope');
    // Route::get('features/capabilities', [FrontendController::class, 'features_capabilities'])->name('features.capabilities');
    // Route::get('our/partner', [FrontendController::class, 'ourpartner'])->name('our.partner');
    // Route::get('qualification/training', [FrontendController::class, 'qualification_training'])->name('qualification.training');
    // Route::get('our/services', [FrontendController::class, 'service'])->name('service');
    // Route::get('contactus', [FrontendController::class, 'contactus'])->name('contactus');
    // Route::get('blog/details/{slug}', [FrontendController::class, 'blogdetails'])->name('blog.details');

    // Dashboard Routes

    Route::group(
        ['namespace' => 'User', 'middleware' => 'auth'],
        function () {
            Route::get('dashboard', 'UserDashboardController@index')->name('dashboard.index');
            Route::get('user/logout', 'UserDashboardController@logout')->name('user.logout');
            Route::resources([

            ]);

            Route::get('user/profile', 'UserProfileController@index')->name('user.profile');
            Route::get('user/profile/edit', 'UserProfileController@edit')->name('user.profile.edit');
            Route::post('user/profile/update', 'UserProfileController@update')->name('user.profile.update');
            Route::get('user/setting', 'UserProfileController@setting')->name('user.setting');
            Route::post('user/setting/update', 'UserProfileController@changepassword')->name('user.setting.update');
        }
    );


    // Admin panel Routes
    Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {

        Route::get('admin/dashboard', 'DashboardController@index')->name('admin.index');

        Route::resources([
            'categories' => 'CategoryController',
            'users' => 'UserController',
            'service' => 'ServiceController',
            'newarrivals' => 'NewArrivalsController',
            'admin/visitor/querstion' => 'VisitorQueryController',
            // 'blogcategories' => 'BlogCategoryController',
            // 'blogs' => 'BlogController',
            // 'admin/subscriber' => 'SubscribeController',
            // 'properties' => 'PropertyController',
            // 'consultant/request' => 'RentConsultantController',
        ]);

        Route::get('admin/profile', 'ProfileController@index')->name('admin.user.profile');
        Route::get('admin/profile/edit', 'ProfileController@edit')->name('admin.user.profile.edit');
        Route::post('admin/profile/update', 'ProfileController@update')->name('admin.user.profile.update');
        Route::get('admin/setting', 'ProfileController@setting')->name('admin.user.setting');
        Route::post('admin/setting/update', 'ProfileController@changepassword')->name('admin.user.setting.update');
    });





require __DIR__.'/auth.php';
