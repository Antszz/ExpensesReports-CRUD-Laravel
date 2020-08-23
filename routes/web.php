<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/expense_reports', 'ExpenseReportController');

Route::get('/expense_reports/{id}/confirm_delete','ExpenseReportController@confirmDelete')->name('expense_reports.confirmDelete');
Route::get('/expense_reports/{id}/confirmEmail','ExpenseReportController@confirmEmail')->name('expense_reports.confirmEmail');

Route::post('/expense_reports/{id}/sendEmail','ExpenseReportController@sendEmail')->name('expense_reports.sendEmail');

Route::get('/expense_reports/{id}/expenses/prueba','ExpenseController@prueba')->name('expense_reports.expenses.prueba');

Route::resource('/expense_reports.expenses','ExpenseController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
