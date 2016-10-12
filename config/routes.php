<?php

return array(
    'filldb' => 'filldb/index',
    
    'product/([0-9]+)' => 'product/view/$1',                        //actionView in ProductController
    
    'catalog' => 'catalog/index',                                   //actionIndex in CatalogController
    
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',  //actionCategory in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1',                   //actionCategory in CatalogController
    
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    
    
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart/checkout' => 'cart/checkout',
    'cart' => 'cart/index',
    
    '' => 'site/index'                                              //actionIndex in SiteController
);