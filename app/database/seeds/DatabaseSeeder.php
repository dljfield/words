<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PostsTableSeeder');
	}

}

class PostsTableSeeder extends Seeder {

	public function run()
	{
		for ($i = 1; $i <= 10; $i++) {
			Post::create([
				'title'   => "Title $i",
				'body'    => "Body of <strong>post $i</strong>",
				'summary' => "Summary of post $i"
			]);
		}
	}

}