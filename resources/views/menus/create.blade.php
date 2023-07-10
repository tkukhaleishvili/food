@extends('layouts.master')



@section('content')
    <br>
    <br>
    <div class="container mt-5">
        <div class="row">

            <div class="col-lg-12 margin-tb">

                <div class="pull-left">

                    <h2>Add New Product</h2>

                </div>

                <div class="pull-right">

                    <a class="btn btn-primary" href="{{ route('mada.menus.index') }}"> Back</a>

                </div>

            </div>

        </div>

        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>


        <div class="row">
            <form action="{{ route('mada.menus.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>description:</strong>

                            <input type="text" name="description" class="form-control" placeholder="description"
                                value="{{ old('description') }}">

                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>price:</strong>

                            <input type="text" name="price" class="form-control" placeholder="price"
                                value="{{ old('price') }}">

                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>image:</strong>
                            <input type="file" name="image" class="form-control" placeholder="image"
                                value="{{ old('image') }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Choose Category:</strong>
                            <select name="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option {{ $category->id == old('category_id') ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>



            </form>
        </div>
    </div>

@endsection
