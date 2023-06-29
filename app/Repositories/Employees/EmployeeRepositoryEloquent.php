<?php

namespace App\Repositories\Employees;

use App\Models\User;
use App\Repositories\Employees;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class EmployeeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmployeeRepositoryEloquent extends BaseRepository implements EmployeeRepository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return User::class;
    }


    /**
     * @return void
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function boot(): void
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
