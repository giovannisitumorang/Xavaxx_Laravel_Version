<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRM\OverviewController;
use App\Http\Controllers\HRM\DepartmentsController;
use App\Http\Controllers\HRM\DesignationsController;
use App\Http\Controllers\HRM\EmployeesController;
use App\Http\Controllers\HRM\AnnouncementController;
use App\Http\Controllers\HRM\ReportController;
use App\Http\Controllers\Clients\ClientsOverviewController;
use App\Http\Controllers\Clients\ContactsController;
use App\Http\Controllers\Clients\CompaniesController;
use App\Http\Controllers\Clients\ActivitiesController;
use App\Http\Controllers\Leave\RequestController;
use App\Http\Controllers\Leave\LeaveEntitlementsController;
use App\Http\Controllers\Leave\HolidaysController;
use App\Http\Controllers\Leave\CalendarController;
use App\Http\Controllers\Leave\LeaveReportController;
use App\Http\Controllers\Payroll\PayrollOverviewController;
use App\Http\Controllers\Payroll\PayRunController;
use App\Http\Controllers\Payroll\PayCalendarController;
use App\Http\Controllers\Payroll\ReportsController;

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
    return view('dashboard');
});

Route::get('/hrm/hrm-overview', [OverviewController::class, 'index'])->name('HRM.overview');

Route::get('/hrm/departments', [DepartmentsController::class, 'index'])->name('HRM.departments');

Route::get('/hrm/designations', [DesignationsController::class, 'index'])->name('HRM.designations');

Route::get('/hrm/employees', [EmployeesController::class, 'index'])->name('HRM.employees');

Route::get('/hrm/announcement', [AnnouncementController::class, 'index'])->name('HRM.announcement');

Route::get('/hrm/hrm-report', [ReportController::class, 'index'])->name('HRM.report');

Route::get('/clients/client-overview', [ClientsOverviewController::class, 'index'])->name('Clients.overview');

Route::get('/clients/contacts', [ContactsController::class, 'index'])->name('Clients.contacts');

Route::get('/clients/companies', [CompaniesController::class, 'index'])->name('Clients.companies');

Route::get('/clients/activities', [ActivitiesController::class, 'index'])->name('Clients.activities');

Route::get('/leave/request', [RequestController::class, 'index'])->name('Leave.request');

Route::get('/leave/leave-entitlement', [LeaveEntitlementsController::class, 'index'])->name('Leave.leave-entitlement');

Route::get('/leave/holidays', [HolidaysController::class, 'index'])->name('Leave.holidays');

Route::get('/leave/calendar', [CalendarController::class, 'index'])->name('Leave.calendar');

Route::get('/leave/leave-report', [LeaveReportController::class, 'index'])->name('Leave.report');

Route::get('/payroll/payroll-overview', [PayrollOverviewController::class, 'index'])->name('Payroll.overview');

Route::get('/payroll/pay-run', [PayRunController::class, 'index'])->name('Payroll.pay-run');

Route::get('/payroll/pay-calendar', [PayCalendarController::class, 'index'])->name('Payroll.pay-calendar');

Route::get('/payroll/reports', [ReportsController::class, 'index'])->name('Payroll.reports');