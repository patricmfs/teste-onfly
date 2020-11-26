@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
       <div class="w-4/12 bg-white p-6 rounded-lg">

        @if(session('status'))
            <div class="bg-red-400 p-4 rounded-lg mb-6 text-white text-center">
                {{session('status')}}
            </div>
        @endif

            <form action="{{route('entrar')}}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email')
                    border-red-500 @enderror" value="{{ old('email') }}" autocomplete="off">

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password')
                    border-red-500 @enderror" value="" autocomplete="off">

                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Manter-se conectado</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="bg-blue-400 text-white px-4 py-3 rounded
                    font-medium w-full">Entrar </button>
                </div>
            </form>
       </div>
    </div>
@endsection