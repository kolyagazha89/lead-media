<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;

class CustomersApiController extends Controller
{
    public function index()
        {
            return response()->json(Customers::all());
        }

        public function show($id)
        {
            return response()->json(Customers::find($id));
        }

        public function store(Request $request)
        {
            $customer = Customers::create($request->validate([
                  'name'=>'required',
                  'sername'=>'required',
                  'company_id'=>'required',
                  'email'=>'required',
                  'phone'=>'required',
              ]));
            return response()->json($customer, 201);
        }

        public function update(Request $request, $id)
        {
            $customer = Customers::find($id);
            $customer->update($request->validate([
                              'name'=>'required',
                              'sername'=>'required',
                              'company_id'=>'required',
                              'email'=>'required',
                              'phone'=>'required',
                          ]));
            return response()->json($customer, 200);
        }

        public function destroy($id)
        {
            Customers::destroy($id);
            return response()->json(null, 204);
        }
}
