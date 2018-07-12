<?php
/*
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Request;
use Auth;

class AdminController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
    	return view('admin.indexAdmin');
    }

        public function form()
    {
        return view('admin.admin_form_login');
    }

    public function login(Request $request)
    {

        $data = Request::only('email', 'password');

            if(Auth::attempt($data))
            {
            return redirect('/admin/index');
            }else{
                return redirect('admin/login');
            }

    }
}*/

