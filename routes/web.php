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

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
    // your CRUD resources and other admin routes here
    CRUD::resource('area', 'AreaCrudController');
     CRUD::resource('user', 'UserCrudController');
      CRUD::resource('tax', 'TaxCrudController');
       CRUD::resource('AppStatus', 'AppStatusCrudController');
     CRUD::resource('contact_data', 'Contact_dataCrudController');
        CRUD::resource('delivery_user', 'Delivery_userCrudController');
    CRUD::resource('delivery', 'DeliveryCrudController');
      CRUD::resource('discount', 'DiscountCrudController');
      CRUD::resource('enquiry', 'EnquiryCrudController');
    CRUD::resource('litre', 'LitreCrudController');
     CRUD::resource('modify', 'ModifyCrudController');
     CRUD::resource('order_history', 'Order_historyCrudController');
    CRUD::resource('products', 'ProductsCrudController');
     CRUD::resource('purity', 'PurityCrudController');
   CRUD::resource('special_offer', 'Special_offerCrudController');




});