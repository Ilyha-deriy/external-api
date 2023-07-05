<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DeliveryController extends Controller
{
    public function index(){
        return view('delivery.index');
    }

    public function post(Request $request){

        //An empty post office variable for the future use
        $post_office = '';

        //Validation, if in the future we'll need additional fields we can add them here
        $request->validate([
            'customer_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'sender_address' => 'required',
            'delivery_address' => 'required',
            'width' => 'required',
            'height' => 'required',
            'lenght' => 'required',
            'weight' => 'required',
            'post_office' => 'required',
        ]);

        //Details of a delivery, if some additional fields are needed we can add them here
        $details =  [
            "customer_name" => $request->input('customer_name'),
            "phone_number" => $request->input('phone_number'),
            "email" => $request->input('email'),
            "sender_address" => $request->input('sender_address'),
            "delivery_address" => $request->input('delivery_address'),
            "package_size" => $request->input('width') . 'x' . $request->input('height')
            . 'x' . $request->input('lenght') . 'x' . $request->input('weight'),
          ];

          //Here we check what post office a user chooses in the form and use different url address based on that
          //If any additional post offices are needed we can add them here
          if($request->input('post_office') == 'nova_post'){
            $post_office = 'novaposhta.test/api/delivery';
          } elseif($request->input('post_office') == 'ukr_post') {
            $post_office = 'ukrpost.test/api/delivery';
          } elseif($request->input('justin_office') == 'justin_post') {
            $post_office = 'justinpost.test/api/delivery';
          }

          //Here we send details of a package to the external api
          $response = Http::post($post_office, $details);
          $result = $response->json();
          dd($result);
    }
}
