<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <div class="modal-body">
            <div class="col-xl-12 col-md-12 col-sm-12">
                <form action="{{ route('backend.user.store') }}" method="post" enctype="multipart/form-data"
                    id="submit-form">
                    <div class="row">
                        <div class="form-row col-md-6">
                            <div class="form-group col-md-12">
                                <label for="title">Name</label>
                                <input type="text" class="form-control" id="Name" value="{{ old('name') }}" placeholder="Enter Name" name="name">
                            </div>
                        </div>
                        <div class="form-row col-md-6">
                            <div class="form-group col-md-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Enter Email"
                                    name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-row col-md-6">
                            <div class="form-group col-md-12">
                                <label for="password">Phone No.</label>
                                <input type="text" class="form-control" id="phone_no" value="{{ old('phone_no') }}"placeholder="Enter Phone No"
                                    name="phone_no">
                            </div>
                        </div>
                        <div class="form-row col-md-6">
                            <div class="form-group col-md-12">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option disabled selected>Select Status</option>
                                    <option value="Active" {{ old('status') == 'Active' ? 'selected' : 'selected'}}>Active</option>
                                    <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : ''}}>Inactive</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-row col-md-6">
                            <div class="form-group col-md-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" value="{{ old('password') }}"  placeholder="Enter Password" name="password" required>
                            </div>
                        </div>
                        <div class="form-row col-md-6">
                            <div class="form-group col-md-12">
                                <label for="role_name">Assign Role</label>
                                <select class="form-control" id="role_name" name="role_name">
                                    <option disabled selected>Select Status</option>
                                    <option value="admin" {{ old('role_name') == 'admin' ? 'selected' : ''}}>Admin</option>
                                    <option value="engineer" {{ old('role_name') == 'engineer' ? 'selected' : ''}}>Engineer</option>
                                    <option value="accountant" {{ old('role_name') == 'accountant' ? 'selected' : ''}}>Account</option>
                                    <option value="receptionist" {{ old('role_name') == 'receptionist' ? 'selected' : ''}}>Editor</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class = "row">

                        <div class="form-row col-md-6">
                            <div class="form-group col-md-12">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    placeholder="Enter Password" name="password_confirmation">
                            </div>
                        </div>
                    </div>

                    </div>
                    <button type="submit" class="btn btn-primary float-right mt-2">Submit</a>
                    <button class="btn btn-danger float-right mt-2" data-dismiss="modal">Discard</button>
                </form>
            </div>
        </div>

    </div>
</div>
