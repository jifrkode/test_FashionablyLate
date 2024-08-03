<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $formItems = ['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building','category_id','detail'];

    public function index()
    {
        // return view('index', ['authors' => $authors]);
        return view('contact.index');
    }

    function post(Request $request){
        // dd($request);

        $tell1 = $request->input('tell1');
        $tell2 = $request->input('tell2');
        $tell3 = $request->input('tell3');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
    
        $fullTell = "{$tell1}{$tell2}{$tell3}";
        $fullName = "{$first_name}{$last_name}";
    
        $input = $request->only($this->formItems);
        $input['tell'] = $fullTell;
        $input['name'] = $fullName;
        
		//セッションに書き込む
		$request->session()->put("form_input", $input);

		return redirect()->action([ContactController::class, 'confirm']);
	}

    function confirm(Request $request){
		//セッションから値を取り出す
		$input = $request->session()->get("form_input");
		
		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->action([ContactController::class, 'index']);
		}
        // dd($input);
		return view("contact.confirm",["input" => $input]);
	}

    // function send(Request $request)
    // {
    //     //セッションから値を取り出す
    //     $input = $request->session()->get("form_input");

    //     //セッションに値が無い時はフォームに戻る
    //     if (!$input) {
    //         return redirect()->action([ContactController::class, 'index']);
    //     }

    //     //ここでメールを送信するなどを行う

    //     //セッションを空にする
    //     $request->session()->forget("form_input");

    //     return redirect()->action([ContactController::class, 'complete']);
    // }

    public function thanks(Request $request)
    {
        // return view('index', ['authors' => $authors]);
        return view('contact.thanks');
    }
}
