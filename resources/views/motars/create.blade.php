@extends('motars.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            

        </div>

        <div class="pull-right">

            <a class="btn btn-primary"   style="position: relative; left: -300%;top:100%;background-color: brown;" href="/" target="_parent">Close</a>

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

   

<form action="{{ route('motars.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">FirstName:</strong>

                <input type="text" name="FirstName" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;" class="form-control" placeholder="FirstName" required>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">LastName:</strong>

                <input type="text" name="LastName" class="form-control" placeholder="LastName" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;" required>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">IDno:</strong>

                <input type="text" name="IDno" class="form-control" placeholder="IDno" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;" required>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">motor_plaque:</strong>

                <input type="text" name="motor_id" class="form-control" placeholder="motor_plaque" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;" required>

            </div>

        </div>

<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">status:</strong>

                <select name="status" class="form-control" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;">
                    <option>MartialStatus</option>
                    <option>Maried</option>
                    <option>Single</option>
                </select>

            </div>
</div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">Gender:</strong>

                <select name="Gender" class="form-control" placeholder="Gender" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;">
                    <option>Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>

            </div></div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">village:</strong>

                <input type="text" name="village" class="form-control" placeholder="village" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;" required>

            </div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">sector:</strong>

                <input type="text" name="sector" class="form-control" placeholder="sector" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;" required>

            </div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">District:</strong>

                <input type="text" name="District" class="form-control" placeholder="District" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;" required>

            </div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">category:</strong>

                <input type="text" name="categories" class="form-control" placeholder="categories" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;" required>

            </div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong style="position: relative; left: 35%;">cooperative_Name:</strong>

                <input type="text" name="cooperative_Name" class="form-control" placeholder="cooperative_Name" style="background-color:gray;color:white; width: 40%;text-align: center;position: relative; left: 35%;" required>

            </div></div>

      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary" style="background-color: brown;position: relative; left: 6.5%;">Join</button>

        </div>

    </div>

   

</form>

@endsection

