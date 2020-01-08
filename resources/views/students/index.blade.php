@extends('layout.main')
@section('title', 'List of Students')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">List of Students</h1>
            <a href="{{url('students/create')}}" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="{{url('students')}}/{{$student->id}}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection