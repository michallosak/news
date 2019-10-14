<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Auth\AuthRepository;
use App\Http\Requests\Auth\ActivateRequest;
use Illuminate\Http\Request;

class ActivateController extends Controller
{

    protected $authRepo;

    public function __construct(AuthRepository $authRepo)
    {
        $this->authRepo = $authRepo;
    }
    public function index(){
        return view('auth.activate');
    }

    public function activate(ActivateRequest $request){
        $verify = $this->authRepo->activate($request->key);
        if ($verify === true){
            return redirect(route('home'));
        }
        return redirect()->back();
    }
}
