<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('performance', 'desc')->get();
        return view('dashboard', [
            'employees' => $employees,
        ]);
    }
}
