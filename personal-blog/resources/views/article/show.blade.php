@component('layouts.main')
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <div>
                            <p class="text-xl font-bold text-gray-900 dark:text-white">{{ $article->user->name }}</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time datetime="{{ $article->created_at }}" title="{{ $formatedTime }}">{{ $formatedTime }}</time></p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {{ $article->title }}
                </h1>
            </header>
            @isset($article->image)
                <img alt="Image Cover" src="" class="rounded"/>
            @endisset
           <p class="text-white dark:text-black">
               {{ $article->body }}
           </p>
        </article>
    </div>
@endcomponent
