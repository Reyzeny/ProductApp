<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <br>
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
        </div><br>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>
                    <td><a href="{{action('ProductController@index', $product['id'])}}" class="btn btn-success">Edit</a>
                    <td>
                        <form method="POST" action="{{action('ProductController@destroy', $product['id'])}}">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>