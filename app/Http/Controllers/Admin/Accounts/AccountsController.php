<?php

namespace App\Http\Controllers\Admin\Accounts;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Hash;

class AccountsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the user list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::Select('id', 'name', 'email')->get();
        $userupdated = session()->pull('userupdated', false);
        $userdeleted = session()->pull('userdeleted', false);

        return view('admin.accounts.index', ['users' => $users, 'userupdated' => $userupdated, 'userdeleted' => $userdeleted]);
    }

    /**
     * Shows the create user form
     *
     * @return \Illuminate\Http\Response
     */
    public function showCreateForm()
    {
        return view('admin.accounts.create');
    }

    /**
     * Creates a new user
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = new User;
        $user->name = $request->get('fullname');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return redirect('/admin/accounts');
    }

    /**
     * Creates a new user
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user != null) {
            $user->delete();
        }
        
        session()->put('userdeleted', true);
        return back();
    }

    /**
     * Shows the edit page
     *
     * @return \Illuminate\Http\Response
     */
    public function showEditForm($id)
    {
        $user = User::find($id);

        if ($user == null)
        {
            return back();
        }

        return view('admin.accounts.edit', ['user' => $user]);
    }


    /**
     * Updates a new user
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUser($id, UpdateUserRequest $request)
    {
        $user = User::find($id);

        if ($user != null)
        {
            $user->name = $request->get('fullname');
            $user->email = $request->get('email');
            
            if ($request->get('changepassword') == 1)
            {
                $user->password = Hash::make($request->get('password'));
            }
            $user->save();

            $request->session()->put('userupdated', true);
            return redirect('/admin/accounts');
        }

        return redirect('/admin/accounts');
    }
}
