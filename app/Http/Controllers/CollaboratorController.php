<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\CategorySub;
use App\Models\Wallet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CollaboratorController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $collaborators = User::where('team_id',Auth::user()->team_id)->get();
        return view('collaborator.index', [
            'collaborators' => $collaborators,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        // $user->update($request->all());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/profile')->with('sukses','data berhasil di diubah');
    }
}