<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('roles')->delete();

        $admin = new Role();
        $admin->name = 'Admin';
        $admin->save();

        $provider = new Role();
        $provider->name = 'Provider';
        $provider->save();
     
        $seeker = new Role();
        $seeker->name = 'Seeker';
        $seeker->save();

        DB::table('permissions')->delete();
     
        $create_beer = new Permission();
        $create_beer->name = 'can_create_beer';
        $create_beer->display_name = 'Can Create Beers';
        $create_beer->save();
     
        $edit_beer = new Permission();
        $edit_beer->name = 'can_edit_beer';
        $edit_beer->display_name = 'Can Edit Beers';
        $edit_beer->save();

        $delete_beer = new Permission();
        $delete_beer->name = 'can_delete_beer';
        $delete_beer->display_name = 'Can Delete Beers';
        $delete_beer->save();

        $create_brewery = new Permission();
        $create_brewery->name = 'can_create_brewery';
        $create_brewery->display_name = 'Can Create Brewerys';
        $create_brewery->save();
     
        $edit_brewery = new Permission();
        $edit_brewery->name = 'can_edit_brewery';
        $edit_brewery->display_name = 'Can Edit Brewerys';
        $edit_brewery->save();

        $delete_brewery = new Permission();
        $delete_brewery->name = 'can_delete_brewery';
        $delete_brewery->display_name = 'Can Delete Brewerys';
        $delete_brewery->save();
     
        $provider->attachPermission($create_beer);
        $provider->attachPermission($edit_beer);
        $provider->attachPermission($delete_beer);

        $admin->attachPermission($create_beer);
        $admin->attachPermission($edit_beer);
        $admin->attachPermission($delete_beer);
        $admin->attachPermission($create_brewery);
        $admin->attachPermission($edit_brewery);
        $admin->attachPermission($delete_brewery);

        $admin->perms()->sync(array($create_beer->id, $edit_beer->id, $delete_beer->id, $create_brewery->id, $edit_brewery->id, $delete_brewery->id));
        $provider->perms()->sync(array($create_beer->id, $edit_beer->id, $delete_beer->id));

        $adminRole = DB::table('roles')->where('name', '=', 'Admin')->pluck('id');
        $providerRole = DB::table('roles')->where('name', '=', 'Provider')->pluck('id');
        $seekerRole = DB::table('roles')->where('name', '=', 'Seeker')->pluck('id');

        $user =User::where('username','=','jstaudt')->first();
        $user->attachRole( $admin );

        $user =User::where('username','=','provider1')->first();
        $user->attachRole( $provider );

        $user =User::where('username','=','provider2')->first();
        $user->attachRole( $provider );

        $user =User::where('username','=','provider3')->first();
        $user->attachRole( $provider );

        $user =User::where('username','=','provider4')->first();
        $user->attachRole( $provider );

        $user =User::where('username','=','provider5')->first();
        $user->attachRole( $provider );

        $user =User::where('username','=','provider6')->first();
        $user->attachRole( $provider );

        $user =User::where('username','=','provider7')->first();
        $user->attachRole( $provider );

        $user =User::where('username','=','seeker')->first();
        $user->attachRole( $seeker );



    }

}
