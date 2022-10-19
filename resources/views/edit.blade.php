@extends('app')

@section('content')
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-row-reverse">
                <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input. <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-border">
        <form action="/edit/{{ $product->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name"
                            value="{{ $product->name }}">
                        @if ($errors->has('name'))
                            <li class="text-danger">{{ $errors->first('name') }}</li>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="{{ $product->email }}">
                        @if ($errors->has('email'))
                            <li class="text-danger">{{ $errors->first('email') }}</li>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea name="detail" class="form-control" placeholder="Detail">{{ $product->detail }}</textarea>
                        @if ($errors->has('detail'))
                            <li class="text-danger">{{ $errors->first('detail') }}</li>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control mb-2" placeholder="Image">
                        @if ($errors->has('image'))
                            <li class="text-danger">{{ $errors->first('image') }}</li>
                        @endif
                        <img src="/images/{{ $product->image }}" width="100px">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
