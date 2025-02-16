<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::query()
            ->latest()
            ->get();

        return view('customers.index', [
            'customers' => $customers
        ]);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'min:11|max:11',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif,svg',
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'company' => $request->company,
            'notes' => $request->notes
        ]);

        if ($request->avatar) {
            $imageName = "avatars/" . time() . '.' . $request->avatar->extension();
            $request->avatar->move(storage_path('app/public/avatars'), $imageName);
            $customer->avatar = $imageName;
        }

        $customer->save();

        return redirect()->route('customers.index')->with('success', 'Customer Created Successfully.');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', [
            'customer' => $customer
        ]);
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'phone' => 'min:11|max:11',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif,svg',
        ]);

        $customer->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'company' => $request->company,
            'notes' => $request->notes,
        ]);

        if ($request->avatar) {
            if ($customer->avatar && Storage::exists('public/' . $customer->avatar)) {
                Storage::delete('public/' . $customer->avatar);
            }

            $imageName = "avatars/" . time() . '.' . $request->avatar->extension();
            $request->avatar->move(storage_path('app/public/avatars'), $imageName);
            $customer->avatar = $imageName;

            $customer->save();
        }

        return redirect()->route('customers.index')->with('success', 'Customer Updated Successfully.');
    }

    public function destroy(Customer $customer)
    {
        return view('customers.create');
    }
}
