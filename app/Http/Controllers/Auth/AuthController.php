<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin(){
       if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
      if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect('/cases');
      } 
        
    }
    


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function customRegister(Request $request)
    {
        $userData   = $request->all();
        
        $checkUser = User::where('sugar_id',$userData['contact_id'])->first();
        if(empty( $checkUser) && $userData['is_portal_user']==1){
          
                return User::create([
                'fname' => $userData['fname'],
                'email' => $userData['email'],
                'sugar_id' => $userData['contact_id'],
                'password' => bcrypt($userData['password']),
            ]);

        }else{
            $id   = $checkUser->id;
            $user = User::find($id);    
            $user->delete();
        }
        
    }
}
