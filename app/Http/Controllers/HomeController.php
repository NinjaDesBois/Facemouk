<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($pseudo)
    {
        if (Auth::user()->active == 0 && Auth::user()->verification_code !== null) {

            return redirect()->route('verify');
        } else {
            $user = User::where('pseudo', $pseudo)->first();
            if ($user) {
                return view('home', compact('user'));
            } else {
                return abort(404);
            }
        }
    }
    public function verify()
    {

        if (Auth::user()->active == 1 && Auth::user()->verification_code == null) {
            return redirect()->route('home',  Auth::user()->pseudo);
        } else {
            return view('verify');
        }
    }

    public function VerifyCode(Request $request)
    {
        $user = Auth::user();
        if ($user->verification_code === $request->code) {
            $user->active = 1;
            $user->verification_code = null;
            $user->email_verified_at = Carbon::now();
            $user->save();
            return redirect()->route('home', $user->pseudo);
        } else {
            return back()->with('error', 'the code is invalid');
        }
    }

    public function Welcome()
    {   
        // LIGNE DE CODE POUR INVERSER LORDRE DE AFFICHAGE avec ->get()....
        // En changeant le ->get() par paginate(2)-> afin de paginer les donnees
        $posts= Post::orderBy('created_at' , 'desc')->paginate(6);
        $user=Auth::user();
        return view('welcome',compact('user','posts'));
    }

    public function editProfile($pseudo)
    {
        $user = User::where('pseudo', $pseudo)->first();
        if ($user) {
            return view('user.edit', compact('user'));
        } else {
            return abort(404);
        }
    }

    public function updateProfile(Request $request, $pseudo)
    {

        $request->validate([
            'name' => 'required',
            'pseudo' => 'required',
            'avatar' => 'mimes:png,jpg,jpeg,svg,jfif',
            'biography' => 'min:3'

        ]);



        $user = User::where('pseudo', $pseudo)->first();
        if ($user) {

            $user->name = $request->name;
            $check_user = User::where('pseudo', $request->pseudo)->first();


            if ($check_user) {
                flashy()->error('Pseudo already exist');
                return back();
            } else {
                if ($request->pseudo !== $user->pseudo) {
                    $user->pseudo = $request->pseudo;
                }
            }

            $user->biography = $request->biography;


            if ($request->hasFile('avatar')) {
                $user->avatar = $request->file('avatar')->store('profiles');
            }

            $user->save();


            return redirect()->route('home', $user->pseudo);
            flashy()->success('Your profile has been update successfully');
        } else {
            return back()->with('error', 'the code is invalid');
        }
    }

    public function updatePassword(Request $request, $pseudo)
    {
        $user = User::where('pseudo', $pseudo)->first();

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',

        ]);
        if ($user) {
            if (Hash::check($request->old_password, $user->password)) {
                if ($request->new_password === $request->confirm_password) {

                    $user->password = Hash::make($request->new_password);

                    $user->save();

                    flashy()->success('Your profile has been update successfully');

                    return redirect()->route('home', $user->pseudo);
                } else {
                    flashy()->error('Both password don\'t match');
                    return back();
                }
            } else {
                flashy()->error('password is incorrect');
                return back();
            }
        } else {
            return abort(404);
        }
    }
}
