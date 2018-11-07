<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use MongoDB\BSON\ObjectID;
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

	public function addUser()
	{
		$account = new AccountModel();
		$account->_id = new ObjectID();
		$account->password = 'Aguy';
		$account->save();

		return AccountModel::all()->toJson();
	}
}
?>
