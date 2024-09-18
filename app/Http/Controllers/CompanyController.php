<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use App\Models\customers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**Метод для вывода компаний */
    public function index() : View
    {
        return view('company/companies', [
            'companies' => Company::latest()->paginate(10)
        ]);
    }
    /**Метод для вывода формы добавления компании */
    public function create(){
        return view('company/companyAdd');
    }
    /**Метод для вывода определенной компании */
    public function show(Company $company) : View
    {
        $customers=Customers::where('company_id',$company->id)->latest()->paginate(10);
        return view('company/companyShow', compact('company'),compact('customers'));
    }
    /**Метод для добавления компании в бд */
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
    /**Метод для вывода формы редактирования компании */
    public function edit(Company $company) : View
    {
        return view('company/companyEdit', compact('company'));
    }
    /**Метод для редактирования компании в бд */
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
    /**Метод для удаления компании в бд */
    public function destroy(Company $company) : RedirectResponse
        {
            $company->delete();

            return redirect()->route('index');
        }
}
