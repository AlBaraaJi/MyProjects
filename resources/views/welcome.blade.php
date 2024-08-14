<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .welcome-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .welcome-container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .welcome-container p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .welcome-container .btn-primary {
            padding: 10px 30px;
            font-size: 1rem;
        }
    </style>
</head>
<body>

<div class="welcome-container">
    <h1>!اهلا بك في موقع مشاريعي</h1>
    <p>الطريق الامثل لادارة المشاريع</p>
    @if (Route::has('login'))
    <nav class="d-flex justify-content-center">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="btn btn-outline-dark me-2"
            >
                Dashboard
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="btn btn-outline-dark me-2"
            >
                Log in
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="btn btn-outline-dark"
                >
                    Register
                </a>
            @endif
        @endauth
    </nav>
@endif  

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS to add background image -->
<script>
    document.body.style.backgroundImage = "url('https://bernstein-bank.azureedge.net/wp-content/uploads/2019/11/boerse-kurs.jpg')";
</script>
</body>
</html>
