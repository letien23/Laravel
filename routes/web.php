
<?php
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PtbnController;
use App\Http\Controllers\CaculateController;



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
    return view('welcome');
});
// Route::get('cars/{car}',[CarController::class,'show'])->name('cars.show');
Route::resource('cars',CarController::class);
// Route::get('cars',[CarController::class,'index'])->name('cars.index');
// Route::get('cars/create',[CarController::class,'create'])->name('cars.create');
/* Route này tương đương với 7 route như sàu:
Route::get('cars',[CarController::class,'index'])->name('cars.index');
Route::post('cars',[Carcontroller::class,'store'])->name('cars.store);

*/       


// Route::get('ptbn',function(){
//     return view('ptbn');
// });      
// Route::post('ptbn',[PtbnController::class,'giai']) -> name('ptbn.post');
// Route::get('caculate',function(){
//     return view('caculate');
// });      
// Route::post('caculate',[CaculateController::class,'caculate']) -> name('caculate.post');


// Route::post('ptbn',function(Request $request){
//     // $a = $request -> input("a");
//     // $b = $request -> input("b");
//     // if($a == 0 && $b== 0){
//     //     $nghiem = "Vo so nghiem";
//     // } elseif($a == 0 && $b !=  0){
//     //     $nghiem = "Vo nghiem";
//     // } else{
//     //     $nghiem = round(-$b/$a,2);
//     // }
//     // // return view('ptbn',['nghiem'=>$nghiem, "a" => $a,"b"=>$b]);
//     // return view('ptbn',compact('a','b','nghiem'));
// })-> name('ptbn.post');
