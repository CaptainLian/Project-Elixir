<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('SESSION_CONNECTION'))->create(config('session.table'), function (Blueprint $collection) {
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::connection(env('SESSION_CONNECTION'))->table(config('session.table'), function (Blueprint $collection)
        {
            $collection->drop();
        });
    }
}
