<?php

use App\Model\User\AvatarUser;
use App\Model\User\SpecificUser;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => config('app.admin_email'),
            'password' => config('app.admin_password'),
            'role' => config('app.admin_role')
        ]);
        $s = SpecificUser::create([
            'user_id' => $user->id,
            'name' => config('app.admin_name'),
            'last_name' => config('app.admin_last_name'),
            'username' => config('app.admin_username'),
            'sex' => config('app.admin_sex'),
            'birthday' => config('app.admin_birthday')
        ]);
        if ($s->sex === 1){
            $avatar = 'images/avatar/df-woman.png';
        }else{
            $avatar = 'images/avatar/db-man.png';
        }

        AvatarUser::create([
            'user_id' => $user->id,
            'avatar' => $avatar
        ]);
    }
}
