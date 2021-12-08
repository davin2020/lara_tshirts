@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New TShirt</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tshirts.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('tshirts.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf

        <div class="row">
            <!-- addd old values, in case of error w form, old values are currnelty forgotten - see https://enlear.academy/crud-example-with-image-upload-in-laravel-8-d35cb95575f2 -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Background Color:</strong>
                    <!-- make this a drop down later -->
                    <textarea class="form-control" style="height:50px" name="bkg_colour"
                        placeholder="Background Color"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Country Purchased:</strong>
                    <!-- make this a drop down later -->
                    <input type="text" name="country_purchased" class="form-control" placeholder="Country Purchased">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Tshirt Image">
                </div>
                <!-- pics are being stored here and given filename based on current datetimestamp - lara_tshirts\public\uploads -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>

    </form>
@endsection
