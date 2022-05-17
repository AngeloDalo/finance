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

class VentidueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::whereDate('date', '>=', '2022-01-01')->whereDate('date', '<=', '2022-12-31')->orderBy('date', 'desc')->get();
        $transactions_casa = Transaction::orderBy('date', 'desc')->whereDate('date', '>=', '2022-01-01')->whereDate('date', '<=', '2022-12-31')->where('group_id', 1)->get();
        $transactions_campagna = Transaction::orderBy('date', 'desc')->whereDate('date', '>=', '2022-01-01')->whereDate('date', '<=', '2022-12-31')->where('group_id', 2)->get();
        $groups = Group::all();
        $sections = Section::all();
        $types = Type::all();
        return view('admin.duemilaventidue.index', ['transactions' => $transactions, 'transactions_casa' => $transactions_casa, 'transactions_campagna' => $transactions_campagna ,'groups' => $groups, 'types' => $types, 'sections' => $sections]);
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
