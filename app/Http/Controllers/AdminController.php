<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use View;
use App\Models\Pedidos;
use App\Models\Doacoes;
use App\Models\DoacoesDosPedidos;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $doacoes = DB::table('doacoes')
                        ->join('users', 'users.id', '=', 'doacoes.userId')
                        ->select('users.*')
                        ->where('doacoes.pedidoId', $id)
                        ->select('users.*')
                        ->first();

        $pedidos = DB::table('pedidos')
                        ->join('users', 'users.id', '=', 'pedidos.pedidoUserId')
                        ->select('users.*')
                        ->where('pedidos.id', $id)
                        ->select('users.*')
                        ->first();

        // dd($doacoes, $pedidos);
    
            

        return View::make('admin.donations.show')
        ->with('doacoes', $pedidos, $doacoes);
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

        $info[0] = DB::table('doacoes_dos_pedidos')
                            ->join('pedidos','pedidos.id', '=', 'doacoes_dos_pedidos.pedidoId')
                            ->join('users As user_pedido', 'user_pedido.id', '=', 'pedidos.pedidoUserId')
                            ->select('pedidos.*', 'user_pedido.*')
                            ->where('doacoes_dos_pedidos.id', $id)
                            ->first();

        $info[1] = DB::table('doacoes_dos_pedidos')
                            ->join('doacoes','doacoes.id', '=', 'doacoes_dos_pedidos.doacaoId')
                            ->join('users As user_doacao', 'user_doacao.id', '=', 'doacoes.userId')
                            ->select('doacoes.*', 'user_doacao.*', 'doacoes_dos_pedidos.id')
                            ->where('doacoes_dos_pedidos.id', $id)
                            // ->where('doacoes.pedidoId', $id)
                            ->first();

                        // dd($info);
                        
                        

        return View::make('admin.donations.show')
        ->with('info', $info);
    }

    public function list() 
    {

        // $pedidos = DB::table('pedidos')
        //                 ->join('users', 'users.id', '=', 'pedidos.pedidoUserId')
        //                 ->select('users.*', 'pedidos.*')
        //                 ->where('status', '=', 'Analise')
        //                 ->get();
        


        $doacoes_dos_pedidos = DB::table('doacoes_dos_pedidos')
                                    ->join('pedidos','pedidos.id', '=', 'doacoes_dos_pedidos.pedidoID')
                                    ->join('doacoes','doacoes.id', '=', 'doacoes_dos_pedidos.doacaoId')
                                    ->where('status', '=', 'Analise')
                                    ->select('doacoes.*', 'pedidos.*', 'doacoes_dos_pedidos.*')
                                    // ->select('doacoes_dos_pedidos.*')
                                    ->get();
        // dd($doacoes_dos_pedidos);

        

        return View::make('admin.donations.index')
            ->with('doacoes_dos_pedidos', $doacoes_dos_pedidos);
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

        $pedidoId = DB::table('pedidos')
                            ->join('doacoes_dos_pedidos', 'doacoes_dos_pedidos.pedidoId','=', 'pedidos.id')
                            ->select('pedidos.id')
                            ->where('doacoes_dos_pedidos.id', '=', $id)
                            ->first();

        $pedidos = Pedidos::where('pedidos.id', '=', $pedidoId->id)->first();

        $doacoes_dos_pedidos = DB::table('doacoes_dos_pedidos')
                                    ->join('pedidos', 'pedidos.id', '=', 'doacoes_dos_pedidos.pedidoId')
                                    ->select('pedidos.status')
                                    ->where('doacoes_dos_pedidos.Id', '=', $id)
                                    ->first();
        $pedidos->status = "Aceito";
        $pedidos->update();
        
        return redirect()->to(route('admin.index'));
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
