    <!DOCTYPE html>
    <html>
    <head>
        <title>@yield('title','Yohandel page')</title>
        
    </head>
    <body>

         
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contacts">Contacts</a></li>
    
        </ul>
        @yield('content')

    </body>
    </html>