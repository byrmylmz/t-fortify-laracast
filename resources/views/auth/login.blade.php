<x-guest-layout>
    <h2>Login</h2>   
            @if($errors->any())
                    <div>
                        <div>Something went wrong</div> 
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach 
                            </ul>
                    </div>
            @endif

    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>    
            <input type="email" id="email" name="email" value="{{ old('name') }}" autofocus>
        </div>
        <div>
            <label for="password">Password</label>  
            <input type="password" id="password" name="password"  autofocus>
        </div>
        <div>
            <label for="password">Remember</label>  
            <input type="checkbox" id="reember" name="remember"  >
            <span >Remember</span>
        </div>
      
        <div>
            <button type="submit" >Login</button>
        </div>
    </form>
    <a href="/forgot-password">Forgot Password</a>
</x-guest-layout>