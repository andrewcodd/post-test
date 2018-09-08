<?php

use Illuminate\Support\Facades\Input;
use App\test;
use App\User;
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

// Route::get('/', 'PostsController@index');
//Route::get('/posts/create', 'PostsController@create');
//Route::post('/posts', 'PostsController@store');
//Route::get('/posts/{post}', 'PostsController@show');
//Route::get('/',function() {
//  return view('welcome');
//});
//Route::get('/',function() {
//        $names = DB::table('tests')->get();
//        return $names; //stop here if want json file
//        return view('welcome', compact('names'));
  //    });

Route::get("begin", 'UserController@userbegin');
Route::post("assessmentreturn", 'UserController@assessmentreturn');


Route::get("create", 'testing@index');
Route::post("store", 'testing@store');

//Route::get("/sunburst/{id}", 'testing@show');
Route::get("sunburst", ['as' => 'sunburst','uses'=>'testing@show']);
//Route::get("answers", 'testing@answers');

Route::get('pdffolder/123.pdf', function ($filename)
{
    $path = storage_path('public/pdffolder/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

//So in this case if you save a pdf named 123.pdf in the folder storage/app/public/pdffolder
//you can access it by http://yourdomain.com/pdffolder/123.pdf

/*Route::get("answersL2/", function(){
      $tests = DB::table('tests')->where('id',7)->get(['1A0101','1A0201','1A0301','1A0401','1A0501','1A0601']);
      $rows = array();
      foreach ($tests as $row) {
      $data[] = array_values((array)$row);
      }
      return $data;
//      return view('answersL2', compact('data'));
});
*/

Route::get('/sunburst/{id}', function($id) {
$object = DB::table('tests')->find($id);
return view('sunburst.show1', compact('object'));
});

Route::get('results', function() {
//return "<h1>". Input::get("_token") . "</h1>";
$object1 = (Input::all());
//$data[] = (array)$object1;
$rows = array();
foreach ($object1 as $row) {
$data[] = ((array)$row);
}

$var_id = implode($data[1]);
$var_created_at = implode($data[2]);
$var_token = implode($data[0]);
//return $var_token;
$result =  test::where(function($query) use($var_id,$var_created_at,$var_token){
  $query->where('id','=', $var_id);
  $query->where('created_at','=', $var_created_at);
  $query->where('_token','=', $var_token);
})->get()->toArray();
$results = (array_slice(array_values($result[0]), 2, 36));
$var_user_id = (array_slice(array_values($result[0]), 1, 1));

//return $results;
//$array = $result->toArray();
//to test return $array;
//$data1[] = array_values($array);
//return $data1;
//$output1 = (array_slice($data1[0], 2, 36));
//return $output1;
//  $rows = array();
//foreach ($output as $row) {
//$results[] = array_values($output);
//}
//return $data; //this gives exactly what looking for in js char
//return $result;
$resultslink = "http://localhost:8000/results?" . http_build_query( $object1 ) . "\n";

$user = User::where(function($userquery) use($var_user_id){
  $userquery->where('id','=', $var_user_id);
  })->get()->toArray();
  $name = (array_slice(array_values($user[0]), 1, 1));
  $var_name = $name[0];
//return $resultslink;
return view('sunburst.show3', compact('results','resultslink','var_name'));
//
//"<pre>" . print_r(Input::all(), true) . "</pre>";
});

/*
Route::get('/sunburst/{id+_token}', function($id) {
$idtoken = DB::table('tests')->find($id);
return view('sunburst.showtoken', compact('idtoken'));
});
*/
