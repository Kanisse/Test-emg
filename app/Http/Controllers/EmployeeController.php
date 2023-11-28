<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees= Employee::paginate(7);
        return view ('Employe.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Employe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Employee::create($request-> all());
            return redirect() -> route('employees.index');
        }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Employee=Employee::find($id);
        return view('Employe.show', compact('Employee'));
    }
    
    public function edit($id)
    {
        $Employee=Employee::find($id);
        return view('Employe.edit',compact('Employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Employee=Employee::find($id);
        $Employee->update($request->all());
        return redirect()->route('employees.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Employee=Employee::find($id);
        $Employee->delete();
        return redirect()->route('employees.index');
    }
}
