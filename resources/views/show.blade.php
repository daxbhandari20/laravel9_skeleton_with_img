@extends('app')

@section('content')
    <div class="row mt-5">
        <div class="text-center">
            <h2>Show Product</h2>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <div class="col-xs-12 col-lg-12 col-md-12">
                <tr>
                    <th><strong>Name: </strong></th>
                    <td>
                        {{ $product->name }}
                    </td>
                </tr>
            </div>
            <div class="col-xs-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <tr>
                        <th><strong>Email: </strong></th>
                        <td>
                            {{ $product->email }}
                        </td>
                    </tr>
                </div>
            </div>
            <div class="col-xs-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <tr>
                        <th><strong>Details: </strong></th>
                        <td>
                            {{ $product->detail }}
                        </td>
                    </tr>
                </div>
            </div>
            <div class="col-xs-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <tr>
                        <th><strong>Image: </strong></th>
                        <td>
                            <img src="/images/{{ $product->image }}" width="100px" />
                        </td>
                    </tr>
                </div>
            </div>
        </table>
    </div>
    <div class="d-flex flex-row-reverse">
        <a href="/" class="btn btn-primary">Back</a>
    </div>
@endsection
