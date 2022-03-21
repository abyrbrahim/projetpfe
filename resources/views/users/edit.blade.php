@extends('layouts.master')
@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Edit user</h4>

                                </div>
                                <form action="{{ route('users.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <div class="form-group">
                                        <label for="name">Name <span style="color: red">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control"  value="{{$user->name}}">
                                        @error("name")
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <span style="color: red">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control"  value="{{$user->email}}">
                                        @error("email")
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <span style="color: red">*</span></label>
                                        <input type="password" name="password" id="password" class="form-control" >
                                        @error("password")
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password Confirmation <span style="color: red">*</span></label>
                                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control" >
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary btn-rounded">update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
@endsection
