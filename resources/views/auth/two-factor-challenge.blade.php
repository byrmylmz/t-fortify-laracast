<x-guest-layout>
    <h2>Enter Your code here for two factor auth</h2>   

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
            
      
    <form action="/two-factor-challenge" method="POST">
        @csrf
      
        <div>
            <label for="code ">Code</label>    
            <input type="text" id="code" name="code" autofocus>
        </div>
      
        <div>
            <label for="recovery_code ">Recovery Code</label>    
            <input type="text" id="recovery_code" name="recovery_code" autofocus>
        </div>
      
        <div>
            <button type="submit" >send</button>
        </div>

    </form>
</x-guest-layout>