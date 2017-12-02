@extends('layouts.app')

@section('content')
          <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-md-offset-3 col-lg-offset-2">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Sample</h4>
                            </div>
                            <div class="content">
                              {!! Form::model($sample, ['route' => ['sample.update', $sample->id]]) !!}
                                @include('sample.partials.form')
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                                </div>
                                <div class="clearfix"></div>
                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection