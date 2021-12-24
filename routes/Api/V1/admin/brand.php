<?php

Route::prefix('admin/brand/v1')->group(function () {
    Route::get('', 'Api\V1\Admin\Brand\BrandController@index');
    Route::post('', 'Api\V1\Admin\Brand\BrandController@create');
    Route::put('', 'Api\V1\Admin\Brand\BrandController@update');
    Route::delete('', 'Api\V1\Admin\Brand\BrandController@delete');
});
