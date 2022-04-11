<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Category</title>
    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md nav-link bg-white">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li><a href="{{route('home')}}" class="nav-link text-secondary  mx-2">Create</a></li>
            <li><a href="{{route('category.read')}}" class="shadow nav-link text-secondary mx-2">Read</a></li>
            <li><a href="" class="nav-link text-secondary  mx-2">Update</a></li>
            <li><a href="" class="nav-link text-secondary  mx-2">Delete</a></li>
        </ul>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-center text-secondary mb-3">Read All Categories</h3>
                    </div>
                </div>
                <table class="table py-5">
                        <tr>
                            <td>#</td>
                            <td>Category Name</td>
                            <td>Category Description</td>
                            <td>Category Image</td>
                            <td>Publication Status</td>
                            <td>Action</td>
                        </tr>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td><img src="{{asset($category->image)}}" alt="" height="50" width="80"></td>
                            <td>{{$category->status == 1 ? 'published' : 'unpublished'}}</td>
                            <td>
                                <a href="{{route('category.update', ['id' => $category->id])}}" class="btn btn-success">Update</a>

                                <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-danger" onclick="return confirm('Are You confirm to Delete This category?');">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </table>

                </div>
            </div>
        </div>
    </div>
</section>


<script src="{{asset('/')}}front/js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}front/js/bootstrap.js"></script>
</body>
</html>
