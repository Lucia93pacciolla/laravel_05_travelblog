<x-layout header='con quale compagnia vuoi viaggiare'>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">


                <form method="POST" action="{{route('console.store')}}" class='p-5 shadow' enctype="multipart/form-data">
 

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
                        <label for="name" class="form-label">nome compagnia</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                        
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">brand</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{ old('brand') }}">       
                    </div>

                    {{-- <div class="mb-3">
                        <label for="cover" class="form-label">copertina</label>
                        <input type="file" name="cover" class="form-control" id="cover">                       
                    </div> --}}

                    <div class="mb-3">
                        <label for="description" class="form-label">descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{old('description')}}</textarea>   
                    </div>
                
                    <button type="submit" class="btn btn-primary">Inserisci compagnia</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>