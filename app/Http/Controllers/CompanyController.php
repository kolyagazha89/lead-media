<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function index() : View
    {
        return view('company/companies', [
            'companies' => Company::latest()->paginate(10)
        ]);
    }
    public function create(){
        return view('company/companyAdd');
    }
    public function store(Request $req): RedirectResponse
    {
        Company::create($req->validate([
            'name'=>'required',
            'email'=>'required|unique:companies',
            'logo'=>'',
            'link'=>'required',
        ]));

        return redirect()->route('index');
    }
    public function edit(Company $company) : View
    {
        return view('company/companyEdit', compact('company'));
    }

    public function update(Request $req, Company $company) : RedirectResponse
    {
        $company->update($req->validate([
            'name'=>'required',
            'email'=>'required|unique:companies',
            'logo'=>'',
            'link'=>'required',
        ]));

        return redirect()->route('index');
    }
    public function destroy(Company $company) : RedirectResponse
        {
            $company->delete();

            return redirect()->route('index');
        }
}
