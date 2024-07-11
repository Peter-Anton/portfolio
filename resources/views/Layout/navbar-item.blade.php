@props(['item'])
<li class="py-3">
    <a href="{{ $item['url'] }}"
       class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white"
    >
        {{ $item['name'] }}
    </a>
