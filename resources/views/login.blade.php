@extends('layouts.app')

@section('content')
<h1 class="text-center mt-5">Login</h1>

<form action="" method="post" class="w-25 m-auto border-1 h-75 p-4">

        @csrf

        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" required class="form-control">

        <label for="password" class="form-label">Senha:</label>
        <input type="password" name="password" id="password" class="form-control">

        <label for="captcha" class="form-label">Resolva para se altenticar: {{ $captcha }}</label>
        <input type="number" name="captcha" id="captcha" class="form-control">

        @if(isset($bloqueado))
            
        <input type="submit" value="Entrar" class="btn btn-primary w-25 mt-3 m-auto" disabled>
      
        
        @else
        <input type="submit" value="Entrar" class="btn btn-primary w-25 mt-3 m-auto">
            

        @endif
        @if ($errors->any())
                @foreach ($errors->all() as $item)
                    
                        <p class="text-danger text-center">{{$item}}</p>
                @endforeach
            
        @endif

</form>
    
@endsection