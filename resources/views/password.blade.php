<x-app-layout>
    <h2>Update Password</h2>   
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
            
            @if (session('status')==='password-updated')
                <div class="mb-4 font-medium text-sm text-green-600">
                   Password Updated
                </div>
            @endif

    <form action="/user/password" method="POST">
        @csrf
        @method('put')
      

        <div>
            <label for="current_password">Current password</label>  
            <input type="password" id="current_password" name="current_password"  autofocus>
        </div>

        <div>
            <label for="password">New Password </label>  
            <input type="password" id="password" name="password"  autofocus>
        </div>

        <div>
            <label for="password">Password Confirmation</label>  
            <input type="password" id="password_confirmation" name="password_confirmation"  autofocus>
        </div>

        <div>
            <button type="submit" >Update Password</button>
        </div>
    </form>
</x-app-layout>