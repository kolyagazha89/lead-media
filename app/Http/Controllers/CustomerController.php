<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use App\Models\customers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**Метод для вывода формы добавления сотрудника */
    public function create(Company $company){
        return view('customer/customerAdd', compact('company'));
    }
    /**Метод для добавления сотрудника в бд */
    public function store(Request $req): RedirectResponse
    {
        Customers::create($req->validate([
            'name'=>'required',
            'sername'=>'required',
            'company_id'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]));

        return redirect()->route('showCompany', $req->company_id);
    }
    /**Метод вывода формы редактирования сотрудника */
    public function edit(Customers $customer) : View
    {
        return view('customer/customerEdit', compact('customer'));
    }
    /**Метод для редактирования сотрудника в бд */
    public function update(Request $req, Customers $customer) : RedirectResponse
    {
        $customer->update($req->validate([
            'name'=>'required',
            'sername'=>'required',
            'company_id'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]));

        return redirect()->route('showCompany', $req->company_id);
    }
    /**Метод для удаления сотрудника в бд */
    public function destroy(Customers $customer) : RedirectResponse
    {
        $customer->delete();

        return redirect()->route('showCompany', $customer->company_id);
    }
}
