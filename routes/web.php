<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware'=>['web']],function(){
 Route::get("admin",['uses'=>'DashboardController@redirectAdminIndex']);    
});
  Route::group(["prefix"=>"add"],function(){    
  Route::post("permission",['uses'=>'PermissionController@savePermission']); 
  Route::post("history-action",['uses'=>'HistoryActionController@save']);
  Route::post("format-voucher",['uses'=>'FormatVoucherController@save']);
  Route::post("user",['uses'=>'UserController@save']);
  Route::post("period",['uses'=>'PeriodController@save']);
  Route::post("department",['uses'=>'DepartmentController@save']);
  Route::post("employee",['uses'=>'EmployeeController@save']);
  Route::post("timekeeper",['uses'=>'TimeKeeperController@save']);
  Route::post("timesheet",['uses'=>'TimeSheetController@save']); 
  Route::post("advance",['uses'=>'AdvanceController@save']);
  Route::post("labor-contract",['uses'=>'LaborContractController@save']);
  Route::post("overtime",['uses'=>'OvertimeController@save']);
  Route::post("payroll",['uses'=>'PayrollController@save']);
  Route::post("payroll-hour",['uses'=>'PayrollHourController@save']);
  Route::post("charge-revenue",['uses'=>'ChargeRevenueController@save']);
  Route::post("store-off",['uses'=>'StoreOffController@save']);
  Route::post("timesheet-hour",['uses'=>'TimeSheetHourController@save']); 
  Route::post("form-voucher",['uses'=>'FormVoucherController@save']); 
  });  
  Route::group(["prefix"=>"update"],function(){    
  Route::post("profile",['uses'=>'UserController@updateprofile']);
  Route::post("password",['uses'=>'UserController@changepassword']);
  Route::post("rpassword",['uses'=>'UserController@resetpassword']);
  Route::post("avatar",['uses'=>'UserController@uploadfile']);            
  Route::post("history-action",['uses'=>'HistoryActionController@delete']);  
  Route::post("format-voucher",['uses'=>'FormatVoucherController@delete']);
  Route::post("user",['uses'=>'UserController@delete']); 
  Route::post("config",['uses'=>'OptionsController@changeConfig']);
  Route::post("period",['uses'=>'PeriodController@delete']);
  Route::post("department",['uses'=>'DepartmentController@delete']);
  Route::post("employee",['uses'=>'EmployeeController@delete']);
  Route::post("timekeeper",['uses'=>'TimeKeeperController@delete']);
  Route::post("timesheet",['uses'=>'TimeSheetController@delete']);
  Route::post("advance",['uses'=>'AdvanceController@delete']);
  Route::post("labor-contract",['uses'=>'LaborContractController@delete']);
  Route::post("overtime",['uses'=>'OvertimeController@delete']);
  Route::post("payroll",['uses'=>'PayrollController@delete']);
  Route::post("payroll-hour",['uses'=>'PayrollHourController@delete']);
  Route::post("charge-revenue",['uses'=>'ChargeRevenueController@delete']);
  Route::post("store-off",['uses'=>'StoreOffController@delete']);
  Route::post("timesheet-hour",['uses'=>'TimeSheetHourController@delete']); 
  Route::post("form-voucher",['uses'=>'FormVoucherController@delete']); 
  }); 
  Route::group(["prefix"=>"import"],function(){       
  Route::post("history-action",['uses'=>'HistoryActionController@import']);   
  Route::post("format-voucher",['uses'=>'FormatVoucherController@import']);
  Route::post("user",['uses'=>'UserController@import']); 
  Route::post("period",['uses'=>'PeriodController@import']);
  Route::post("department",['uses'=>'DepartmentController@import']);
  Route::post("employee",['uses'=>'EmployeeController@import']);
  Route::post("timekeeper",['uses'=>'TimeKeeperController@import']);
  Route::post("labor-contract",['uses'=>'LaborContractController@import']);
  Route::post("charge-revenue",['uses'=>'ChargeRevenueController@import']);
  Route::post("store-off",['uses'=>'StoreOffController@import']);
  }); 
  Route::group(["prefix"=>"export"],function(){    
  Route::get("history-action",array('uses'=>'HistoryActionController@export'));  
  Route::get("format-voucher",['uses'=>'FormatVoucherController@export']);
  Route::get("user",array('uses'=>'UserController@export'));  
  Route::get("period",['uses'=>'PeriodController@export']);
  Route::get("department",['uses'=>'DepartmentController@export']);
  Route::get("employee",['uses'=>'EmployeeController@export']);
  Route::get("timekeeper",['uses'=>'TimeKeeperController@export']);
  Route::get("labor-contract",['uses'=>'LaborContractController@export']);
  Route::get("charge-revenue",['uses'=>'ChargeRevenueController@export']);
  Route::get("store-off",['uses'=>'StoreOffController@export']);
  }); 
   Route::group(["prefix"=>"get"],function(){    
    Route::post("permission",['uses'=>'PermissionController@loadPermission']);
    Route::post("timesheet",['uses'=>'TimeSheetController@load']);
    Route::post("timesheet-hour",['uses'=>'TimeSheetHourController@load']); 
    Route::post("advance",['uses'=>'AdvanceController@load']);
    Route::post("labor-contract",['uses'=>'LaborContractController@printData']);
    Route::post("load-chart",['uses'=>'DashboardController@loadChart']);
    Route::post("overtime",['uses'=>'OvertimeController@load']);
    Route::post("payroll",['uses'=>'PayrollController@load']);
    Route::post("payroll-hour",['uses'=>'PayrollHourController@load']);
    Route::post("report-store-off",['uses'=>'ReportStoreOffController@loadReport']);
    Route::post("form-voucher",['uses'=>'FormVoucherController@printData']); 
  }); 
 Route::group(['middleware' => 'check.permission'], function () { 
Route::get("/",['uses'=>'DashboardController@showIndex']);
Route::get("index",['uses'=>'DashboardController@showIndex']); 
Route::get("history-action",['uses'=>'HistoryActionController@showPage']); 
Route::get("format-voucher",['uses'=>'FormatVoucherController@showPage']);
Route::get("user",['uses'=>'UserController@showPage']); 
Route::get("lock",['uses'=>'UserController@showLock']);
Route::get("block",['uses'=>'PermissionController@showBlock']);
Route::get('permission', ['uses'=>'PermissionController@showPermission']);
Route::get("period",['uses'=>'PeriodController@showPage']);
Route::get("department",['uses'=>'DepartmentController@showPage']);
Route::get("employee",['uses'=>'EmployeeController@showPage']);
Route::get("timekeeper",['uses'=>'TimeKeeperController@showPage']);
Route::get("timesheet",['uses'=>'TimeSheetController@showPage']);
Route::get("advance",['uses'=>'AdvanceController@showPage']);
Route::get("labor-contract",['uses'=>'LaborContractController@showPage']);
Route::get("overtime",['uses'=>'OvertimeController@showPage']);
Route::get("payroll",['uses'=>'PayrollController@showPage']);
Route::get("charge-revenue",['uses'=>'ChargeRevenueController@showPage']);
Route::get("store-off",['uses'=>'StoreOffController@showPage']);
Route::get("report-store-off",['uses'=>'ReportStoreOffController@showPage']);
Route::get("timesheet-hour",['uses'=>'TimeSheetHourController@showPage']); 
Route::get("payroll-hour",['uses'=>'PayrollHourController@showPage']);
Route::get("form-voucher",['uses'=>'FormVoucherController@showPage']);
});
Route::get("logout",['uses'=>'DashboardController@doLogout']);
Route::get("login",['uses'=>'UserController@showLogin']);
Route::get("profile",['uses'=>'UserController@showProfile']);
Route::post("login",['uses'=>'UserController@doLogin']);
Route::post("lock",['uses'=>'UserController@doLogin']);



Route::group(["prefix"=>"admin"],function(){
  Route::group(["prefix"=>"add"],function(){    
  Route::post("permission",['uses'=>'PermissionController@savePermission']); 
  Route::post("menu",['uses'=>'MenuController@save']);
  Route::post("options",['uses'=>'OptionsController@save']);
  Route::post("template",['uses'=>'TemplateController@save']);
  Route::post("help-desk",['uses'=>'HelpDeskController@save']);
  Route::post("history-action",['uses'=>'HistoryActionController@save']);
  Route::post("format-voucher",['uses'=>'FormatVoucherController@save']);
  Route::post("product",['uses'=>'ProductController@save']);
  Route::post("user",['uses'=>'UserController@save']);
  Route::post("period",['uses'=>'PeriodController@save']);
  Route::post("department",['uses'=>'DepartmentController@save']);
  Route::post("employee",['uses'=>'EmployeeController@save']);
  Route::post("timekeeper",['uses'=>'TimeKeeperController@save']);
  Route::post("timesheet",['uses'=>'TimeSheetController@save']); 
  Route::post("advance",['uses'=>'AdvanceController@save']);
  Route::post("labor-contract",['uses'=>'LaborContractController@save']);
  Route::post("overtime",['uses'=>'OvertimeController@save']);
  Route::post("payroll",['uses'=>'PayrollController@save']);
  Route::post("payroll-hour",['uses'=>'PayrollHourController@save']);
  Route::post("charge-revenue",['uses'=>'ChargeRevenueController@save']);
  Route::post("store-off",['uses'=>'StoreOffController@save']);
  Route::post("timesheet-hour",['uses'=>'TimeSheetHourController@save']); 
  Route::post("form-voucher",['uses'=>'FormVoucherController@save']); 
  });  
  Route::group(["prefix"=>"update"],function(){    
  Route::post("profile",['uses'=>'UserController@updateprofile']);
  Route::post("password",['uses'=>'UserController@changepassword']);
  Route::post("rpassword",['uses'=>'UserController@resetpassword']);
  Route::post("avatar",['uses'=>'UserController@uploadfile']);    
  Route::post("menu",['uses'=>'MenuController@delete']);      
  Route::post("options",['uses'=>'OptionsController@delete']);     
  Route::post("template",['uses'=>'TemplateController@delete']);     
  Route::post("help-desk",['uses'=>'HelpDeskController@delete']);  
  Route::post("history-action",['uses'=>'HistoryActionController@delete']);  
  Route::post("format-voucher",['uses'=>'FormatVoucherController@delete']);
  Route::post("user",['uses'=>'UserController@delete']); 
  Route::post("config",['uses'=>'OptionsController@changeConfig']);
  Route::post("period",['uses'=>'PeriodController@delete']);
  Route::post("department",['uses'=>'DepartmentController@delete']);
  Route::post("employee",['uses'=>'EmployeeController@delete']);
  Route::post("timesheet",['uses'=>'TimeSheetController@delete']);
  Route::post("timekeeper",['uses'=>'TimeKeeperController@delete']);
  Route::post("labor-contract",['uses'=>'LaborContractController@delete']);
  Route::post("overtime",['uses'=>'OvertimeController@delete']);
  Route::post("payroll",['uses'=>'PayrollController@delete']);
  Route::post("payroll-hour",['uses'=>'PayrollHourController@delete']);
  Route::post("charge-revenue",['uses'=>'ChargeRevenueController@delete']);
  Route::post("store-off",['uses'=>'StoreOffController@delete']);
  Route::post("timesheet-hour",['uses'=>'TimeSheetHourController@delete']); 
  Route::post("form-voucher",['uses'=>'FormVoucherController@delete']); 
  }); 
  Route::group(["prefix"=>"import"],function(){    
  Route::post("menu",array('uses'=>'MenuController@import')); 
  Route::post("options",['uses'=>'OptionsController@import']);   
  Route::post("template",['uses'=>'TemplateController@import']);   
  Route::post("help-desk",['uses'=>'HelpDeskController@import']);    
  Route::post("history-action",['uses'=>'HistoryActionController@import']);  
  Route::post("format-voucher",['uses'=>'FormatVoucherController@import']);
  Route::post("user",['uses'=>'UserController@import']); 
  Route::post("period",['uses'=>'PeriodController@import']);
  Route::post("department",['uses'=>'DepartmentController@import']);
  Route::post("employee",['uses'=>'EmployeeController@import']);
  Route::post("timekeeper",['uses'=>'TimeKeeperController@import']);
  Route::post("labor-contract",['uses'=>'LaborContractController@import']);
  Route::post("charge-revenue",['uses'=>'ChargeRevenueController@import']);
  Route::post("store-off",['uses'=>'StoreOffController@import']);
  }); 
  Route::group(["prefix"=>"export"],function(){    
  Route::get("menu",array('uses'=>'MenuController@export'));    
  Route::get("options",array('uses'=>'OptionsController@export'));    
  Route::get("template",array('uses'=>'TemplateController@export'));   
  Route::get("help-desk",array('uses'=>'HelpDeskController@export'));  
  Route::get("history-action",array('uses'=>'HistoryActionController@export')); 
  Route::get("format-voucher",['uses'=>'FormatVoucherController@export']);
  Route::get("user",array('uses'=>'UserController@export'));  
  Route::get("period",['uses'=>'PeriodController@export']);
  Route::get("department",['uses'=>'DepartmentController@export']);
  Route::get("employee",['uses'=>'EmployeeController@export']);
  Route::get("timekeeper",['uses'=>'TimeKeeperController@export']);
  Route::get("labor-contract",['uses'=>'LaborContractController@export']);
  Route::get("charge-revenue",['uses'=>'ChargeRevenueController@export']);
  Route::get("store-off",['uses'=>'StoreOffController@export']);
  }); 
   Route::group(["prefix"=>"get"],function(){    
    Route::post("permission",['uses'=>'PermissionController@loadPermission']);    
    Route::post("timesheet",['uses'=>'TimeSheetController@load']); 
    Route::post("timesheet-hour",['uses'=>'TimeSheetHourController@load']); 
    Route::post("advance",['uses'=>'AdvanceController@load']); 
    Route::post("labor-contract",['uses'=>'LaborContractController@printData']);
    Route::post("load-chart",['uses'=>'DashboardController@loadChart']);
    Route::post("overtime",['uses'=>'OvertimeController@load']);
    Route::post("payroll",['uses'=>'PayrollController@load']);
    Route::post("payroll-hour",['uses'=>'PayrollHourController@load']);
    Route::post("report-store-off",['uses'=>'ReportStoreOffController@loadReport']);
    Route::post("form-voucher",['uses'=>'FormVoucherController@printData']); 
  }); 
 Route::group(['middleware' => 'check.permission'], function () { 
Route::get("index",['uses'=>'DashboardController@showIndex']); 
Route::get("query",['uses'=>'QueryController@showQuery']); 
Route::get("menu",['uses'=>'MenuController@showPage']); 
Route::get("options",['uses'=>'OptionsController@showPage']); 
Route::get("template",['uses'=>'TemplateController@showPage']); 
Route::get("help-desk",['uses'=>'HelpDeskController@showPage']);
Route::get("history-action",['uses'=>'HistoryActionController@showPage']); 
Route::get("format-voucher",['uses'=>'FormatVoucherController@showPage']);
Route::get("user",['uses'=>'UserController@showPage']); 
Route::get("lock",['uses'=>'UserController@showLock']);
Route::get("block",['uses'=>'PermissionController@showBlock']);
Route::get('permission', ['uses'=>'PermissionController@showPermission']);
Route::get("period",['uses'=>'PeriodController@showPage']);
Route::get("department",['uses'=>'DepartmentController@showPage']);
Route::get("employee",['uses'=>'EmployeeController@showPage']);
Route::get("timekeeper",['uses'=>'TimeKeeperController@showPage']);
Route::get("timesheet",['uses'=>'TimeSheetController@showPage']);
Route::get("advance",['uses'=>'AdvanceController@showPage']);
Route::get("labor-contract",['uses'=>'LaborContractController@showPage']);
Route::get("overtime",['uses'=>'OvertimeController@showPage']);
Route::get("payroll",['uses'=>'PayrollController@showPage']);
Route::get("charge-revenue",['uses'=>'ChargeRevenueController@showPage']);
Route::get("store-off",['uses'=>'StoreOffController@showPage']);
Route::get("report-store-off",['uses'=>'ReportStoreOffController@showPage']);
Route::get("timesheet-hour",['uses'=>'TimeSheetHourController@showPage']); 
Route::get("payroll-hour",['uses'=>'PayrollHourController@showPage']);
Route::get("form-voucher",['uses'=>'FormVoucherController@showPage']); 
 });
Route::post("query",['uses'=>'QueryController@querySql']); 
Route::get("logout",['uses'=>'DashboardController@doLogout']);
Route::get("login",['uses'=>'UserController@showLogin']);
Route::get("profile",['uses'=>'UserController@showProfile']);
Route::post("login",['uses'=>'UserController@doLogin']);
Route::post("lock",['uses'=>'UserController@doLogin']);
});
