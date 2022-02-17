@extends('layouts.app')

@section('content')



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
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>



<form class="needs-validation" action="{{ route('students.store') }}" method="POST" novalidate>
    @csrf
    <div class="col d-flex justify-content-center">
    <div class="card" style="width:800px" >
        <h2 class="card-header">STUDENT REGISTRATION</h2>
     <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>O-Level:</strong>
                <input type="text" name="olevel" class="form-control" placeholder="O-Level">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>A-Level:</strong>
                <input type="text" name="alevel" class="form-control" placeholder="A-Level">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
            </div>
    </div>
</div>
</div>
</form>

@endsection
