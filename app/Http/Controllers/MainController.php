<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{

    // Index
    public function home()
    {

        $saints = Saint::orderBy('created_at', 'DESC')->get();

        // $data = [
        //     'saints' => $saint
        // ];

        return view('pages.home', compact('saints'));
    }

    // Show
    public function saintShow($id)
    {

        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saintShow', $data);
    }

    // Delete
    public function saintDestroy($id)
    {

        $saint = Saint::find($id);
        $saint->delete();

        return redirect()->route('home');
    }

    // Create
    public function saintCreate()
    {
        return view('pages.saintCreate');
    }

    // Store
    public function saintStore(Request $request)
    {

        $data = $request->all();

        // var_dump($data);

        $saint = new Saint();

        $saint->nome = $data['nome'];
        $saint->luogo_di_nascita = $data['luogo_di_nascita'];
        $saint->data_benedizione = $data['data_benedizione'];
        $saint->numero_miracoli = $data['numero_miracoli'];

        $saint->save();

        return redirect()->route('home');
    }
}
