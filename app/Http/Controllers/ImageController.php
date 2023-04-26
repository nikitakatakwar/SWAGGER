<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use App\Models\Column;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ImageController extends Controller
{
    public function index()
{
}

public function store(Request $request)
{

}
public function create()
{
    $input=[
        'key' => [
            '0' => ['app_logo','akshay','rohit'],
            '1' => ['app_logo','akshay','rohit'],
        ],
        'value' => '',
    ];

    // $key=[
    //    "key"=> ['ni','ak'],

    // ];

    // dd($key);
    // $data = array();
    // foreach ($key as $prod)
    // {
    // $data[] =$prod ;
    // }

    // dd($data);

    // $input=[
    //     'key' => [
    //         'key' => $data,

    //            ],
    //     'value' => '',
    // ];
    // $Settings = new Settings;
    // $Settings->key=['key','values'];
    // $Settings->save();

        // $data = array();
        //     foreach ($input['key'] as $prod)
        //     {
        //     $data[] =$prod ;
        //     }

        // $column = [
        //     ['key'=> $data],
        // ];

       $data= json_encode($input);
    // //    dd($data1);

        // foreach($input  as $data)
        // {
        //     $column = $data ;
        // }

        // dd($input);
        $user = Setting::create([
            'name' =>  "nikita",

        ]);
        // \DB::table('settings')->insert($column); // Query Builder

// dd($data);
//  $sup = new Settings();
// $sup->key = $data;
// $sup->save();

// $product_id = Settings::where('key', $data)->create();
//  $column = Settings::create(array($data));


}
}
