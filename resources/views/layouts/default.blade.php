<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="animsition">
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>
    <aside class="row">
        @include('includes.sidebar')
    </aside>
    <div id="main" class="row">

            @yield('content')

    </div>

    <div class="section__content section__content--p30">
             <div class="container-fluid">
                <footer class="row">
                    @include('includes.footer')
                </footer>
            </div>
    </div>
    
    

</div>
</body>
</html>
