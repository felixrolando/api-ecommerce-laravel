<?php

Route::prefix('admin/product/v1')->group(function () {
    Route::get('', 'Api\V1\Admin\Product\ProductController@index');
    Route::post('', 'Api\V1\Admin\Product\ProductController@create');
    Route::put('', 'Api\V1\Admin\Product\ProductController@update');
    Route::delete('', 'Api\V1\Admin\Product\ProductController@delete');
});
