<x-guest-layout>
    <h2>Forgot Password</h2>   
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
            
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

    <form action="/forgot-password" method="POST">
        @csrf

      
        <div>
            <label for="email">Email</label>    
            <input type="email" id="email" name="email" value="{{ old('name') }}" autofocus>
        </div>
      
        <div>
            <button type="submit" >Email password reset link</button>
        </div>

    </form>
</x-guest-layout>