<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::query()
            ->latest()
            ->get();

        return view('leads.index', [
            'leads' => $leads
        ]);
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:leads,email',
            'phone' => 'min:11|max:11',
        ]);

        $lead = Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'source' => $request->source,
            'source_url' => '//' . $request->source_url,
            'notes' => $request->notes
        ]);

        return redirect()->route('leads.index')->with('success', 'Lead Created Successfully.');
    }

    public function edit(Lead $lead)
    {
        return view('leads.edit', [
            'lead' => $lead
        ]);
    }

    public function update(Request $request, Lead $lead)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:leads,email,' . $lead->id,
            'phone' => 'min:11|max:11',
        ]);

        $lead->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'source' => $request->source,
            'source_url' => $request->source_url,
            'notes' => $request->notes,
        ]);

        return redirect()->route('leads.index')->with('success', 'Lead Updated Successfully.');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('leads.index')->with('success', 'Lead Deleted Successfully.');
    }
}
