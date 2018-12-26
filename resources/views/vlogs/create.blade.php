@extends('layouts.parent')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Vlogs HomePage
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Vlogs HomePage</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Vlogs-Home List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="container box-body table-responsive no-padding">
                            <form role="form" action="/vlogs" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <textarea name="name" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="video_url">Youtube Video Url</label>
                                    <textarea name="video_url"
                                              class="form-control"></textarea>
                                </div>
                                <input type="submit" value="Create" class="btn btn-success pull-right">
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
