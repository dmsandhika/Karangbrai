<a
    {{ $attributes }}
    class="{{ $active ? "bg-yellow-500 text-white" : "text-white hover:bg-yellow-400 hover:text-white" }} block rounded-md px-3 py-2 text-base font-medium"
    aria-current="{{ $active ? "page" : false }}"
>
    {{ $slot }}
</a>
