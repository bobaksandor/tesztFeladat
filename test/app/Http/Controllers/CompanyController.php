<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', ['companies' => $companies]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', ['company' => $company]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'tax' => 'required|numeric|digits:9',
                'phone' => 'required|min:7|max:15',
                'email' => 'required|email',
            ],

        );

        Company::factory()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'tax_number' => $validated['tax'],
            'phone_number' => $validated['phone']
        ]);

        return to_route('companies.index');
    }

    public function show(Company $company)
    {
        return view('companies.show', ['company' => $company]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'tax' => 'required|numeric|digits:9',
                'phone' => 'required|min:7|max:15',
                'email' => 'required|email',
            ],

        );

        $company = Company::findOrFail($id);

        $company->name = $validated['name'];
        $company->tax_number = $validated['tax'];
        $company->phone_number = $validated['phone'];
        $company->email = $validated['email'];

        $company->save();

        return redirect()->route('companies.show', $id);
    }

    public function destroy(Company $company)
    {

        $company->delete();
        return to_route('companies.index');
    }
}