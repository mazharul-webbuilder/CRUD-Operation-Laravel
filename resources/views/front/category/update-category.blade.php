<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md nav-link bg-white">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li><a href="{{route('home')}}" class="nav-link text-secondary  mx-2">Create</a></li>
            <li><a href="{{route('category.read')}}" class="nav-link text-secondary mx-2">Read</a></li>
            <li><a href="" class="nav-link text-secondary shadow  mx-2">Update</a></li>
            <li><a href="" class="nav-link text-secondary  mx-2">Delete</a></li>
        </ul>
    </div>
</nav>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-center text-secondary">Update Category</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        <form action="{{route('category.update-new', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="category_name" class="form-label">Category Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="category_name" name="name" value="{{$category->name}}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="description" class="form-label">Category Description</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="description" class="form-control" id="description">{{$category->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="image" class="form-label">Category Image</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" id="image" name="image">
                                    <br>
                                    <img src="{{asset($category->image)}}" alt="" height="60" width="80">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-secondary" value="Update Category">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="{{asset('/')}}front/js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}front/js/bootstrap.js"></script>
</body>
</html>
