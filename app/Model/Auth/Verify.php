<?php

namespace App\Model\Auth;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Verify extends Model
{
    protected $fillable = [
        'user_id',
        '_key'
    ];


    public function saveVerifyKey($userID)
    {
        $key = $this->generateKey($userID);
        Verify::create([
            'user_id' => $userID,
            '_key' => $key
        ]);

        return $key;
    }

    protected function generateKey($userID)
    {
        $__key = md5(time().$userID.rand(1, 100000));
        $key = substr($__key, '15', 15);

        return $key;
    }

    protected function getKeyDB(){
        $keyDB = Verify::where('user_id', Auth::id())->value('_key');

        return $keyDB;
    }

    public function checkingKeys($keyUSER)
    {
        $keyDB = $this->getKeyDB();
        if ($keyDB != $keyUSER)
        {
            return $verify = false;
        }

        $this->activated();

        return $verify = true;
    }

    protected function activated(){
        User::where('id', Auth::id())
            ->update([
                'activated' => 1
            ]);
        $this->deleteKey();
    }

    protected function deleteKey(){
        Verify::where('user_id', Auth::id())->delete();
    }


}
