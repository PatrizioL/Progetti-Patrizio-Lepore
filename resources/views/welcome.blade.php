<x-layout>
    <x-header title="Presto4"/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @Auth
                <button><a href="{{route('annunci.create')}}">Crea il tuo annuncio</a></button>
                @endAuth
            </div>
        </div>
    </div>
</x-layout>