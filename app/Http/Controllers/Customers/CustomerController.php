<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Models\Customers\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function viewCustomers(): View
    {
        return view('customers.index', [
            'customers' => Customer::paginate()
        ]);
    }

    public function viewNewCustomer(): View
    {
        return view('customers.create');
    }

    public function postCustomer(Request $request): RedirectResponse
    {
        $customer = Customer::create($request->all());

        return redirect()->route('customers.edit', $customer);
    }

    public function viewCustomerEdit(Customer $customer): View
    {
        return view('customers.edit', ['customer' => $customer]);
    }

    public function putCustomer(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('customers.edit', $customer);
    }

    public function deleteCustomer(Customer $customer): RedirectResponse
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
