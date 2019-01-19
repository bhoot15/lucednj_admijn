@extends('layouts.parent')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Luxury Scarves Page
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Luxury Scarves Page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Luxury Scarves Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="container box-body table-responsive no-padding">
                            <form action="/less-is-more/{{ $sc->id}}" method="POST">
                                <div class="box-body">
                                    {{ method_field('PUT') }}
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{ $sc->id }}">
                                    <div class="form-group">
                                        <label for="image_url">Image URL</label>
                                        <textarea name="image_url" class="form-control">{{$sc->image_url}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Title</label>
                                        <textarea name="title" class="form-control">{{$sc->title}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <textarea name="author" class="form-control">{{$sc->author}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description"
                                                  class="form-control">{{$sc->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="style_no">Style No</label>
                                        <textarea name="style_no" class="form-control">{{$sc->style_no}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="book_this_look_url">Book This Look URL</label>
                                        <textarea name="book_this_look_url"
                                                  class="form-control">{{$sc->book_this_look_url}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="buyers_guideline_url">Buyer's Guideline URL</label>
                                        <textarea name="buyers_guideline_url"
                                                  class="form-control">{{$sc->buyers_guideline_url}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="available_pcs">Available Pcs</label>
                                        <input type="number" value="{{$sc->available_pcs}}" name="available_pcs"
                                               class="form-control">
                                    </div>
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
