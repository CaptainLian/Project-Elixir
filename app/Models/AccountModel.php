<?php
namespace App\Http\Models;

use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class AccountModel extends Moloquent
{
	use SoftDeletes;
	
	protected $connection = 'mongodb';

	protected $primaryKey = '_id';
    protected $collection = 'Account';
    
    
}
