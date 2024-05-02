<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //insert
//        DB::table('users')->insert([
//            'name' => 'saba',
//            'email' => 'saba273ge@gmail.com',
//            'password' => Hash::make('secret'),
//        ]);
        //reading
//        $users = DB::table('users')->get();
//        dd($users);

        //update
//        $users = DB::table('users')
//            ->where('id', 3)
//            ->update([
//            'name' => 'sabski0',
//            'password' => Hash::make('secret123'),
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now()
//        ]);
//        dd($users);

        //DELETE
//        $users = DB::table('users')->where('id', 1)->delete();
//        DB::table('users')->truncate();

        $users = Storage::json('users.json');

        foreach($users as $user){
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['emai;']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }



        return redirect('/');
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
        //
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
        //
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
