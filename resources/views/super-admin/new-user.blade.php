@extends('layouts/super-admin-dashboard')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">New User</h3>
                </div>
                <div class="block-content">
                    <form action="{{route('register-new-user')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="example-text-input-floating" name="sur_name" placeholder="John Doe">
                                    <label class="form-label" for="example-text-input-floating">SurName</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="example-text-input-floating" name="middle_name" placeholder="John Doe">
                                    <label class="form-label" for="example-text-input-floating">Middle Name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="example-text-input-floating" name="last_name" placeholder="John Doe">
                                    <label class="form-label" for="example-text-input-floating">LastName</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="date" class="form-control" id="example-text-input-floating" name="user_dob" placeholder="Y-m-d">
                                    <label class="form-label" for="example-text-input-floating">Date of Birth</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <select class="form-select" id="example-select-floating" name="example-select-floating" aria-label="Floating label select example">
                                        <option selected>Select an option</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <label class="form-label" for="example-select-floating">Gender</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="example-text-input-floating" name="user_place_of_birth" placeholder="Place of Birth">
                            <label class="form-label" for="example-text-input-floating">Place of Birth</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="example-text-input-floating" name="user_main_address" placeholder="Main Address">
                                    <label class="form-label" for="example-text-input-floating">Main Address</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="example-text-input-floating" name="user_secondary_address" placeholder="Secondary Address">
                                    <label class="form-label" for="example-text-input-floating">Secondary Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="example-text-input-floating" name="user_primary_contact" placeholder="Contact">
                                    <label class="form-label" for="example-text-input-floating">Phone [Mobile]</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="example-text-input-floating" name="user_secondary_contact" placeholder="Secondary Contact">
                                    <label class="form-label" for="example-text-input-floating">Phone 2</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="example-email-input-floating" name="user_email" placeholder="john.doe@example.com">
                            <label class="form-label" for="example-email-input-floating">Email address</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="file" class="form-control" id="example-text-input-floating" name="user_profile_picture" placeholder="Profile Picture">
                                    <label class="form-label" for="example-text-input-floating">Profile Picture</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="file" class="form-control" id="example-text-input-floating" name="user_id_screenshot" placeholder="ID Screenshot">
                                    <label class="form-label" for="example-text-input-floating">ID Screenshot</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <select class="form-select" id="example-select-floating" name="user_type" aria-label="Floating label select example">
                                <option selected>Select an option</option>
                                <option value="1">Super-Administrator</option>
                                <option value="2">Administrator</option>
                                <option value="3">Sales</option>
                                <option value="4">Supplier</option>
                                <option value="5">Customer</option>
                            </select>
                            <label class="form-label" for="example-select-floating">User Type</label>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary btn-lg">
                                <i class="fa fa-plus opacity-50 me-1"></i> Add New User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
@endsection
