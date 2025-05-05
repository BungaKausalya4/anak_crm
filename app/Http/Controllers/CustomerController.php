<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use App\Models\Project;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
{
    $projects = Project::with('lead')->get();
    return view('customers.index', compact('projects'));
}

}
