<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quran Education Blog</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('http://localhost/crud/public/masters') }}">
                    {{ config('app.home','home') }}
                </a>

                <div class="container">
                    <h2 style="color:brown;text-align:center">welcome to Quran Education Blog</h2>
                    </div>
                    @yield('main')
                   </div>
                </body>
               </html>
