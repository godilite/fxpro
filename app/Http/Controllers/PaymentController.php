<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Payment;
use App\Category;
use Paystack;
use Auth;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        
        $paymentDetails = Paystack::getPaymentData();

        $paymentDetails = Paystack::getPaymentData(); 
        $course = (($paymentDetails['data'] ['metadata']['course_id'])); 
        $Student_Name = (($paymentDetails['data'] ['metadata']['Student_First_Name'])); 
        $Student_last_Name = (($paymentDetails['data'] ['metadata']['Student_Last_Name'])); 
        
        if($paymentDetails['data']['status'] == 'success'){ 
            
           
            $funding = Payment::updateOrCreate([
                //Add unique field combo to match here
                //For example, perhaps you only want one entry per user:
                'user_id'   => Auth::user()->id,
            ],[
                'plan_id'     => $course,
                'firstName' => $Student_Name,
                'lastName'    => $Student_last_Name,
            ]); 

        
            $id = $course;
            $category = Category::find($id);
            $first_post=$category->posts->last();
            return view('frontend.tradesplash',['slug'=>$category->slug])->with('category',$category->posts()->orderBy('id','DESC')->get())
            ->with('title',$category->name)
            ->with('first_post', $first_post)
            //->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get()); 
        }
        else
        { 
            return view('frontend.trading')->with('failed','transaction failed'); 
        }
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}