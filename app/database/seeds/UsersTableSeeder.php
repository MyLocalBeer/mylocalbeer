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
        $user->brewery_id= null;
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Provider1';
        $user->email ='provider1@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'provider';
        $user->brewery_id= "1";
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Provider2';
        $user->email ='provider2@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'provider';
        $user->brewery_id= "2";
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Provider3';
        $user->email ='provider3@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'provider';
        $user->brewery_id= "3";
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Provider4';
        $user->email ='provider4@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'provider';
        $user->brewery_id= "4";
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Provider5';
        $user->email ='provider5@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'provider';
        $user->brewery_id= "5";
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Provider6';
        $user->email ='provider6@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'provider';
        $user->brewery_id= "6";
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Provider7';
        $user->email ='provider7@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'provider';
        $user->brewery_id= "7";
        $user->confirmation_code= '';
        $user->confirmed=true;
        $user->save();

        $user = new User;
        $user->username='Seeker';
        $user->email ='seeker@gmail.com';
        $user->password= 'password';
        $user->password_confirmation= 'password';
        $user->role= 'seeker';
        $user->brewery_id= null;
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
