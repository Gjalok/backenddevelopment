<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @stack('styles')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @stack('scripts')
</body>
</html>

<footer>
    <div class="container">
        <!-- Your Subscribe Form Goes Here -->
        <form action="{{ route('subscribe') }}" method="post">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</footer>

@push('styles')
    <!-- Additional CSS files or stylesheets can be added here -->
@endpush


@push('scripts')
    <!-- Additional JS files or scripts can be added here -->
@endpush