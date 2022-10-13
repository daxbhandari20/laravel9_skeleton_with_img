@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD with Image Upload</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
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
            <th>Details</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/images/{{ $product->image }}" width="100px"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="/destroy/{{ $product->id }}" method="POST">
                        <a class="btn btn-info" href="/show/{{ $product->id }}">Show</a>
                        <a class="btn btn-primary" href="/edit/{{ $product->id }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <h5 class="text-center">Are you sure you want to delete {{ $product->name }} ?</h5>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
@endsection
