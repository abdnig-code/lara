<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('document', 'DocumentCrudController');
    Route::crud('city', 'CityCrudController');
    Route::crud('department', 'DepartmentCrudController');
    Route::crud('vacancy_categories', 'VacancyCategoryCrudController');
    Route::crud('vacancies', 'VacancyCrudController');
    Route::crud('employee', 'EmployeeCrudController');
    Route::crud('feedback', 'FeedbackCrudController');
    Route::crud('faq', 'FaqCrudController');
}); // this should be the absolute last line of this file