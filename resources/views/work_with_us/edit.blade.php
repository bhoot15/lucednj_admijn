@extends('layouts.parent')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Work With Us Page
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Work With Us Page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Work With Us List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="container box-body table-responsive no-padding">
                            <form role="form" action="/work-with-us/{{ $sc->id}}" method="post">
                                {{ method_field('PUT') }}
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="name">Content</label>
                                    <textarea rows="6" name="content" class="form-control">{{$sc->content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Message</label>
                                    <textarea rows="6" name="message" class="form-control">{{$sc->message}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Email</label>
                                    <textarea rows="2" name="email" class="form-control">{{$sc->email}}</textarea>
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
