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
                                    <h4 class="card-title">Ajouter un nouveau produit</h4>

                                </div>
                                <form action="{{ route('products.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="sku">Unité de gestion des stocks<span style="color: red">*</span></label>
                                        <input type="text" name="sku" id="sku" class="form-control @error('sku') error @enderror" value="{{old('sku')}}">
                                        @error('sku')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="number">Quantité<span style="color: red">*</span></label>
                                        <input type="number" name="qte" id="number" class="form-control @error('qte') error @enderror" value="{{old('qte')}}">
                                        @error('qte')
                                            <div class="error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-sm btn-primary btn-rounded">Ajouter</button>
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
    </div>          <!-- ============================================================== -->
@endsection

