<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function All(){
        $transactions = Transaction::orderBy('updated_at','desc')->get();

        return view('home',['transactions'=>$transactions]);

    }

    public function Read(Transaction $transaction,Request $request){
        return view('transaction',['transaction'=>$transaction]);
    }

    public function showCreate(){
        return view('showCreate');
    }

    public function Create(Request $request){
        $data=$request->validate([
            'transaction_title'=>'required|string|max:100',
            'description'=>'required|string|max:255',
            'status'=>'required|string',
            'total_amount'=>'required|string',
            'transaction_number'=>'required|string'
        ]);

        Transaction::create($data);

        return redirect('/');
    }

    public function Edit(Transaction $transaction,Request $request){
        return view('edit-transaction',['transaction'=>$transaction]);
    }

    public function Update(Transaction $transaction,Request $request){
        $data=$request->validate([
            'transaction_title'=>'required|string|max:100',
            'description'=>'required|string|max:255',
            'status'=>'required|string|max:10',
            'total_amount'=>'required|string',
            'transaction_number'=>'required|string'
        ]);

        $transaction->update($data);
        return redirect('/');
    }

    public function Delete(Transaction $transaction,Request $request){
        $transaction->delete();
        return redirect('/');
    }
}
