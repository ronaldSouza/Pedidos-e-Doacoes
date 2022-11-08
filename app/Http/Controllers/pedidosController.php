<?php

namespace App\Http\Controllers;
use App\Models\Pedidos;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use View;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class pedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        // $pedidos = Pedidos::all();
        $pedidos = DB::table('pedidos')
                        ->join('users', 'users.id', '=', 'pedidos.pedidoUserId')
                        ->select('users.*', 'pedidos.*')
                        ->where('status', '=', 'Pendente')
                        ->get();

        return View::make('common_user.requests.index')
            ->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('common_user.requests.create');
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

        $request->validate([
            'infoPedido' => 'required',
        ]);

        
        $pedidos = new Pedidos;
        $pedidos->infoPedido = $request->post('infoPedido');
        $pedidos->pedidoUserId = Auth::user()->id;
        $pedidos->status = "pendente";
        $pedidos->dataPedido = Carbon::now()->format('Y-m-d H:i:s');
        


        $pedidos->save();

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
        //
    }


    public function list() {
        $user_id = Auth::user()->id;


        $lista = Pedidos::where('user_id', $user_id)->get();

        return view('requests.index', ['pedidos'=>$lista]);
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

        $pedidos = DB::table('pedidos')
                        ->join('users', 'users.id', '=', 'pedidos.pedidoUserId')
                        ->where('users.id', $id)
                        ->select('users.*', 'pedidos.*')
                        ->first();
                        // ->get();
                        // dd($pedidos);
                        if (is_null($pedidos)) {
                            return redirect()->to(route('admin.index'));
                        }else {
                            return View::make('common_user.requests.show')
                                        ->with('pedidos', $pedidos);
                        }

        
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
