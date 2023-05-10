<x-layout header="Accedi">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="p-5 shadow" method="POST" action="{{route('login')}}">

                    @csrf

                    <div class="mb-3">
                      <label for="email" class="form-label">Indirizzo email</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3 form-check">
                      <input type="checkbox" name="remamber" class="form-check-input" id="remamber">
                      <label class="form-check-label" for="remamber">Ricordami</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Accedi</button>
                  </form>

            </div>
        </div>
    </div>


</x-layout>