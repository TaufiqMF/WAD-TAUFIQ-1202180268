@extends('layout')
@section('title', 'History')
@section('content')
<!-- content -->
    <div class="container">
        <h1 class="my-5" style="text-align:center">History</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>product</th>
                    <th>Buyer Name</th>
                    <th>Contact</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @forelse($order as $or)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                    @foreach($product as $or2)
                        @if($or->product_id == $or2->id)
                            {{ $or2->name }}
                        @endif
                    @endforeach
                    </td>
                    <td>{{ $or->buyer_name }}</td>
                    <td>{{ $or->buyer_contact }}</td>
                    <td>
                    @foreach($product as $or2)
                        @if($or->product_id == $or2->id)
                            ${{ $or2->price * $or->amount }},00
                        @endif
                    @endforeach
                    </td>
                </tr>
                @empty
                <center>
                <tr>
                    <td colspan="5" style="text-align:center;"><b><i>There is No Data</i></b></td>
                </tr>
                <tr>
                    <td colspan="5" style="text-align:center;"> <a href="order" type="submit" class="btn btn-dark mx-auto">Add Product</a> </td>
                </tr>
                <center>
                @endforelse
            </tbody>
        </table>
    </div>
<!-- end of content -->
@endsection