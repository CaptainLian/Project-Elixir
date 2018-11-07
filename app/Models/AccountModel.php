<?php
declare(strict_types=1);
namespace App\Http\Models;

use Illuminate\Support\Facades\DB;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class AccountModel extends Moloquent
{
	use SoftDeletes;

	/**
	 * What connection would be used through laravel
	 * @var [type]
	 */
	protected $connection = 'mongodb';

	protected $primaryKey = '_id';

	/**
	 * The collection that the model queries
	 * @var string
	 */
    protected $collection = 'Account';

	/**
	 * The attributes that aren't mass assignable.
	 * An empty array means that all attributes are mass assignable
	 * @var array
	 */
	protected $guarded = [];
}

?>
