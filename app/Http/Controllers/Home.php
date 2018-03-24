<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function main(){
    	$users = DB::table('users')->get();
    	return $users;
    }
}
