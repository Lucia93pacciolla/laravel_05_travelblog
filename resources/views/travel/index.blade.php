<x-layout header='lista viaggi'>

<div class="container my-5">
    <div class="row justify-content-center">

    <div class="col-12 col-md-4">

        @foreach($travels as $travel)
    
        <div class="card">
             <img src="https://picsum.photos/300" class="card-img-top" alt="...">
             <div class="card-body">
                 <h5 class="card-title">{{ $travel->title }}</h5>
                 <p class="small fst-italic text-muted">{{ $travel->producer }}</p>
                 <p class="card-text">{{ $travel->description }}</p>
             </div>
        </div>
    
    
        @endforeach
    </div>


    </div>
</div>

</x-layout>