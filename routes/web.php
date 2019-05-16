<?php

Route::get('/painel/produtos/testes', 'Painel\ProdutoController@tests');
Route::resource('/painel/produtos', 'Painel\ProdutoController');

Route::group(['namespace' => 'Site'], function(){
    Route::get('/', 'SiteController@index');
    Route::get('/categoria', 'SiteController@categoria');
    Route::get('/contato', 'SiteController@contato');
});
