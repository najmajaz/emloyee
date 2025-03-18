<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Employee</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Enter Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Position:</label>
                        <input type="text" id="position" name="position" value="{{ $employee->position }}" class="form-control" placeholder="Enter Position" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" value="{{ $employee->email }}" class="form-control" placeholder="Enter Email" required>
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Dob:</label>
                        <input type="date" id="dob" name="dob" value="{{ $employee->dob }}" class="form-control" required>
                    </div>

                    
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary:</label>
                        <input type="number" id="salary" name="salary" value="{{ $employee->salary }}" step="0.01" class="form-control" placeholder="Enter Salary" required>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Update Employee</button>
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
