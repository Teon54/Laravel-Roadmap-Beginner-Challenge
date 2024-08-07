@component('layouts.main')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new article</h2>
            <form action="{{ route('article.store') }}">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <x-input-text name="title" hint="type your title" />
                    <x-checkbox-input title="tags">
                        <x-checkbox-option name="vue">
                            Vue JS
                        </x-checkbox-option>
                        <x-checkbox-option name="react">
                            React JS
                        </x-checkbox-option>
                    </x-checkbox-input>
                    <x-select-option-input name="category">
                        <x-option value="TV">
                            TV/Monitors
                        </x-option>
                    </x-select-option-input>
                    <x-text-area-input name="Body" hint="your description here" />
                    <x-image-input name="image">
                        SVG, PNG, JPG or GIF (MAX. 800x400px). (optional)
                    </x-image-input>
                </div>
                <x-primary-button class="mt-5">
                    Add Article
                </x-primary-button>
            </form>
        </div>
    </section>
@endcomponent
