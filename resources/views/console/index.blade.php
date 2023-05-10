<x-layout header="lista compagnie">

    @if(session('consoleCreated'));
        <div class="alert alert-succes">
            {{session('consoleCreated')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">

            @if(count ($consoles))

                    @foreach($consoles as $console)
                        <div class="col-12 md col-4 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $console->name }}</h5>
                                        <p class="small fst-italic text-muted">{{ $console->brand }}</p>

                                        <a href="{{route('console.show', compact ('console'))}}" class="btn-primary mt-3">Scopri</button>
                                    </div>
                                </div>
                        </div>
                        
                    @endforeach
            @else
                    <div class="col-12 text-center">
                        <h2>non ci sono compagnie</h2>
                    </div>
            @endif
                
        </div>
    </div>

</x-layout>