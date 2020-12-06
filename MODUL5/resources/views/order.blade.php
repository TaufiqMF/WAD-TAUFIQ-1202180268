@extends('layout')
@section('title', 'Order')
@section('content')
    <div class="container">
        <h1 class="my-5" style="text-align:center">Order</h1>
        <div class="row">
        @forelse($products as $or)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="asset/sepatu.png" style="width:286px;height:180px">
                    <div class="card-body bg-white">
                        <h5 class="card-title">{{ $or->name }}</h5>
                        <p class="card-text">{{ $or->description }}</p>
                        <p class="card-text" style="font-size:24px">${{ $or->price }},00</p>
                        <a href="detail_order/{{ $or->id }}" class="btn btn-success">Order Now</a>
                    </div>
                </div>
            </div>
        @empty
        </div>
        <center>
        <div class="row">
            <div class=" col">
            <label style="font-size:18px"><b>There is no data...</b><label>
            </div>
        </div>
        <div class="row">
            <div class=" col mt-3">
            <a href="insert_product" type="submit" class="btn btn-dark mx-auto">Add Product</a>
            </div>
        </div>
        </center>
        @endforelse
    </div>
    <!-- content -->
@endsection