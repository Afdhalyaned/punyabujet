<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\CategorySub;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        $categorySubs = CategorySub::all();
        $wallets = Wallet::all();
        // dd($transactions);
        return view('transaction.index', [
            'transactions' => $transactions,
            'categorySubs' => $categorySubs,
            'wallets' => $wallets,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = new Transaction;
        $transaction->team_id = Auth::user()->team_id;
        $transaction->date = $request->date;
        $transaction->detail = $request->detail;
        $transaction->ammount = $request->ammount;
        $transaction->category_sub_id = $request->category_sub_id;
        $transaction->wallet_id = $request->wallet_id;
        $transaction->save();

        return redirect('/transaction');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction = Transaction::find($id);
        $wallets = Wallet::all();
        $CategorySubs = CategorySub::all();
        return view('transaction.edit',[
            'transaction' => $transaction,
            'wallets' => $wallets,
            'CategorySubs' => $CategorySubs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
