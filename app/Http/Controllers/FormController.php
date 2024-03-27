<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    public function Message(Request $request) {
        //dd($request->all());
        $rules = [
            'name'   => 'string',
            'email'  => 'required|email',
            'subject'=> 'string|min:4|max:100',
            'message'=> 'required|string|min:4|max:300'
        ];
        $message = [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'name.required'=>'The Name field is required.',
            'name.unique'=>'The Name field is not unique.',
            'subject.string'=>'this is no text',
            'subject.min'=>'minimum 4 text requir',
            'message.min'=>'minimum 4 text requir',
            'message.required'=>'The message field is required.',
        ];
        $data = [
            "success"=>false,
        ];
        if (!$_POST) {
            $data['message'] = 'this Method is not post';
            return redirect('/');
        }else{
            $validator = Validator::make($request->all(),$rules,$message);
            if($validator->fails()){
                $data["message"] = 'validator fails';
                $data["errors"] = $validator-> getMessageBag() -> toArray();
                return redirect('/')->withErrors($validator)->withInput();
            } else{
                $name = $request -> post('name');
                $email = $request -> input('email');
                $subject = $request -> input('subject');
                $message = $request -> input('message');

                $arr = [
                    'sl' => 'mess1213',
                    'name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'content' => $message,
                    'time' => date('G:i:s'),
                    'date' => date('j-M-Y'),
                ];
                //$dbs = DB::insert('insert into message (sl ,name , email, subject, content, time, date) values ("sample", ?, ?, ?, ?)', [$name , $email , $subject, $message]);
                $dbs = DB::table('message')->insert($arr);
                if ($dbs) {
                    $data['success'] = true;
                    $data['message'] = "success thanks for this message";
                    return redirect('/')->withErrors(['errorAll' => 'success, thanks for message'])->withInput();
                } else{
                    $data['message'] = "sorry something wrong plese try again";
                    return redirect('/')->withErrors(['errorAll' => 'something wrong plese check'])->withInput();
                }
                //var_dump($arr);
            }
        }
    }
    public function Books(Request $request) {
        $rules = [
            'name'   => 'string|required|min:4|max:15',
            'email'  => 'required|email',
            'phone'=> 'min:4|max:15',
            'date'=> 'min:1|max:15',
            'time'=> 'string|min:1|max:15',
            'people'=> 'string|min:1|max:15',
            'message'=> 'required|string|min:4|max:300'
        ];
        $message = [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'name.required'=>'The Name field is required.',
            'name.unique'=>'The Name field is not unique.',
            'name.min'=>'minimum 4 number.',
            'phone.min'=>'minimum 4 number.',
            'date.min'=>'minimum 4 number.',
            'time.min'=>'minimum 4 number.',
            'people.min'=>'minimum 1 number.',
            'name.max'=>'minimum 15 number.',
            'phone.max'=>'minimum 15 number.',
            'date.max'=>'minimum 15 number.',
            'date.max'=>'minimum 15 number.',
            'time.max'=>'minimum 15 number.',
            'people.max'=>'minimum 15 number.',
            'message.max'=>'minimum 300 number.',
            'message.min'=>'minimum 4 text requir',
            'message.required'=>'The message field is required.',
        ];
        $data = [
            "success"=>false,
        ];
        if (!$_POST) {
            $data['message'] = 'this Method is not post';
            return redirect('/');
        }else{
            $arr = [
                'cname' => $request->post('name'),
                'cemail' => $request->post('email'),
                'cphone' => $request->post('phone'),
                'cdate' => $request->post('date'),
                'ctime' => $request->post('time'),
                'cpeople' => $request->post('people'),
                'message' => $request->post('message'),
                'statuses' => 'active',
            ];
            $validator = Validator::make($request->all(),$rules,$message);
            if($validator->fails()){
                $data["message"] = 'validator fails';
                $data["errors"] = $validator-> getMessageBag() -> toArray();
                return redirect('/')->withErrors($validator)->withInput();
            } else {
                //dd($request->all());
                //dd($arr);
                $dbs = DB::table('tablebook')->insert($arr);
                if ($dbs) {
                    $data['success'] = true;
                    $data['message'] = "success thanks for this message";
                    return redirect('/')->withErrors(['errorAll2' => 'Thanks for message'])->withInput();
                } else{
                    $data['message'] = "sorry something wrong plese try again";
                    return redirect('/')->withErrors(['errorAll2' => 'something wrong plese try again'])->withInput();
                }
            }
        }
        //return; // json_encode($data);
    }
}
