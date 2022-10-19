@extends('app')

@section('content')
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="">
                <h2>Laravel 9 CRUD with Image Upload</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-row-reverse" style="margin-bottom:10px;">
                <a href="{{ url('create') }}" class="btn btn-success">
                    Create New Product
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Details</th>
            <th width="280px">Actions</th>
        </tr>
        @if (count($products) > 0)
            @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/images/{{ $product->image }}" style="width:100px;"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->email }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <form action="/destroy/{{ $product->id }}" method="POST">
                            <a class="btn btn-info" href="/show/{{ $product->id }}">Show</a>
                            <a class="btn btn-primary" href="/edit/{{ $product->id }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure want to delete this item??')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="6">No products found.</td>
            </tr>
        @endif
    </table>

    {!! $products->links() !!}
@endsection
