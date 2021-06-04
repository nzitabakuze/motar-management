@extends('motars.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Motar</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('motars.index') }}"> Back</a>

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

  

    <form action="{{ route('motars.update',$motar->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>FirstName:</strong>

                <input type="text" name="FirstName" class="form-control" placeholder="FirstName">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>LastName:</strong>

                <input type="text" name="LastName" class="form-control" placeholder="LastName">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>IDno:</strong>

                <input type="text" name="IDno" class="form-control" placeholder="IDno">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>motor_plaque:</strong>

                <input type="text" name="motor_id" class="form-control" placeholder="motor_plaque">

            </div>

        </div>

<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>status:</strong>

                <select name="status" class="form-control">
                    <option>Maried</option>
                    <option>Single</option>
                </select>

            </div>
</div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Gender:</strong>

                <select name="Gender" class="form-control" placeholder="Gender">
                    <option>Male</option>
                    <option>Female</option>
                </select>

            </div></div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>village:</strong>

                <input type="text" name="village" class="form-control" placeholder="village">

            </div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>sector:</strong>

                <input type="text" name="sector" class="form-control" placeholder="sector">

            </div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>District:</strong>

                <input type="text" name="District" class="form-control" placeholder="District">

            </div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>categories:</strong>

                <input type="text" name="categories" class="form-control" placeholder="categories">

            </div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>cooperative_Name:</strong>

                <input type="text" name="cooperative_Name" class="form-control" placeholder="cooperative_Name">

            </div></div>

      
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection

