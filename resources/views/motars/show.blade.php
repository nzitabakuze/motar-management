@extends('motars.layout')

  

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2> Show Motar</h2>

            </div>

            <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('motars.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID:</strong>

                {{ $motar->id }}

            </div>

        </div>
     <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>FirstName:</strong>

                {{ $motar->FirstName }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>LastName:</strong>

                {{ $motar->LastName }}

            </div>

        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>IDno:</strong>

                {{ $motar->IDno }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>motor_id:</strong>

                {{ $motar->motor_id }}

            </div>
        </div>



       
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>status:</strong>

                {{ $motar->status }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Gender:</strong>

                {{ $motar->Gender }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>village:</strong>

                {{ $motar->village }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>sector:</strong>

                {{ $motar->sector }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>District:</strong>

                {{ $motar->District }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>categories:</strong>

                {{ $motar->categories }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>cooperative_Name:</strong>

                {{ $motar->cooperative_Name }}

            </div>

        </div>

    </div>

@endsection

