<?php 

namespace App\Helpers\Agus;

/**
* 
*/
class Helper
{
	
	public static function template($view, $data = []){
		if (empty($data['title'])) {
			$data['title'] = 'Laravel 5.4';
		}
		return view($view, $data);
	}
	
}