<?php


namespace App\Http\Repositories\Auth;


use App\Model\User\AvatarUser;
use App\Model\User\SpecificUser;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{

    public function register($data)
    {
        $user = $this->saveUser($data->email, $data->password);
        $userID = $user->id;
        $s = $this->saveSpecificUser($data, $userID);
        $avatar = $this->checkSex($s->sex);
        $this->saveAvatar($avatar, $userID);
        return $user;
    }

    protected function saveUser($email, $password){
        $user = User::create([
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        return $user;
    }


    private function saveSpecificUser($data, $userID){
        $specificData = SpecificUser::create([
            'user_id' => $userID,
            'name' => $data->name,
            'last_name' => $data->last_name,
            'username' => $data->username,
            'sex' => $data->sex,
            'birthday' => $data->birthday
        ]);
        return $specificData;
    }

    protected function checkSex($sex){
        if ($sex === 1){
            // woman
            $avatar = 'images/avatar/df-woman.png';
        }else{
            //man
            $avatar = 'images/avatar/df-man.png';
        }

        return $avatar;
    }

    protected function saveAvatar($avatar, $userID)
    {
        AvatarUser::create([
            'user_id' => $userID,
            'avatar' => $avatar
        ]);

        return true;
    }
}
