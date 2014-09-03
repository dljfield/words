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
		$this->call('UsersTableSeeder');
	}

}

class PostsTableSeeder extends Seeder {
	public function run()
	{
		DB::table('posts')->truncate();
		for ($i = 1; $i <= 10; $i++) {
			Post::create([
				'title'   => "Title $i",
				'body'    => "Body of <strong>post $i</strong>",
				'summary' => "Summary of post $i"
			]);
		}
	}
}

class UsersTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->truncate();
		User::create([
			'email' => 'testuser@email.com',
			'username' => 'testuser',
			'password' => Hash::make('password')
		]);
	}
}