<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border
    border-transparent rounded-md font-semibold text-white hover:bg-red-500 focus:outline-none transition
    ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
