@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Student Report</h2></div>
                <div class="card-body">
                    <b>Name</b>          : {{ $student->name }} <br>
                    <b>NIM</b>          : {{ $student->nim }} <br>
                    <b>Class</b>          : {{ $student->kelas->class_name }} <br><br>
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/students/create" class="btn btn-primary">Add Data</a> <br><br>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student->courses as $sc)
                            <tr>
                                <td>{{ $s->course_name  }}</td>
                                <td>{{ $sc->semester }}</td>
                                <td>{{ $sc->sks  }}</td>
                                <td>{{ $sc->pivot->nilai}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            </table>
                                    <form action="/students/{{$s->id}}" method="post">
                                    <a href="/students/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/students/{{$s->id}}/edit" class="btn btn-warning">view</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    <a href="/students/{{$s->id}}/detail" class="btn btn-info">Nilai</a>
                                </from>
                            </td>
                        <tr>
                        @endforeach
                    </tbody>
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->class }}</td>
                                <td>{{ $s->department }}</td>
                                <td>{{$s->phone_number}}</td>
                                <td>   
                                    </tr>           
                                </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div class="form-group">
                      <label for="Kelas">Class</label>
                      <select class="form-control" name="Kelas">
                          @foreach($kelas as $class)
                              <option value="{{$class->id}}"> 
                                   {{ $class->class_name }} 
                              </option>
                          @endforeach
                        </select></br>>
            </div>
        </div>
    </div>
</div>
@endsection