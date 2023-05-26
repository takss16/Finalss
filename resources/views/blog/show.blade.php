<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Rest method using Laravel</title>
    <style>
        /* Custom CSS Styles */
        body {
            padding: 20px;
        }

        header {
            margin-bottom: 20px;
        }

        ul li {
            margin-bottom: 10px;
        }
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h2 class="text-center">Student List</h2>
        </header>

        <ul class="list-group">
            @forelse ($name as $keys => $value)
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <p style="display: inline;">{{ $value->name }}</p>
                    <p style="display: inline;">{{ $value->age }}</p>
                    <p style="display: inline;">{{ $value->course }}</p>
                    <form action="{{ route('blog.edit', ['id' => $value->id]) }}" method="get">
                        @csrf
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </form>
                    <form action="{{ route('blog.destroy', ['id' => $value->id]) }}" method="post">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </li>
            @empty
            <li class="list-group-item">No users found.</li>
            @endforelse
        </ul>

        <hr>

        <section>
            <form action="{{ route('blog.create') }}" method="get">
                <button class="btn btn-success" id="showFormBtn" type="submit">Create User</button>
            </form>
        </section>
         

    {{-- <form id="myForm" class="hidden">
           
        <h2>Fill-up Form</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="course">Course:</label>
        <select id="course" name="course" required>
            <option value="">Select Course</option>
            <option value="math">Math</option>
            <option value="science">Science</option>
            <option value="history">History</option>
        </select>

        <button type="submit">Submit</button>
  
        <!-- Add your form fields here -->
    </form>

    
    </div>

    <script>
        const showFormBtn = document.getElementById('showFormBtn');
        const myForm = document.getElementById('myForm');

        showFormBtn.addEventListener('click', () => {
            myForm.classList.remove('hidden');
        });
    </script> --}}

    <!-- Add Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

{{-- @forelse ( $name as $keys => $value )
{{ $value->name }}
{{ $value->age }}
{{ $value->course }}
@empty
@endforelse --}}