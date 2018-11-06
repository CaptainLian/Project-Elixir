<?php
namespace App\Http\Controllers;

use App\Http\Models\AccountModel;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
/**
 * 
 */
class TestController extends BaseController
{
	
	public function __construct(argument)
	{
		# code...
	}

	public function getAllUsers(){
		return AccountModel::all()->toJson();
	}
}	

?>