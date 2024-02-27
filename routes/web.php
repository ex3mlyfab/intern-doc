<?php

use App\Http\Controllers\Intern\AuthenticateInternController;
use App\Http\Controllers\MultiFormController;
use App\Livewire\AccomodationSetting;
use App\Livewire\Admin\CreateUser;
use App\Livewire\Admin\EditUser;
use App\Livewire\Admin\ListUser;
use App\Livewire\Admin\SelfEdit;
use App\Livewire\Department;
use App\Livewire\Doctor\CreateIntern;
use App\Livewire\Doctor\EditIntern;
use App\Livewire\Doctor\ListIntern;
use App\Livewire\Locum\ListLocum;
use App\Livewire\Doctor\ShowIntern;
use App\Livewire\EvaluateIntern;
use App\Livewire\InternSelfEdit;
use App\Livewire\InternSelfShow;
use App\Livewire\Locum\CreateLocum;
use App\Livewire\Locum\EditLocum;
use App\Livewire\Locum\ShowLocum;
use App\Livewire\MonthlyReport;
use App\Livewire\MonthlySuper;
use App\Livewire\Performance;
use App\Livewire\Permission;
use App\Livewire\PevSelf;
use App\Livewire\RolePermission;
use App\Livewire\ShowEvaluation;
use App\Livewire\SuperMonthly;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function(){
    return view('tester');
});
// Route::get('/admin-login', [AuthenticatedSessionController::class, 'create'])->name('Locum-login');

// Route::post('/admin-login', [AuthenticatedSessionController::class, 'store']);
Route::middleware([
    'auth',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function(){
        return redirect()->route('dashboard');
    });
    Route::get('/web/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/department', Department::class)->name('department')->can('create-department');
    //intern Routes
    Route::get('/intern-doctors', ListIntern::class)->name('list.intern')->can('list-intern');
    Route::get('/intern-doctors/create', CreateIntern::class)->name('doctor.create')->can('create-intern');
    Route::get('/intern-doctors/{record}/edit', EditIntern::class)->name('doctor.edit')->can('edit-intern');
    Route::get('/intern-doctors/{record}/show', ShowIntern::class)->name('doctor.show')->can('show-intern');
    //locum routes
    Route::get('/locum', ListLocum::class)->name('locum.list')->can('show-locum');
    Route::get('/locum/create', CreateLocum::class)->name('locum.create')->can('create-locum');
    Route::get('/locum/{record}/edit', EditLocum::class)->name('locum.edit')->can('edit-locum');
    Route::get('/locum/{record}/view', ShowLocum::class)->name('locum.show')->can('show-locum');
    Route::get('/attendance', MonthlySuper::class)->name('attendance.list')->can('list-attendance');
    Route::get('/super-monthly', SuperMonthly::class)->name('supervise')->can('list-attendance');

    Route::get('/generate-report', MonthlyReport::class)->name('generate.report')->can('list-attendance');
    //roles & permission Routes
    Route::get('/role/create', [MultiFormController::class, 'createRole'])->name('role.create')->can('create-role');
    Route::get('/role', RolePermission::class)->name('role.list')->can('list-role')->can('list-role');
    Route::get('/permissions', Permission::class)->name('permission.list')->can('list-permission');
    //administration Routes
    Route::get('/user', ListUser::class)->name('user.list')->can('list-user');
    Route::get('/user/create',CreateUser::class)->name('user.create')->can('create-user');
    Route::get('/user/{record}/edit',EditUser::class)->name('user.edit')->can('edit-user');
    Route::get('/user/self-edit',SelfEdit::class)->name('self.edit');
    Route::get('/accomodation', AccomodationSetting::class)->name('accomodation.list')->can('list-accomodation');
    //evaluation Routes
    Route::get('/pevaluation', Performance::class)->name('evaluate.list')->can('view-performance');
    Route::get('/pevaluation/{record}/show', EvaluateIntern::class)->name('evaluate.show')->can('show-evaluation');
    Route::get('/pevaluation/{record}/review', ShowEvaluation::class)->name('evaluate.review')->can('review-evaluation');
});

Route::group(['prefix'=>'intern','middleware'=>['intern:intern']],function(){
    Route::get('/login', [AuthenticateInternController::class, 'loginForm'])->name('intern.login');
    Route::post('/login', [AuthenticateInternController::class, 'store'])->name('intern.login');
});


Route::middleware([
    'auth:sanctum,intern',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/intern/dashboard', InternSelfShow::class)->name('dashboard-intern');
    Route::get('/intern/update', InternSelfEdit::class)->name('intern-self.edit');
    Route::get('/pev/{record}/self', PevSelf::class)->name('pev.self');
});
// Route::middleware(['auth:sanctum,intern', 'verified'])->get('/intern/dashboard', function () {
//        return view('dashboard');
// })->name('dashboard-intern');
