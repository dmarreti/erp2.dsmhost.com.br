<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers = Admin::all();

        if(Auth::guard('admin')->check() === true){
            $userLog = Auth::user()->name;
        }
    
        return view('admin.modules.admins.index', [
            'head' => 'Administradores',
            'managers' => $managers,
            'user' => $userLog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $adminCreate = Admin::create($request->all());
        $adminCreate->setPasswordAttribute($request->password);
        $adminCreate->save();

        var_dump($request->all());

        // Mail::to('danilo@linknetworks.com.br')
        //       ->send(new SandMailTest($request->all()));

        //return 'OK!';

        //Mail::to('comercial@dsmhost.com.br')->send(new RegistrationClientMail($request->name));

        return redirect()->route('admin.manager.index');
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
        $admin = Admin::where('id', $id)->first();

        if(!$admin->delete()){
            $json['message'] = 'Ooops, Não foi possivel deletar o registro!';
            return response()->json($json);
        }

        return redirect()->route('admin.manager.index');
    }
}
