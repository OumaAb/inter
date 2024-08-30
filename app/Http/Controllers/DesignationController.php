<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::with('justification')->get();
        return view('designations.index', compact('designations'));
    }


    public function create()
{
    $justifications = Justification::all();
    return view('designations.create', compact('justification'));
}

    public function store(Request $request)
    {
        $request->validate([
            'designation' => 'required',
            'quantity' => 'required|integer',
            'justification_id' => 'required|exists:justifications,id',
        ]);

        Designation::create($request->all());

        return redirect()->route('designations.index');
    }

    public function show($id)
    {
        $designation = Designation::with('justification')->findOrFail($id);
        return view('designations.show', compact('designation'));
    }

    public function edit($id)
    {
        $designation = Designation::findOrFail($id);
        return view('designations.edit', compact('designation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'designation' => 'required',
            'quantity' => 'required|integer',
            'justification_id' => 'required|exists:justifications,id',
        ]);

        $designation = Designation::findOrFail($id);
        $designation->update($request->all());

        return redirect()->route('designations.index');
    }

    public function destroy($id)
    {
        $designation = Designation::findOrFail($id);
        $designation->delete();

        return redirect()->route('designations.index');
    }
}

