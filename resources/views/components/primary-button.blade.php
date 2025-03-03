<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-[#4D73FF] p-[16px_24px] rounded-[10px] text-center text-white font-semibold hover:bg-[#06C755] transition-all duration-300']) }}>
    {{ $slot }}
</button>
