<x-layout header='Quale nazione vuoi scoprire'>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">


                <form method="POST" action="{{route('travel.store')}}" class='p-5 shadow' enctype="multipart/form-data">
 

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">nome viaggio</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                        
                    </div>

                    <div class="mb-3">
                        <label for="producer" class="form-label">produttore</label>
                        <input type="text" name="producer" class="form-control" id="producer" value="{{ old('producer') }}">       
                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label">copertina</label>
                        <input type="file" name="cover" class="form-control" id="cover">                       
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">descrizione viaggio</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{old('description')}}</textarea>   
                    </div>
                
                    <button type="submit" class="btn btn-primary">Parti</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>