<?php
/**
 * Created by PhpStorm.
 * User: Martin Laundl
 * Date: 28.05.2018
 * Time: 14:15
 */

    Route::set('index.php',function(){
        Index::CreateView('Index');
    });

    Route::set('about-us',function(){
        AboutUs::CreateView('AboutUs');
        AboutUs::test();
    });

    Route::set('contact-us',function(){
        ContactUs::CreateView('ContactUs');
    });
