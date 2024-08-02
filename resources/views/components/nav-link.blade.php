@props(["active" => false])
<a
    {{ $attributes }}
    class="{{ $active ? "bg-yellow-500 text-white" : "text-white hover:bg-yellow-400 hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? "page" : false }}"
>
    {{ $slot }}
</a>
