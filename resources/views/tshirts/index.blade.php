@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD - TShirt Collection</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tshirts.create') }}" title="Create a tshirt"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Num</th>
            <th>Name</th>
            <th>Background Color</th>
            <th>Country Purchased</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tshirts as $tshirt)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $tshirt->name }}</td>
                <td>{{ $tshirt->bkg_colour }}</td>
                <td>{{ $tshirt->country_purchased }}</td>
                <td>{{ date_format($tshirt->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('tshirts.destroy', $tshirt->id) }}" method="POST">

                        <a href="{{ route('tshirts.show', $tshirt->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('tshirts.edit', $tshirt->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $tshirts->links() !!}

@endsection