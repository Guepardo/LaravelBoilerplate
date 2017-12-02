@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                          @if(Session::has('message') )
                            <div class="alert alert-{{Session::get('class')}}">
                              {{ Session::get('message')}}
                            </div>    
                          @endif
                          <div style="float:left"> 
                            <h4 class="title">Sample Index</h4>
                            <p class="category">Here is a subtitle for this table</p>
                          </div> 
                          <a style="float:right" href="{{ route('sample.create') }}" class="btn btn-primary btn-fill btn-wd">Novo</a>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Age</th>
                                  <th>Wieght</th>
                                  <th>Created</th>
                                  <th>Last Update</th>
                                  <th>Actions</th>
                                </thead>
                                <tbody>
                                  @foreach($samples as $sample)
                                    <tr>
                                      <td>{{ $sample->id}}</td>
                                      <td>{{ $sample->name }}</td>
                                      <td>{{ $sample->age }}</td>
                                      <td>{{ $sample->wieght }}</td>
                                      <td>{{ $sample->created_at }}</td>
                                      <td>{{ $sample->updated_at }}</td>
                                      <td>
                                          <a href="{{ route('sample.edit', ['id' => $sample->id ])}}" class="btn btn-primary btn-xs">See</a>
                                          <a href="{{ route('sample.edit', ['id' => $sample->id ]) }}" class="btn btn-info btn-xs">Edit</a>
                                          {!! Form::open(['route' =>  ['sample.destroy', $sample->id], 'method' => 'delete', 'style' => 'display:inline'])!!}
                                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                          {!! Form::close() !!}
                                      </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> 
                              {{ $samples->links() }}
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection