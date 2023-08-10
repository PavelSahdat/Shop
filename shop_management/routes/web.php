<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Type\Integer;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});
    // any methode user
    Route::any('/test', function () {
        return 'testing route';
    });

    // view mathode user
    Route::view('/userlist', 'user.list', ['name' => 'Pavel Sahdat','id'=>10410]);
    
    //Parameter pass in route
    Route::get('employee_id_name/{id}/{name}',function(int $id,string $name){
        return "Id = ".$id."</br>"."name = ". $name;
    });
    
    //Optional parameter pass in route
    Route::get('/person/{name?}/{id?}', function (string $name = 'Pavel Sahdat',int $id=5454445) {
        return $name."ID = ".$id;
    });

    // array passing 

    Route::get('/customer/{name}/{address}/{id}',function($name,$address,$id=null){
        $data = compact('name','address','id');
        return view('customer')->with($data);

    });

    Route::get('/employee',[EmployeeController::class,'getEmployeeList'])->name('employees');
    Route::get('/employees/create',[EmployeeController::class,'createEmployeeForm'])->name('employees.create');
    Route::post('/employee/post',[EmployeeController::class,'postEmployee'])->middleware('auth')->name('employees.post');

    Route::get('/employeeSearch/{id}', [EmployeeController::class, 'showEmployee']);
    

    Route::get('/role',[RoleController::class,'getRole'])->middleware('employee')->name('role');
    
    require __DIR__.'/auth.php';
