<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include CSS stylesheets or scripts -->
</head>
<body>
    <header>
        <!-- Include navigation bar or site header -->
        <nav>
            <ul>
                <li><a href="{{ route('employees.index') }}">Employees</a></li>
                <!-- Add more menu items as needed -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Include footer content -->
        <p>&copy; {{ date('Y') }} Your Company</p>
    </footer>

    <!-- Include JavaScript files or scripts -->
</body>
</html>