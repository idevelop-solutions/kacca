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

Route::get('/', 'publicController@index');

Route::get('/contact', 'publicController@contact');

Route::get('/kacca-valuation-and-business-modeling', 'publicController@valuationBusinessModeling');

Route::get('/kacca-transaction-tax', 'publicController@transactionTax');

Route::get('/kacca-transaction-support', 'publicController@transactionSupport');

Route::get('/kacca-environment-management-advisory', 'publicController@environmentManagementAdvisory');

Route::get('/kacca-corporate-advisory', 'publicController@corporateAdvisory');

Route::get('/kacca-advisory-services', 'publicController@advisoryServices');

Route::get('/kacca-indirect-tax', 'publicController@indirectTax');

Route::get('/kacca-transfer-pricing', 'publicController@transferPricing');

Route::get('/kacca-international-tax', 'publicController@internationTax');

Route::get('/kacca-business-receipt-tax', 'publicController@businessReceiptTax');

Route::get('/kacca-business-tax-service', 'publicController@businessTaxService');

Route::get('/kacca-tax-compilance', 'publicController@taxCompilance');

Route::get('/kacca-management-assurance', 'publicController@managementAssurance');

Route::get('/kacca-information-system-assurance', 'publicController@informationSystemAssurance');

Route::get('/kacca-audit-accounting', 'publicController@auditAccounting');

Route::get('/kacca-our-team', 'publicController@ourTeam');

Route::get('/kacca-mission-vision', 'publicController@missionVision');

Route::get('/kacca-history', 'publicController@history');

Route::get('/kacca-history', 'publicController@history');





// Authintication routes scaffolding
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
