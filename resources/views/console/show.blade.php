<x-layout header="{{$console ->name}}">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <p>{{ $console->brand}}</p>
                <p>{{ $console->description}}</p>
                <a href="{{route('console.index')}}" class="btn btn-primary"> Torna indietro</a>
            </div>
        </div>
    </div>


</x-layout>