@extends('motars.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>

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

            <th>FirstName</th>

            <th>LastName</th>
            <th>IDno</th>
            <th>motor_id</th>
            <th>status</th>
            <th>Gender</th>
            <th>village</th>
            <th>sector</th>
            <th>District</th>
            <th>categories</th>
            <th>cooperative_Name</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($motars as $motar)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $motar->FirstName }}</td>

            <td>{{ $motar->LastName }}</td>

            <td>{{ $motar->IDno }}</td>
            <td>{{ $motar->motor_id }}</td>
            <td>{{ $motar->status }}</td>
            <td>{{ $motar->Gender }}</td>
            <td>{{ $motar->village }}</td>
            <td>{{ $motar->sector }}</td>
            <td>{{ $motar->District }}</td>
            <td>{{ $motar->categories }}</td>
            <td>{{ $motar->cooperative_Name }}</td>
           

            <td>

                <form action="{{ route('motars.destroy',$motar->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('motars.show',$motar->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('motars.edit',$motar->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $motars->links() !!}

      

@endsection
