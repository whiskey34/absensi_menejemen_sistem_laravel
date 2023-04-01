<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>AMS</title>
</head>
<body>
    
    <div id="wrapper">
        @include('user-layouts.navbar')

    
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @yield('user-content')
                </div>
            </div>
        </div>
        
        @include('user-layouts.footer')  
        @include('user-layouts.footer-script')  
    </div>

    @include('includes.flash')
</body>
</html>