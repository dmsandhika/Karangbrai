@props(["active" => false])
<a
    {{ $attributes }}
    class="{{ $active ? "bg-hover text-white" : "text-white hover:bg-hover hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? "page" : false }}"
>
    {{ $slot }}
</a>
