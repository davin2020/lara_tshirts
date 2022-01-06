@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>TShirt Collection App - Laravel 8 CRUD</h1>
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
            <th>No</th>
            <th>Name</th>
            <th>Background Color</th>
            <th>Country Purchased</th>
            <th>Image</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tshirts as $tshirt)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $tshirt->name }}</td>
                <td>{{ $tshirt->bkg_colour }}</td>
                <td>{{ $tshirt->country_purchased }}</td>
                <td><img src="/uploads/{{ $tshirt->image }}" width="200px" alt="Tshirt with title {{ $tshirt->name }}"></td>
                <td>{{ date_format($tshirt->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('tshirts.destroy', $tshirt->id) }}" method="POST">

                        <a href="{{ route('tshirts.show', $tshirt->id) }}" title="Show">
                            <i class="fas fa-eye text-success fa-lg"></i>
                        </a>

                        <!--  withot title=edit, this causes WAVE toool to show  error due to Empty link -->
                        <a href="{{ route('tshirts.edit', $tshirt->id) }}" title="Edit">
                            <i class="fas fa-edit  fa-lg" ></i>
                            <!-- <i class="fas fa-edit  fa-lg" >EDIT</i> -->
                            <!-- HAVING TEXT IN BEWTEEN i tags makes them appear as circles with !? in middle  -->
<!-- READ AS WAVE ISSUES https://fontawesome.com/v5.15/how-to-use/on-the-web/other-topics/accessibility -->
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" style="border: none; background-color:transparent;" title="Delete" >
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

<!-- need this to center pagination nav, as cant currently find where its being generated from -->
<div class="text-center">
    {!! $tshirts->links() !!}
    <!-- {{ $tshirts->links() }} -->
</div>

@endsection