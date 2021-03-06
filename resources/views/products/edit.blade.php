<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <div class="container">
        <h2>Edit A Product</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{action('ProductController@update', $id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}">
                    </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-left: 38px;">Update Product</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>