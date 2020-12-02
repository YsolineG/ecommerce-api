<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $customers = Customer::all();

     return response()->json($customers);

    }

    public function create(Request $request)
    {
        $customers = new Customer;

        $customers->name= $request->name;
        $customers->firstname= $request->firstname;
        $customers->adress= $request->adress;

        $customers->save();

        return response()->json($customers);
    }

    public function show($id)
    {
        $customers = Customer::find($id);

        return response()->json($customers);
    }

    public function update(Request $request, $id)
    { 
        $customers= Customer::find($id);

        $customers->name = $request->input('name');
        $customers->firstname = $request->input('firstname');
        $customers->adress = $request->input('adress');
        $customers->save();
        return response()->json($customers);
    }

    public function destroy($id)
    {
        $customers = Customer::find($id);
        $customers->delete();

        return response()->json('product removed successfully');
    }
}