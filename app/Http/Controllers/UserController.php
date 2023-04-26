<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Column;
use App\Models\User;

class UserController extends Controller
{
    public function store()
    {
        $key="app_name";
        $value="console";
        $data = Column::where('key', $key)->update(['value'=>'console']);
    }
}
