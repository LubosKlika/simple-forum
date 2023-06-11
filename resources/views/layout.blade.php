
<!DOCTYPE html>
<html lang="cs">
<head>

    @livewireStyles
    @include('partials._head')
</head>
<body > 
    
       @include('partials._navbar')
                @yield('content')
       
                     @livewireScripts


    @include('partials._footer')
</body>
</html>