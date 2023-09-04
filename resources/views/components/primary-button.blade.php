<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full inline-flex items-center justify-center px-4 py-2
    bg-[#0075b8]
    border border-transparent rounded-md font-semibold text-base text-white
    hover:bg-black
    focus:outline-none
    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>