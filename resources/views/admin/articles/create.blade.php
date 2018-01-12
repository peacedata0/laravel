@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  @component('admin.components.breadcrumb')
    @slot('title') Create News @endslot
    @slot('parent') Main @endslot
    @slot('active') News @endslot
  @endcomponent
  <hr/>

  <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
    {{csrf_field()}}

    <!-- Form include -->
    @include('admin.articles.partials.form')

    <input type="hidden" name="created_by" value="{{Auth::id()}}">
  </form>
</div>

@endsection
