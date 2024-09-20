<x-layout>
    <header class="container-fluid header-custom">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12 m-0 d-flex justify-content-center">
                <div class="rounded h1-back d-flex flex-column justify-content-center align-items-center">
                    <h1 class="display-1 text-center my-auto">Gli articoli della community</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="col-12 vh-100 my-1 d-flex justify-content-center flex-wrap">
        @foreach($articles as $article)
        <x-card :article="$article"/>
        @endforeach
    </section>
</x-layout>