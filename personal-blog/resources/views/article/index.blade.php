@component('layouts.main')
    <div class="grid grid-cols-3 gap-5 m-5">
        @foreach($articles as $article)
            <x-card-article :article="$article"/>
        @endforeach
    </div>
@endcomponent
