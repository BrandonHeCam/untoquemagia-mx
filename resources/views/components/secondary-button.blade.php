<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border
    border-gray-300 rounded-md font-semibold text-gray-700 hover:bg-gray-50 focus:outline-none
    disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>