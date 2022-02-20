@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>List of registered Students</h2>
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ route('students.create') }}"> Register Here</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Olevel</th>
            <th>Alevel</th>

        </tr>
      @foreach ($students as $student )
      <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->olevel }}</td>
        <td>{{ $student->alevel }}</td>

    </tr>

      @endforeach

    </table>
    {{ $students ?? '' ->links() }}
    </div>




@endsection
