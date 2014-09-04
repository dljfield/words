<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakePublishedColumnInPostsTableNullable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function($table)
		{
			$table->dropColumn('published');
		});
		Schema::table('posts', function($table)
		{
			$table->boolean('published')->after('summary')->nullable()->default(false);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function($table)
		{
			$table->dropColumn('published');
		});
		Schema::table('posts', function($table)
		{
			$table->boolean('published')->after('summary')->default(false);
		});
	}

}
