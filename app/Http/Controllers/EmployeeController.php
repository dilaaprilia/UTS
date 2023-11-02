<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari request

        $employee = new Employee;
        $employee->nama = $request->nama;
        $employee->ktp = $request->ktp;
        $employee->alamat = $request->alamat;
        $employee->no_hp = $request->no_hp;
        $employee->tgl_lahir = $request->tgl_lahir;
        $employee->save();

        return redirect()->route('employees.index');
    }

    // Tambahkan method update, edit, delete, dll. sesuai kebutuhan.
}

