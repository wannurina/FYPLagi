@extends('layouts.app2')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($student))
    <table class="table">
        <thead>
            <tr>
                <th>Matric No</th>
                <th>Name</th>
                <th>Kuliyyah</th>
                <th>Level</th>
                <th>Address</th>
                <th>Postcode</th>
                <th>City</th>
                <th>State</th>
                <th>Phone No</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td> {{$student->matric_no}} </td>
                <td> {{$student->name}}</td>
                <td> {{$student->kuliyyah}}</td>
                <td> {{$student->level}}</td>
                <td> {{$student->address}}</td>
                <td> {{$student->postcode}}</td>
                <td> {{$student->city}}</td>
                <td> {{$student->state}}</td>
                <td> {{$student->phone_no}}</td>
                <td> {{$student->email}}</td>
            </tr>
        </tbody>
    </table>

    
    <a class="btn btn-info" href="{{route('vehicles.create')}}">Add Vehicle</a>
    @else
        NO STUDENT DATA
    @endif
@endsection