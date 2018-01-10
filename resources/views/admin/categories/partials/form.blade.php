<label for="">Status</label>
<select class="form-control" name="published">
  @if (isset($category->id))
    <option value="0" @if($category->published == 0) selected="" @endif>Not Published</option>
    <option value="1" @if($category->published == 1) selected="" @endif>Published</option>

  @else
  <option value="0">Not Published</option>
  <option value="1">Published</option>

  @endif
</select>

<label for="">Article</label>
<input type="text" class="form-control" name="title" placeholder="Article Name"
value="{{$category->title or ""}}" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Auto Generate"
value="{{$category->slug or ""}}" readonly>

<label for="">Parent Category</label>
<select class="form-control" name="parent_id">
  <option value="0">-- without parent category --</option>
  @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr/>

<input class="btn btn-primary" type="submit" value="Save">
