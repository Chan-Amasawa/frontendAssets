@extends('master')

@section('content')
    <div class=" m-5">
        <h1 class="text-primary">I'm About</h1>
        <p class="text-black-50 w-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, corporis minus minima esse
            aspernatur
            ratione saepe doloribus atque nemo sit architecto dolorem, alias impedit nobis expedita. Dolorum ex cumque
            pariatur.
        </p>
        <button class="btn btn-primary" id="sayName">Say My Name</button>
        <a href="{{ route('index') }}" class="btn btn-link">Go to About</a>
    </div>
@endsection
