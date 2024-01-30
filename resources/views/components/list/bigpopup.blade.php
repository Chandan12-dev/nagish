<div {!! $attributes->merge(['class' => 'fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%)] max-h-full custom-modal-popup']) !!}  tabindex="-1" aria-hidden="true">
    <div class="relative w-full max-w-4-5xl max-h-full bg-white p-10 rounded">        
       {{$slot}}
    </div>
</div>