<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Request;


use App\Http\Requests;
use App\test;


class testing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("create");
    }


//    {
//      $names = DB::table('tests')->where('id',5)->get('name');
//        return $names;
//    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $object = test::create(Request::all());
//        $array = $object->toArray();
//      $output = array_slice($array, 1, 36);
//       $data[] = array_values($output);
//       $id = json_encode(array_slice($array, -1));
//        echo json_encode($data);
       return redirect()->route('sunburst');
  //     return view('sunburst.show1', compact('id'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()   //note removed $id
    {
//      $tests = test::where('id',$id)->get(['1A0101','1A0201','1A0301','1A0401','1A0501','1A0601']);
//      $rows = array();
//      foreach ($tests as $row) {
//      $data[] = array_values((array)$row);
//    }
//      return $data;
//      return view('sunburst.answersL2', compact('data'));
//      $user = test::find($id);
//      $users = test::orderBy('id', 'desc')->first(['id'])->toArray();
//      foreach ($users as $row) {
//      $user[] = array_values((array)$row);
//       }
//        $user = test::latest()->get();
    //    return $user;


///////////////I NEED TO HAVE A VALIDATION THAT user id is the same as what was entered previously to ensure security
//////////////CAN EMBED THIS FUNCTION WITHIN THE PRIOR CREATE ONE
$user = test::orderBy('id', 'desc')->select('user_id','_token','id','created_at')->first();
$results= test::orderBy('id', 'desc')->select(
  '1A0111',
  '1A0112',
  '1A0113',
  '1A0121',
  '1A0122',
  '1A0123',
  '1A0211',
  '1A0212',
  '1A0213',
  '1A0221',
  '1A0222',
  '1A0223',
  '1A0311',
  '1A0312',
  '1A0313',
  '1A0321',
  '1A0322',
  '1A0323',
  '1A0411',
  '1A0412',
  '1A0413',
  '1A0421',
  '1A0422',
  '1A0423',
  '1A0511',
  '1A0512',
  '1A0513',
  '1A0521',
  '1A0522',
  '1A0523',
  '1A0611',
  '1A0612',
  '1A0613',
  '1A0621',
  '1A0622',
  '1A0623'
  )->first();
$array = $user->toArray();
$output = (array_slice($array, 1, 3));
$userLocate = "http://localhost:8000/results?" . http_build_query( $output ) . "\n";
return view('sunburst.show1', compact('user','userLocate','results'));
//    }
//
//    public function answers()
//    {
//    $object = test::orderBy('id', 'desc')->first();
//    $array = $object->toArray();
//    $output = (array_slice($array, 2, 36));
  //  $rows = array();
    //foreach ($output as $row) {
//    $data[] = array_values($output);
    //}
//    return $data; //this gives exactly what looking for in js char
}





  /*  {
      $tests = test::where('id',5)->get(['1A0101','1A0201','1A0301','1A0401','1A0501','1A0601']);
      $rows = array();
      foreach ($tests as $row) {
      $data[] = array_values((array)$row);
    }
      return $data;
//      return view('sunburst.answersL2', compact('data'));
}

*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        //
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
