<?php
use Illuminate\Http\Request;
use App\Category;
use App\plans;

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

//load home page on bare root
Route::get('/', function () {
    return view('home');
});


//gets data from categories/add/ page
Route::get('/categories/add/', function () {
    return view('categories-add', ['page_label_text'=> 'Add Category']);
});

//saves/post categories/add/ input into db Category table
Route::post('/categories/add/', function (Request $request) {
    $newCategory = new Category; //creating a new instance of category model
    $newCategory->name = $request->nameA;  
    $newCategory->save();
    return redirect('categories');
});

//gets all categores from Category table and displays them
Route::get('/categories/', function () {
    $categories = App\Category::all(); 
    return view('categories', ['title'=> 'Categories','categories'=>$categories]);
});

//gets data from plans/add/ page
Route::get('/plans/add/', function () {
    $categories = App\Category::all(); //this only gets all from category?
    return view('plans-add', ['title'=> 'Add A Plan','categories'=>$categories]);
});

//saves/posts plans/add/ input into db plans table
Route::post('/plans/add/', function (Request $request) {
    $newPlan = new plans;
    $newPlan->subjects = $request->subjects;
    $newPlan->descriptions = $request->descriptions;
    $newPlan->category_id = $request->category_id;
    $newPlan->save();
    return redirect('plans');
});

//gets all plans from plans table, join category table and displays them
Route::get('/plans/', function () {
    $plans = DB::table('plans')
            ->join('category', 'plans.category_id', '=', 'category.id')
            ->select('plans.*', 'category.name as category_name')
            ->get();
    return view('plans', ['title'=>'All Plans', 'plans'=>$plans]);
});

//deleting a plan
Route::get('/plans/delete/{planid}', function ($planid) {
    $thePlan = App\plans::where('id', $planid)->first();
    $thePlan->delete();
    return redirect('plans');
});

//gets data from plans/add/ page
Route::get('/plans/edit/{planid}', function ($planid) {
    $categories = App\Category::all(); 
    $thePlan = App\plans::where('id', $planid)->first();
    return view('plans-edit', ['title'=> 'Edit Your Plan','categories'=>$categories,'thePlan'=>$thePlan]);
});