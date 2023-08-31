<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAdvertFormTypeColumn extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('adverts', function (Blueprint $table) {
			$table->dropColumn('form_id');
			$table->string('view_name')->nullable()->after('status');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('adverts', function (Blueprint $table) {
			$table->dropColumn('view_name');
			$table->integer('form_id')->nullable()->after('status');
		});
	}
}
