<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::latest()->get(); // ambil data dari database
    return view('leads.index', compact('leads'));
    }
    public function create()
    {
        return view('leads.create');
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'status' => 'required|string',
    ]);

    $lead = Lead::findOrFail($id);
    $lead->update($request->all());

    return redirect()->route('leads.index')->with('success', 'Lead berhasil diperbarui.');
}


    public function edit($id)
{
    $lead = Lead::findOrFail($id);
    return view('leads.edit', compact('lead'));
}




    public function destroy($id)
{
    $lead = Lead::findOrFail($id);
    $lead->delete();

    return redirect()->route('leads.index')->with('success', 'Lead berhasil dihapus.');
}


    public function store(Request $request)
{
    $request->validate([
        'name'   => 'required',
        'email'  => 'required|email|unique:leads,email',
        'phone'  => 'required',
        'status' => 'required|in:Belum Dihubungi,Sudah Dihubungi', // ini validasi pilihan status
    ]);

    Lead::create($request->all());

    return redirect('/leads')->with('success', 'Lead berhasil ditambahkan!');
}

}

