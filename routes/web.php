<?php

use App\Http\Controllers\MultiFormController;
use App\Livewire\Admin\CreateUser;
use App\Livewire\Admin\ListUser;
use App\Livewire\Administration;
use App\Livewire\CreateRole;
use App\Livewire\Department;
use App\Livewire\Doctor\CreateIntern;
use App\Livewire\Doctor\EditIntern;
use App\Livewire\Doctor\ListIntern;
use App\Livewire\Doctor\ShowIntern;
use App\Livewire\EvaluateIntern;
use App\Livewire\Performance;
use App\Livewire\Permission;
use App\Livewire\PermissionList;
use App\Livewire\RolePermission;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/department', Department::class)->name('department');
    Route::get('/intern-doctors', ListIntern::class)->name('list.intern');
    Route::get('/intern-doctors/create', CreateIntern::class)->name('doctor.create');
    Route::get('/intern-doctors/{record}/edit', EditIntern::class)->name('doctor.edit');
    Route::get('/intern-doctors/{record}/show', ShowIntern::class)->name('doctor.show');
    Route::get('/role/create', [MultiFormController::class, 'createRole'])->name('role.create');
    Route::get('/role', RolePermission::class)->name('role.list');
    Route::get('/permissions', Permission::class)->name('permission.list');
    Route::get('/user', ListUser::class)->name('user.list');
    Route::get('/user/create',CreateUser::class)->name('user.create');
    Route::get('/pevaluation', Performance::class)->name('evaluate.list');
    Route::get('/pevaluation/{record}/show', EvaluateIntern::class)->name('evaluate.show');
});
