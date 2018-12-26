@extends('layouts.parent')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Light of Fashion HomePage
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Light of Fashion HomePage</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Light of Fashion-Home List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="container box-body table-responsive no-padding">
                            <form role="form" action="/lofs" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="name">Image Name</label>
                                    <textarea name="name" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image_type">Image Type</label>
                                    <select class="form-control" name="image_type">
                                        <option value="It Fixes">It Fixes</option>
                                        <option value="It Influences">It Influences</option>
                                        <option value="It Orients">It Orients</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image_url">Image Url</label>
                                    <textarea name="image_url"
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
