<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        $user = new User;
        $user->username=$_ENV['DEFAULT_USERNAME'];
        $user->email =$_ENV['DEFAULT_USER'];
        $user->password= $_ENV['DEFAULT_PASS'];
        $user->password_confirmation= $_ENV['DEFAULT_PASS'];
        $user->role= 'admin';
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Provider';
        $user->email ='provider@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'provider';
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Seeker';
        $user->email ='seeker@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'seeker';
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();
    
		// $faker = Faker::create();
  //       $roles = ['seeker', 'provider'];

		// foreach(range(1, 20) as $index)
		// {
  //           $selection = mt_rand(0,1);

  //           $password = $faker->phoneNumber;
            
		// 	User::create([
  //           'username'=> $faker->name,
  //           'email'=>$faker->safeEmail,
  //           'password'=>$password,
  //           'password_confirmation'=>$password,
  //           'role'=>$roles[$selection],
  //           'confirmation_code'=>'',
  //           'confirmed'=>true
		// 	]);
		// }
	}

}
