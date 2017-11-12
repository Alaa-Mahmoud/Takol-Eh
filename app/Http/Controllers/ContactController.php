<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/*This Controller For Contact Us Form*/
class ContactController extends Controller
{
     // Store contact info
  public function store(Request $request)
  {
      $validator = Validator::make($request->all(), [
          'name'  => 'required|alpha',
          'email'=>'required|email',
          'message'=>'required'
      ]);

      if ($validator->fails())
      {
          return redirect('/#contact')->withErrors($validator)->withInput();
      }else{
          return redirect('/#contact');
      }

  }
}
