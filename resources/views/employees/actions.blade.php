<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal_{{$employee->id}}"
        style=" display: inline-block;
    margin: 5px 20px;">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editModal_{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update employee</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('employees.update',['employee'=>$employee->id])}}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="row text-left">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{isset($employee?->name)?$employee->name:''}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Phone:</label>
                                <input type="text" class="form-control" name="phone"
                                       value="{{isset($employee?->phone)?$employee->phone:''}}">
                            </div>
                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" name="email"
                                       value="{{isset($employee?->email)?$employee->email:''}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Password:</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="row text-left">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Department:</label>
                                <input type="text" class="form-control" name="department"
                                       value="{{isset($employee?->department)?$employee->department:''}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Job title:</label>
                                <input type="text" class="form-control" name="job_title"
                                       value="{{isset($employee?->job_title)?$employee->job_title:''}}">
                            </div>
                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Salary:</label>
                                <input type="number" class="form-control" name="salary"
                                       value="{{isset($employee?->salary)?$employee->salary:''}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Button -->
<form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal_{{$employee->id}}"
            style=" display: inline-block;
    margin: 5px 20px;">
        Delete
    </button>
</form>
