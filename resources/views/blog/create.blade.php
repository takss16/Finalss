<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #ced4da;
            border-radius: 0;
            outline: none;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center pt-5">
            <h1 class="text-3xl text-gray-700">
                Add new student
            </h1>
            <hr class="border border-1 border-gray-300 mt-4">
        </div>

        <div class="m-auto pt-5">
            <form
                action="{{ route('blog.store') }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
    
                <div class="form-group">
                    <input
                        type="text"
                        name="name"
                        placeholder="Enter name."
                        class="form-control bg-transparent text-xl">
                </div>

                <div class="form-group">
                    <input
                        type="text"
                        name="course"
                        placeholder="Enter ecourse"
                        class="form-control bg-transparent text-xl">
                </div>

                <div class="form-group">
                    <input
                        type="int"
                        name="age"
                        placeholder="Enter age."
                        class="form-control bg-transparent text-xl">
                </div>
             
                <button
                    type="submit"
                    class="btn btn-primary mt-3">
                    Submit Post
                </button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
