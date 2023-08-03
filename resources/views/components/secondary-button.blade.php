<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-6 py-4 bg-black rounded font-semibold text-white tracking-widest shadow-sm tracking-widest hover:text-pink focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}
>
    {{ $slot }}
</button>
