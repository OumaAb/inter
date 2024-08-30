<?php

namespace App\Http\Controllers;

use App\Models\Justification;
use Illuminate\Http\Request;

class JustificationController extends Controller
{
    public function index()
    {
        $justifications = Justification::all();
        return view('justifications.index', compact('justifications'));
    }

    public function create()
    {
        return view('justifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'justification' => 'required',
        ]);

        Justification::create($request->all());

        return redirect()->route('justifications.index');
    }

    public function show($id)
    {
        $justification = Justification::findOrFail($id);
        return view('justifications.show', compact('justification'));
    }

    public function edit($id)
    {
        $justification = Justification::findOrFail($id);
        return view('justifications.edit', compact('justification'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'justification' => 'required',
        ]);

        $justification = Justification::findOrFail($id);
        $justification->update($request->all());

        return redirect()->route('justifications.index');
    }

    public function destroy($id)
    {
        $justification = Justification::findOrFail($id);
        $justification->delete();

        return redirect()->route('justifications.index');
    }
}

