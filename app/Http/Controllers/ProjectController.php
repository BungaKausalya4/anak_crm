<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Product;


class ProjectController extends Controller
{
    public function process($id)
{
    $lead = Lead::findOrFail($id);
    $products = Product::all(); 

 
    return view('projects.process', compact('lead', 'products'));
}


    public function destroy($id)
{
    $project = Project::findOrFail($id);
    $project->delete();

    return redirect()->route('customers.index')->with('success', 'Proyek berhasil dihapus.');
}

public function store(Request $request, $id)
{
    $validated = $request->validate([
        'product_id' => 'required|exists:products,id',
    ]);

    $lead = Lead::findOrFail($id);

    $project = new Project();
    $project->lead_id = $lead->id;
    $project->product_id = $request->product_id;
    $project->status = 'Disetujui';

    $project->save();

    return redirect()->route('customers.index')->with('success', 'Proyek berhasil diproses.');
}




    
}
