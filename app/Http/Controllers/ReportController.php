<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index()
    {
        $facilities = Employee::pluck('facility', 'facility');
        return view('/report', compact('facilities'));
    }

    public function generate(Request $request)
    {
        $facility = $request->input('facility');
        $employees = Employee::where('facility', $facility)->get();

        $pdf = PDF::loadView('pdf', compact('employees', 'facility',));
    
        return $pdf->stream('employee_report.pdf');
    }
}
