<a
    {{ $attributes }}
    class="{{ $active ? "bg-hover text-white" : "text-white hover:bg-hover hover:text-white" }} block rounded-md px-3 py-2 text-base font-medium"
    aria-current="{{ $active ? "page" : false }}"
>
    {{ $slot }}
</a>
