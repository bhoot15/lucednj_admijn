@extends('layouts.parent')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Images Page
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Images Page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Edit Your Data</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="container box-body table-responsive no-padding">
                            <form action="/images/{{ $sc->id}}" method="POST">
                                <div class="box-body">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $sc->id }}">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <textarea name="name" class="form-control">{{$sc->name}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_url">Image Url</label>
                                        <textarea name="file_name"
                                                  class="form-control">{{$sc->file_name}}</textarea>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
