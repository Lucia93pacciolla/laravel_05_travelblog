<x-layout header='Quale nazione vuoi scoprire'>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">


                <form method="POST" action="{{route('travel.store')}}" class='p-5 shadow'>

                @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">nome viaggio</label>
                        <input type="text" name="title" class="form-control" id="title">
                        
                    </div>

                    <div class="mb-3">
                        <label for="producer" class="form-label">produttore</label>
                        <input type="text" name="producer" class="form-control" id="producer">
                        
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">descrizione viaggio</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control"></textarea>
                        
                    </div>
                
                    <button type="submit" class="btn btn-primary">Parti</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>