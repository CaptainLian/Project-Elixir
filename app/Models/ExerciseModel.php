<?php
namespace App\Http\Models;

use Illuminate\Support\Facades\DB;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class ExerciseModel extends Moloquent
{
	use SoftDeletes;

	protected $connection = 'mongodb';

	protected $primaryKey = '_id';
    protected $collection = 'Exercise';
}

?>
