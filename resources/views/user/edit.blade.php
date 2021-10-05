@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ asset('image/ninja.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary"
                                    width="110">
                                <div class="mt-3">
                                    <h4>{{ $user->pseudo }}</h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">Rabat, MA</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Edit Profile</h4>
                            </div>

                            <form action="{{ route('update.profile', $user->pseudo) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                        @error('name')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Pseudo</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="pseudo" class="form-control" value="{{ $user->pseudo }}">
                                        @error('pseudo')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Biography</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <textarea type="text" class="form-control" name="biography"
                                            placeholder="Describe yourself">{{ $user->biography }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"> Avatar</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" class="form-control custom-select" name="avatar" id="avatar">
                                        @error('avatar')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>
                        </div>
                    </div>


                    </form>

                    {{-- PASSWORD --}}
                    <div class="shadow-sm col-lg-6">

                        <div class="card mt-4">
                            <div class="card-body">

                                <div class="card-title">
                                    <h4>Edit Password</h4>
                                </div>
                                <form action="{{ route('update.password', $user->pseudo) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-3 row">
                                        <label for="old_password">Old Password</label>
                                        <input type="password" name="old_password" id="old_password" class="form-control"
                                            placeholder="">
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label for="old_password">New Password</label>
                                        <input type="password" name="new_password" id="new_password" class="form-control"
                                            placeholder="">
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label for="old_password">Confirm new Password</label>
                                        <input type="password" name="confirm_password" id="confirm_password"
                                            class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <button type="submit" class="btn btn-primary">Change Password</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
