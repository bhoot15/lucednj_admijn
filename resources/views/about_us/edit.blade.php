@extends('layouts.parent')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                About Us Page
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">About Us Page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">About Us List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="container box-body table-responsive no-padding">
                            <form role="form" action="/about-us/{{ $sc->id}}" method="post">
                                {{ method_field('PUT') }}
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="name">Row 1</label>
                                    <textarea rows="6" name="para_1" class="form-control">{{$sc->para_1}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Row 2</label>
                                    <textarea rows="6" name="para_2" class="form-control">{{$sc->para_2}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Row 2</label>
                                    <textarea rows="2" name="image_url" class="form-control">{{$sc->image_url}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-success pull-right">
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
