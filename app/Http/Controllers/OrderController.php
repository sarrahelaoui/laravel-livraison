<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Ordernow;
class OrderController extends Controller
{
    public function liste()
    {
        return view('order.liste');
    }
    public function ajouter()
    {
        $orders = Ordernow::all();
        return view('order.ajouter', compact('orders'));
    }


    public function ajouter_ordre_traitement(Request $request)
    {
        $request ->validate([
            'nom'=>'required',
          'email' => 'required|email',
           'category'=>'required',
           'product'=>'required',
           'quantity'=>'required',
           'adresse_depart'=>'required',
           'adresse_destin'=>'required',
           'tel'=>'required',
           'message'=>'required',
        ]);
        $order= new Ordernow();
        $order->nom=$request->nom;
        $order->category=$request->category;
        $order->email = $request->email;
        $order->category=$request->category;
        $order->product=$request->product;
        $order->quantity=$request->quantity;
        $order->adresse_depart=$request->adresse_depart;
        $order->adresse_destin=$request->adresse_destin;
        $order->tel=$request->tel;
        $order->message=$request->message;
        $order->save();
            return redirect('/ajouter')->with('status','l\'ordre a bien ete ajoute avec succes')
    ;}
}
