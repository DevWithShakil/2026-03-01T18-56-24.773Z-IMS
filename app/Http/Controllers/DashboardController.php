<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function category()
    {
        return view('admin.categories.index');
    }

    public function product()
    {
        return view('admin.products.index');
    }

    public function stock()
    {
        return view('admin.stock.index');
    }

    public function pos()
    {
        $customers = Customer::orderBy('name', 'asc')->get();

        return view('admin.pos.index', compact('customers'));
    }

    public function invoice()
    {
        return view('admin.invoices.index');
    }
}
