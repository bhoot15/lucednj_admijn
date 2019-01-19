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
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Edit Your Data</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="container box-body table-responsive no-padding">
                            <form action="/shop-my-look/{{ $sc->id}}" method="POST">
                                <div class="box-body">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $sc->id }}">
                                    <div class="form-group">
                                        <label for="name">Booking URL</label>
                                        <textarea name="booking_url"
                                                  class="form-control">{{$sc->booking_url}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea rows="6" name="description"
                                                  class="form-control">{{$sc->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_url">Image Url</label>
                                        <textarea name="image_url"
                                                  class="form-control">{{$sc->image_url}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_url">Promo</label>
                                        <textarea name="promo"
                                                  class="form-control">{{$sc->promo}}</textarea>
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
