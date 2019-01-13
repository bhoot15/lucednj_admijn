@extends('layouts.parent')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                NjMisty Instagram Page
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">NjMisty Instagram Page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="col-md-6">
                                <h3 class="box-title">NjMisty Instagram</h3>
                            </div>
                            <div class="col-md-6">
                                {{--<a href="/home-insta-nj-misty/create" class="btn btn-success pull-right">create new</a>--}}
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                                @foreach($scs as $sc)
                                    <tr>
                                        <td>{{$sc->id}}</td>
                                        <td>{{$sc->name}}</td>
                                        <td>{{$sc->insta_content}}</td>
                                        <td><span class="label label-success">Active</span></td>
                                        <td>
                                            <a href="/home-insta-nj-misty/{{$sc->id}}/edit"><i
                                                    class="fa fa-btn fa-pencil-square-o"
                                                    aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
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
