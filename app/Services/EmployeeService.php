<?php

namespace App\Services;

use App\Repositories\Employees\EmployeeRepository;

class EmployeeService
{
    /**
     * @var \App\Repositories\Employees\EmployeeRepository
     */
    protected EmployeeRepository $employeeRepository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->employeeRepository = $repository;
    }

    /**
     * @return mixed
     */
    public function allEmployees(): mixed
    {
        return $this->employeeRepository->all();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function storeNewEmployee($data): mixed
    {
        return $this->employeeRepository->create($data);
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function updateEmployee($data, $id): mixed
    {
        return $this->employeeRepository->update($data, $id);
    }

    /**
     * @param $id
     * @return int
     */
    public function deleteEmployee($id): int
    {
        return $this->employeeRepository->delete($id);
    }
}
