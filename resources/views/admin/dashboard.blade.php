@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Categories 0</span></p>
      </div>

    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Materials 0</span></p>
      </div>

    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Visitors 0</span></p>
      </div>

    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Today 0</span></p>
      </div>

    </div>
<div class="row">
  <div class="col-sm-6">
    <a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Create Category</a>
    <a class="list-group-item" href="#">
      <h4 class="list-group-item-heading">Category One</h4>
      <p class="list-group-item-text">
        Number Of Category
      </p>
    </a>
  </div>
  <div class="col-sm-6">
    <a class="btn btn-block btn-default" href="{{route('admin.article.create')}}">Create Material</a>
    <a class="list-group-item" href="#">
      <h4 class="list-group-item-heading">Material One</h4>
      <p class="list-group-item-text">
        Number Of Materials
      </p>
    </a>
  </div>
</div>
  </div>

</div>
@endsection
