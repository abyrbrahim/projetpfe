@extends('layouts.master')
@section('content')

    <div class="page-container">

    <!-- Main Page Content -->
    <div class="page-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Créer un nouveau client</h4>

                                </div>
                                <form action="{{ route('clients.store') }}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nom <span style="color: red">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control @error('name') error @enderror" value="{{old('name') }}">
                                        @error('name')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <span style="color: red">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') error @enderror" value="{{old('email')}}" >
                                        @error('email')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="number">Numéro de téléphone <span style="color: red">*</span></label>
                                        <input type="number" name="phone" id="phone" class="form-control @error('phone') error @enderror" value="{{old('phone')}}" >
                                        @error('phone')
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    </div>

                                    <button type="submit" class="btn btn-sm btn-primary btn-rounded">Enregister</button>
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
        </div>      <!-- ============================================================== -->
    </div>
   <!-- ============================================================== -->
@endsection

