<?php
use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Http\Request;
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

// Route::get('/{tenNguoiDung?}', function ($tenNguoiDung = 'giatrimacdinh') {
//     // dd($tenNguoiDung);
//     return view('welcome');
// });
Route::get('/',function(){
	return view('layouts');
});


Route::get('route-starter',function(){
	// $user = factory(User::class,10)
	// 	->make()
	// 	->toArray();
	$users = User::all();
		return view('starter',['users' => $users]);

})->name('users.index');

//lay du lieu tu db va do vao posts.blade.php
Route::get('posts',function(){
	// $user = factory(User::class,10)
	// 	->make()
	// 	->toArray();
	$posts = Post::all();
		return view('posts',['posts' => $posts]);

})->name('posts.index');


Route::get('users/create',function(Faker $faker){
	//code
	$user = User::create([
		'name'=> 'TungPN',
		'email'=> $faker->unique()->safeEmail,
		'birthday'=> $faker->date(),
		'password' => bcrypt('123456'), // 
	]);

	// dd($user);(
		return redirect()->route('users.index');

});

Route::get('users/update/{id}',function($id){
	$user = User::find($id);
	// $user->name = 'tung';
	// $user->email = 'tungpnph06758@fpt.edu.vn'
	// $user->save();
	$user->update([
		'name' => 'abc',
	]);

	return redirect()->route('users.index');
});

Route::get('users/delete',function($id){
	$user = User::find($id);
	
	$user->delete();

	return redirect()->route('users.index');
});


Route::view('users/create','users/create')->name('users.create');

Route::post('users/store',function(Request $request){
	$data = $request->all();

	$user = User::create([
		'name' => $data['name'],
		'email'=> $data['email'],
		'birthday' => $data['birthday'],
		'password' => bcrypt('123456'),
	]);

	return redirect()->route('users.index');
})->name('users.store');

Route::get('users/{id}',function($id){
	//code
	$user = User::find($id);
})->name('users.show');