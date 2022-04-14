<div>

    <div class="row mt-4">
        <div class="col-md-12">

            <div class="table-responsive">

                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderProducts as $index => $orderProduct)
                        <tr>
                            <td>
                                <select name="orderProducts[{{ $index }}][product_id]"
                                    wire:model="orderProducts.{{ $index }}.product_id" class="form-control">
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}">
                                        {{ $product->sku }} ({{ $product->qte }} Disponibles)
                                    </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number" name="orderProducts[{{ $index }}][quantity]" class="form-control"
                                    wire:model="orderProducts.{{ $index }}.quantity" min="0" />
                            </td>
                            <td>
                                {{$orderProducts[$index]['price']}}
                                <input type="hidden" name="orderProducts[{{ $index }}][price]"
                                    wire:model='orderProducts.{{ $index }}.price'>
                            </td>
                            <td>
                                <a href="#" wire:click.prevent="removeProduct({{ $index }})" class="text-danger">x</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <button type="button" class="m-1 mb-5 btn btn-has-icon btn-icon-split btn-icon-hidden btn-success-gradient"
                wire:click.prevent="addProduct">
                <span class="icon"><i class="fas fa-box-open"></i></span>
                <span>Ajouter un produit </span>
            </button>
            @error('orderProducts')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
        </div>

    </div>
    <div class="form-group">
        <label for="price">Prix Total</label>
        <input type="number" name="price" id="price" wire.model='price' value="{{ $price }}" class="form-control @error('price')
        error
        @enderror">
        @error('price')
        <div class="error">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
