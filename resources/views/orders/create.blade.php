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
                            <h4 class="card-title">Créer une nouvelle commande</h4>

                        </div>
                        <form action="{{ route('orders.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="name">Client <span style="color: red">*</span></label>
                                <select data-toggle="select2" data-search="true" name="client_id" id="client_id"
                                    class="form-control @error('client_id') error @enderror">
                                    @forelse ($clients as $item)
                                    <option value="{{$item->id}}" @if($item->id == old('client_id')) selected
                                        @endif>{{$item->name}}</option>
                                    @empty

                                    @endforelse
                                </select>
                                @error('client_id')
                                <div class="error">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Description <span style="color: red">*</span></label>
                                <textarea name="description" id="description" cols="30" rows="10"
                                    class="form-control @error('description') error @enderror"></textarea>
                                @error('description')
                                <div class="error">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>


                            {{-- <div class="form-group">
                                <label for="price">Prix <span style="color: red">*</span></label>
                                <input type="number" name="prix" id="prix"
                                    class="form-control @error('prix') error @enderror">
                                @error('prix')
                                <div class="error">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> --}}
                            @livewire('orders')
                            @error('orderProducts')
                            <div class="error">
                                {{ $message }}
                            </div>
                            @enderror

                            <button type="submit" class="btn btn-sm btn-primary btn-rounded">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>
@endsection
