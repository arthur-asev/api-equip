<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEquip;
use App\Models\Equip;
use Illuminate\Http\Request;

class EquipController extends Controller
{

    public function index()
    {      $equips = Equip::latest('id')->paginate();
        return view('index', compact('equips'));
    }

    public function create(){
        return view('create');
    }

    public function store(StoreUpdateEquip $request)
    {
        $data = $request->all();
        Equip::create($data);
        return redirect()->route('equip.index')->with('message', 'Equipamento cadastrado com sucesso !!');

    }

    public function show($id)
    {   $equip = Equip::find($id);
        Equip::where('id', $id)->first();
        if(!$equip){
            return redirect()->route('equip.index');
        }
        return view('show', compact('equip'));
    }

    public function update(StoreUpdateEquip $request, $id)
    {
        if (!$equip = Equip::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();
        $equip->update($data);

        return redirect()
                ->route('equip.index')
                ->with('message', 'Equipamento atualizado com sucesso');
    }

    public function edit($id)
    {
        if (!$equip = Equip::find($id))  {
            return redirect()->back();
        }
        return view('edit', compact('equip'));
    }


    public function destroy($id)
    {
        $equip = Equip::find($id);
        $equip->delete();
        return redirect()
        ->route(('equip.index'))
        ->with('message', 'Equipamento Deletado com sucesso');
    }
}