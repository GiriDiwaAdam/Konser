<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tickets = Ticket::latest()->paginate(5);
        return view('tickets.index', compact('tickets'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nomor_tiket'=>'required',
            'nama' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_bangku' => 'required',
            'tanggal_checkin'=>'required',
        ]);

        Ticket::create($request->all());
        return redirect()->route('tickets.create')
            ->with('success', 'Ticket Has Save Successfully');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {   
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request -> validate([
            'nomor_tiket' => 'required',
            'nama' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_bangku' => 'required',
            'tanggal_checkin'=>'required',
            'status' => 'required',
        ]);

        $ticket->update($request->all());
        return redirect()->route('tickets.index')
            ->with('success','Ticket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')
            ->with('success','Student deleted successfully'); 
    }


    
}
