<?php

namespace App\Http\Controllers;
use App\Models\Pedidos;
use App\Models\Doacoes;
use App\Models\DoacoesDosPedidos;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use View;
use Illuminate\Support\Facades\DB;

// use App\Pedido;



use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        return view('common_user.requests.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        
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


        $doacao = new Doacoes;

        $doacao->infoDoacao = $request->post('infoDoacao');
        $doacao->pedidoId = $request->post('pedidoId');
        $doacao->userId = Auth::user()->id;
        $doacao->dataDoacao = Carbon::now()->format('Y-m-d H:i:s');
        
        // dd($doacao);
        $doacao->save();

        $pedido = Pedidos::where('id', '=', $doacao->pedidoId)->first();
        $pedido->status = "Analise";
        $pedido->update();

        $pedidoNome = DB::table('pedidos')
                            ->join('users', 'users.id', '=', 'pedidos.pedidoUserId')
                            ->select('users.name')
                            ->where('users.id', '=', $pedido->pedidoUserId)
                            ->first();
        // dd($pedidoNome->name);


        $doacoes_dos_pedidos = new DoacoesDosPedidos;

        $doacoes_dos_pedidos->doacaoId = $doacao->id;
        $doacoes_dos_pedidos->pedidoId = $pedido->id;
        $doacoes_dos_pedidos->nomeDoacao = Auth::user()->name;
        $doacoes_dos_pedidos->nomePedido = $pedidoNome->name;

        $doacoes_dos_pedidos->save();


        // dd($doacoes_dos_pedidos);
        return redirect()->to(route('pedidos.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $pedidos = DB::table('pedidos')
                        ->join('users', 'users.id', '=', 'pedidos.pedidoUserId')
                        ->select('users.*', 'pedidos.*')
                        ->where('pedidos.id', $id)
                        ->first();
        return View::make('common_user.donations.create')
            ->with('pedidos', $pedidos);


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
