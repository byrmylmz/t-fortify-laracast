<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fortify Example </title>
</head>
<body>
    <div>
       <ul>
           <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
           <li><a href="{{ route('profile') }}">Profile</a></li>
           <li><a href="{{ route('password') }}">Update-Password</a></li>
           <li><a href="{{ route('two-factor-auth') }}">Two Factor Auth</a></li>
           <li>
               <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        logout
                    </a>
                </form>
           </li>
       </ul>
    </div>
    <div>
        {{ $slot }}
    </div>
</body>
</html>