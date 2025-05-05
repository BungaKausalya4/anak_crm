
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CRM PT. Smart</title>
        <link rel="stylesheet" href="{{ asset('css/customers.css') }}">
        @stack('styles') 
    </head>
    
<body class="bg-gray-100 text-gray-800">


    @include('partials.navbar')

    <main class="py-6 px-4">
        @yield('content')
    </main>

</body>
</html>

