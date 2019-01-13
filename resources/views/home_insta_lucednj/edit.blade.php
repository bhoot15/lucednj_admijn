@extends('layouts.parent')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Lucednj Instagram Page
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Lucednj Instagram Page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Lucednj Instagram List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="container box-body table-responsive no-padding">
                            <form role="form" action="/home-insta-lucednj/{{ $sc->id}}" method="post">
                                {{ method_field('PUT') }}
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <textarea rows="6" name="name" class="form-control">{{$sc->name}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="insta_content">Instagram Content</label>
                                    <textarea rows="6" name="insta_content"
                                              class="form-control">{{$sc->insta_content}}</textarea>
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
