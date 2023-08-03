<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-6 py-4 bg-none border border-transparent font-semibold text-white tracking-widest hover:!text-pink hover:border focus:outline-none disabled:opacity-25 transition ease-in-out duration-300']) }}>
    {{ $slot }}
</button>
