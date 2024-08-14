<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            background-color: #343a40;
        }
        .sidebar a {
            color: #fff;
            padding: 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar p-3">
        <h4 class="text-white">Admin Panel</h4>
        <a href="#dashboard">Dashboard</a>
        <a href="#users">Users</a>
        <a href="#settings">Settings</a>
        <a href="#reports">Reports</a>
        
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Dashboard</h2>
        <p>Welcome to the admin dashboard.</p>
        <form action="/logout" method="POST" class="mt-2">
            @csrf
            <button type="submit" class="btn btn-danger mb-5 ">Logout</button>
        </form>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Users: 150</h5>
                        <p class="card-text">Manage all the registered users here.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Sales</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Sales: $3,500</h5>
                        <p class="card-text">View sales statistics and reports.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Reports</div>
                    <div class="card-body">
                        <h5 class="card-title">Pending Reports: 5</h5>
                        <p class="card-text">Check the latest reports and tasks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 " dir="rtl" >
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">امكانية التطوير</div>
                    <div class="card-body">
                        <h5 class="card-title">السلام عليكم انا البراء</h5>
                        <p class="card-text">طبعا بامكاني تطوير هذا المشروع اكثر بكثير من هذه المرحلة و لكن ربما يكفي هذا القدر للانتقال لما هو اعلى و شكرا لكم </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
