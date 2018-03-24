<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{

	
	/*
	Template 
	echo $template->coba();
    echo kampleh_template();
	*/
	public function __construct(){
    	
	}

    public function main(){
    	$helper = new \Helper();
    	
    	$items = '<b>kampleh</b>';
    	//return view('users', ['kampleh' => $data]);
    	return $helper->template('users', ['items' => $items]);
    }
}
