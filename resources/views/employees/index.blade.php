@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Employees
                <!-- Button to trigger Create Modal -->
                <button type="button" class="btn btn-success float-right" data-bs-toggle="modal"
                        data-bs-target="#createModal" id="createEmployeeBtn">
                    Create Employee
                </button>
                <!-- Create Modal -->
                <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create new employee</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('employees.store')}}" method="post">
                                @csrf
                                @method('post')
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Phone:</label>
                                                <input type="text" class="form-control" name="phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Email:</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Password:</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Department:</label>
                                                <input type="text" class="form-control" name="department">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Job title:</label>
                                                <input type="text" class="form-control" name="job_title">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Salary:</label>
                                                <input type="number" class="form-control" name="salary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('modals')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
