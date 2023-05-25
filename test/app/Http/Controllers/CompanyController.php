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

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'tax' => 'required|numeric|digits:9',
                'phone' => ['required', 'regex:/^[0-9]{11}$/'],
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
}