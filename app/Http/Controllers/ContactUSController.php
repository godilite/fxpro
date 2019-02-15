<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;
 
class ContactUSController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('frontend.contact');
   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function contactUSPost(Request $request) 
    {
     $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
     ContactUS::create($request->all()); 
    
     Mail::send('email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('godilite@gmail.com');
        $message->to('info@fxpro.com.ng', 'Admin')->subject('FXPro Feedback');
    });
  
     return back()->with('success', 'Thanks for contacting us!'); 
    }

    public function subscribe(Request $request) 
    {
     $this->validate($request, ['name' => 'required', 'email' => 'required|email']);
     Mailgun::api()->put("lists/{$list}/members/{$member}", [
        'address'      => 'new-email@example.com',
        'name'         => 'John Doe',
        'vars'         => json_encode(['age' => 35, 'country' => 'US']),
        'subscribed'   => 'no'
    ]);
     return back()->with('success', 'Thanks for contacting us!'); 
    }
}