<x-layout header="Profilo utente">

    <div class="container my-5">
        <div class="row justify-content-center">

            @foreach(Auth::user()->consoles as $console)

                <div class="col-12 md col-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $console->name }}</h5>
                            <p class="small fst-italic text-muted">{{ $console->brand }}</p>
                            
                            @if($console->user_id)
                            
                                <hr>
                                <p class="small">Creato da: {{$console->user->name}}</p>
                                <hr>
            
                            @endif
                            
            
                            <div class="mt-3 d-inline">
            
                                <a href="{{route('console.show', compact ('console'))}}" class="btn-primary">Scopri</button>
            
                                @if($console->user_id && $console->user->id == Auth::user()->id)
            
                                    <a href="{{route('console.edit', compact ('console'))}}" class="btn-primary">Modifica</button>
                                    <form method="POST" action="{{route('console.destroy', compact('console'))}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">cancella</button>
                                    </form>
            
                                @endif
            
                            </div>
                                
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>


</x-layout>