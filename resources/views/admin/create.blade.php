@extends('admin.index')

@section('content')

    

    <form method="POST" action="/estates" class="container col-4">

        {{ csrf_field() }}

            <h1>Create a Post</h1>

            @include ('layouts.errors')

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
              <label for="body">Body</label>
              <textarea name="body" id="body" rows="5" class="form-control"></textarea>
            </div>
            
            <div class="form-group">
                <label for="city">City</label>
                <input name="city" id="city" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="city_part">City part</label>
                <input name="city_part" id="city_part" class="form-control">
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input name="location" id="location" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="size">Size</label>
                <input name="size" id="size" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input name="price" id="price" class="form-control">
            </div>

            <div class="form-group">
                <label for="estate_type">Estate type</label>
                <input name="estate_type" id="estate_type" class="form-control">
            </div>

            <div class="form-group">
                <label for="method">Method</label>
                <input name="method" id="method" class="form-control">
            </div>

            <div class="form-group">
                <label for="equipped">Equipped</label>
                <input name="equipped" id="equipped" class="form-control">
            </div>

            <div class="form-group">
                <label for="rooms">Rooms</label>
                <input name="rooms" id="rooms" class="form-control">
            </div>

            <div class="form-group">
                <label for="picture_url">Picture</label>
                <input name="picture_url" id="picture_url" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 

@endsection