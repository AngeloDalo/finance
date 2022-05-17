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
use Illuminate\Support\Facades\DB;
use Prophecy\Call\Call;

class TotaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::orderBy('date', 'desc')->paginate(6);
        $transactions_pay = Transaction::orderBy('date', 'desc')->get();
        $groups = Group::all();
        $sections = Section::all();
        $types = Type::all();
        return view('admin.transactions.index', ['transactions' => $transactions, 'transactions_pay' => $transactions_pay, 'groups' => $groups, 'types' => $types, 'sections' => $sections]);
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
    public function edit(Transaction $transaction)
    {
        $groups = Group::all();
        $sections = Section::all();
        $types = Type::all();
        return view('admin.transactions.edit', ['transaction' => $transaction, 'groups' => $groups, 'types' => $types, 'sections' => $sections]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $data = $request->all();
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'date' => 'required',
            'types.*' => 'nullable|exists:App\Type,id',
            'sections.*' => 'nullable|exists:App\Section,id',
            'groups.*' => 'nullable|exists:App\Group,id',
        ]);
        if ($data['name'] != $transaction->name) {
            $transaction->name = $data['name'];
        }
        if ($data['price'] != $transaction->price) {
            $transaction->price = $data['price'];
        }
        if ($data['date'] != $transaction->date) {
            $transaction->date = $data['date'];
        }
        if ($data['types'][0] != $transaction->type_id) {
            $transaction->type_id = $data['types'][0];
        }
        if ($data['groups'][0] != $transaction->group_id) {
            $transaction->group_id = $data['groups'][0];
        }
        if ($data['sections'][0] != $transaction->section_id) {
            $transaction->section_id = $data['sections'][0];
        }
        $transaction->update();
        return redirect()->route('transactions.show', $transaction->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        {
            $transaction->delete();
            return redirect()->route('transactions.index')->with('status', "Transazione nome: $transaction->name cancellata");
        }
    }
}
