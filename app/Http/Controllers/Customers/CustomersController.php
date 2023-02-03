<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customers\CreateCustomerRequest;
use App\Http\Requests\Customers\UpdateCustomerRequest;
use App\Models\Customers\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CustomersController extends Controller
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

    public function postCustomer(CreateCustomerRequest $request): RedirectResponse
    {
        $customer = Customer::create($request->validated());
        return redirect()->route('customers.edit', $customer);
    }

    public function viewCustomerEdit(Customer $customer): View
    {
        return view('customers.edit', ['customer' => $customer]);
    }

    public function putCustomer(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());

        return redirect()
            ->route('customers.edit', $customer)
            ->with('alert.success', 'Cliente alterado com sucesso!');
    }

    public function deleteCustomer(Customer $customer): RedirectResponse
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
