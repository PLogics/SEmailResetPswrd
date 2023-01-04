<?php

namespace App\Http\Controllers;

use App\Events\PasswordReset;

use Illuminate\Http\Request;
use App\Models\Login;
use DateTime;
use Illuminate\Support\Facades\Mail;


class RController extends Controller
{
    // for login and Register page//
    public function login_register()
    {
        return view('/loginRegister');
    }
    //add users information//
    public function sign_up(Request $request)
    {
        $add = new Login;
        if ($request->isMethod('post')) {
            $add->fullname = $request->get('fullname');
            $this->mail = $add->email = $request->get('email');
            $add->password = $request->get('password');

            if (Login::where('email', $add->email)->exists()) {
                return back()->with('error', 'Account already exist!');
            } else {
                $add->save();
                $request->session()->put('userid',$add->id);
                $maildata=['name'=>"PLogics" , 'data'=>"Hello PLogics"];
                    $user['to']='palakpalak23@gmail.com';
                    Mail::send('verifyemail',$maildata,function($message) use ($user){
                        $message->to($this->mail);
                        $message->subject('Hello Sir');
                    });
                        return back()->with('success', 'Please verify your account on email');
            }
        }
    }
    // login with username & password //
    public function login(Request $request)
    {
        $username = $request->get('email');
        $password = $request->get('password');
        $data = Login::select('*')->where('email', $username)
            ->where('password', $password)
            ->first();
            if(!empty($data)){
                return redirect("/home")->with('success', 'Password match!!');
            }else{
                return back()->with('error', 'Check your details!!');
            }
    }
    //page for email sent to verify account//
    public function home()
    {
        return view('/home');
    }
    //after verification of account update email verified//
    public function emailverify($id)
    {
       $data = Login::find($id);
        // $data = new Login();
        // $a = new \DateTime();
        if($data){
            $data->email_verified_at = date('Y-m-d H:i:s');
            // dd($data);
            $data->save();
            return redirect('home');
        } 
    }
    public function resetpassword()
    {
        return view('/resetpassword');
    }
    //changepassword//
    public function forgot_password()
    {
        return view("/forgotPassword");
    }

    //event generate//
    public function email_forgot_password(Request $request)
    {
        $username = $request->get('email');

        event(new PasswordReset($username));
    }
    //update password //
    public function update_password(Request $request)
    {
        $username = $request->get('email');
        $data = Login::select('*')->where('email', $username)
            ->first();
        $newpassword = $request->get('newpassword');
        $confirmnewpassword = $request->get('confirmnewpassword');
        if ($newpassword == $confirmnewpassword) {
            if ($request->isMethod('post')) {
                if (isset($data)) {
                    $data->password = $request->get('newpassword');
                    $data->save();
                }
            }
            return back()->with('success', 'Password changed successfully.');
        }else{
            return back()->with('error', 'Newpassword & Confirmnewpassword doesnot match!!');
        }
    }
    public function reset_email()
    {
        return view('/resetemail');
    }
    public function logout()
    {
        return redirect('/loginRegister');
    }
    // public function mail()
    // {
    //     return view('/mail');
    // }
    // public function index()
    // {
    //     $maildata=['name'=>"PLogics" , 'data'=>"Hello PLogics"];
    //     $user['to']='palakpalak23@gmail.com';
    //     Mail::send('verifyemail',$maildata,function($message) use ($user){
    //         $message->to($user['to']);
    //         $message->subject('Hello Sir');
    //     });
    // }

}
