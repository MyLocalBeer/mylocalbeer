<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        $user = new User;
        $user->username=$_ENV['DEFAULT_USERNAME'];
        $user->email =$_ENV['DEFAULT_USER'];
        $user->password= $_ENV['DEFAULT_PASS'];
        $user->role= 'admin';
        $user->save();
        
		$faker = Faker::create();
        $roles = ['admin', 'seeker', 'provider'];

		foreach(range(1, 10) as $index)
		{
            $selection = mt_rand(0,2);
            
			User::create([
            'username'=> $faker->name,
            'email'=>$faker->safeEmail,
            'role'=>$roles[$selection],
            'password'=>$faker->phoneNumber,
            'brewery_id'=>$index

			]);
		}
	}

}
