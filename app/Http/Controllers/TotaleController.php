<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Transaction;
use App\Section;
use App\Group;
use App\Type;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Prophecy\Call\Call;
use App\Message;

class TotaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        $groups = Group::all();
        $sections = Section::all();
        $types = Type::all();
        return view('admin.transactions.index', ['transactions' => $transactions, 'groups' => $groups, 'types' => $types, 'sections' => $sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        $sections = Section::all();
        $types = Type::all();
        return view('admin.transactions.create', ['groups' => $groups, 'types' => $types, 'sections' => $sections]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $type = Type::select('name')->where('id', $data['types'][0])->first();
        $type = $type->name;
        $section = Section::select('name')->where('id', $data['sections'][0])->first();
        $section = $section->name;
        $group = Group::select('name')->where('id', $data['groups'][0])->first();
        $group = $group->name;
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'date' => 'required',
            'types.*' => 'nullable|exists:App\Type,id',
            'sections.*' => 'nullable|exists:App\Section,id',
            'groups.*' => 'nullable|exists:App\Group,id',
        ]);
        $transaction = new Transaction();
        $transaction->fill($data);
        $transaction->type_id = $data['types'][0];
        $transaction->section_id = $data['sections'][0];
        $transaction->group_id = $data['groups'][0];
        $transaction->save();
        return view('admin.transactions.show', ['transaction' => $transaction, 'group' => $group, 'type' => $type, 'section' => $section]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        $type = Type::select('name')->where('id', $transaction->type_id)->first();
        $type = $type->name;
        $section = Section::select('name')->where('id', $transaction->section_id)->first();
        $section = $section->name;
        $group = Group::select('name')->where('id', $transaction->group_id)->first();
        $group = $group->name;
        return view('admin.transactions.show', ['transaction' => $transaction, 'group' => $group, 'type' => $type, 'section' => $section]);
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
