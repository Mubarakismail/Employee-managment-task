<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeesDataTable;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Services\EmployeeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    protected EmployeeService $employeeService;

    public function __construct(EmployeeService $service)
    {
        $this->employeeService = $service;
    }

    /**
     * @param EmployeesDataTable $dataTable
     * @return mixed
     */
    public function index(EmployeesDataTable $dataTable)
    {
        return $dataTable->render('employees.index');
    }

    /**
     * @param StoreEmployeeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreEmployeeRequest $request): RedirectResponse
    {
        try {
            $employee = $this->employeeService->storeNewEmployee($request->except('_token', '_method'));
            alert()->success('New employee added successfully');
        } catch (\Exception $ex) {
            alert()->error('Failed to create new employee');
        }
        return back();
    }

    /**
     * @param UpdateEmployeeRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(UpdateEmployeeRequest $request, $id): RedirectResponse
    {
        try {
            if (!empty($request->password))
                $request->request->add(['password' => $request->password]);
            else
                $request->request->remove('password');
            $employee = $this->employeeService->updateEmployee($request->except('_token', '_method'), $id);
            alert()->success('New employee added successfully');
        } catch (\Exception $ex) {
            alert()->error('Failed to create new employee');
        }
        return back();
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        try {
            $employee = $this->employeeService->deleteEmployee($id);
            alert()->success('Employee deleted successfully');
        } catch (\Exception $ex) {
            alert()->error('Failed to delete employee');
        }
        return back();
    }
}
