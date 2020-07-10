<?php

namespace App\Http\Controllers;

use App\FilmeModel;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = FilmeModel::all();

        $resposta  = '<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id do filme</th>
            <th scope="col">Nome do filme</th>
            <th scope="col"> Id da categoria </th>
            <th scope="col"> Ano lançamento </th>
          </tr>
        </thead>
        <tbody>';

        foreach ($filmes as $filme) {

            $resposta .= '
              <tr>
                <th scope="row">' . $filme->idFilme . '</th>
                <td>' . $filme->nomeFilme . '</td>
                <td>' . $filme->idCategoria . '</td>
                <td>' . $filme->anoLancamento . '</td>
              </tr>';
        }

        $resposta .= '</tbody>
          </table>';

        echo $resposta;
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
