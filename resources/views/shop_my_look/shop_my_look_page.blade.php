@extends('layouts.parent')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Shop My Look Page
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Shop My Look Page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="col-md-6">
                                <h3 class="box-title">Shop My Look List</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="/shop-my-look/create" class="btn btn-success pull-right">create new</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Booking URL</th>
                                    <th>Description</th>
                                    <th>Promo</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                                @foreach($scs as $sc)
                                    <tr>
                                        <td>{{$sc->id}}</td>
                                        <td><img src="{{$sc->image_url}}" class="img-thumbnail" height="200"
                                                 width="200"></td>
                                        <td>{{$sc->booking_url}}</td>
                                        <td>{{str_limit($sc->description,200)}}</td>
                                        <td>{{$sc->promo}}</td>
                                        <td><span class="label label-success">Active</span></td>
                                        <td>
                                            <a href="/shop-my-look/{{$sc->id}}/edit"><i
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
