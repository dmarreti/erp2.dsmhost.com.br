<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Client;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use \App\Http\Requests\Admin\ClientRequest;
use Illuminate\Support\Facades\Mail;

use App\Mail\Website\RegistrationClientMail;
use App\Mail\SandMailTest;
use App\Models\User as ModelsUser;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(){

        $clients = Client::all();

        // return view('admin.modules.clients.index', [
        //     'head' => 'Gestão de Clientes',
        //     'clients' => $clients
        // ]);

        // $dadosUser = [
        //     'email' => 'dmarreti@gmail.com',
        //     'name' => 'Danilo Marreti'
        // ];

        $clients = Client::all();
        
       // var_dump(bcrypt('teste'));

            return view('admin.modules.clients.index', [
                'head' => 'Gestão de Clientes',
                'clients' => $clients
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.clients.create', [
            'head' => 'Cadastro de Cliente'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ClientRequest $request)
    {

        $clientCreate = Client::create($request->all());
        $clientCreate->save();

        $userCreate = User::create($request->all());
        $userCreate->client_id = $clientCreate->id;
        $userCreate->setPasswordAttribute($request->password);
        $userCreate->save();

        var_dump($request->all());

        // Mail::to('danilo@linknetworks.com.br')
        //       ->send(new SandMailTest($request->all()));

        //return 'OK!';

        //Mail::to('comercial@dsmhost.com.br')->send(new RegistrationClientMail($request->name));

        return redirect()->route('admin.client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::where('id', $id)->first();
        return view('admin.modules.clients.show', [
            'head' => 'Visualizar Cliente',
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::where('id', $id)->first();

        return view('admin.modules.clients.edit', [
            'head' => 'Editar Cliente',
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {

        $client = Client::where('id', $id)->first();

        $client->setDocumentAttribute($request->document);
        $client->setDocumentSecondaryAttribute($request->document_secondary);
        $client->setTelephoneAttribute($request->telephone);
        $client->setCellphoneAttribute($request->cellphone);
        $client->setZipcodeAttribute($request->zipcode);

        $client->fill($request->all());

        if(!$client->save()){
           // return redirect()->back()->withInput()->withErrors();
            return redirect()->back()->withInput();
        }

        return redirect()->route('admin.client.edit', [
            'head' => 'Editar Cliente',
            'client' => $id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::where('id', $id)->first();

        if(!$client->delete()){
            $json['message'] = 'Ooops, Não foi possivel deletar o registro!';
            return response()->json($json);
        }

        return redirect()->route('admin.client.index');

    }
}
