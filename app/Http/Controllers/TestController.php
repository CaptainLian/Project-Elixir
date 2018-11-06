<?php
namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

/* Database */
use App\Http\Models\AccountModel;

/**
 *
 */
class TestController extends BaseController
{
	public function getAllUsers()
	{
		return AccountModel::all()->toJson();
	}
}

?>
