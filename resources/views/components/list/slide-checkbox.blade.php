<div {!! $attributes->merge(['class' => 'cursor-pointer']) !!}>
  <label for="toggleFour" class="flex cursor-pointer select-none items-center slide-checbox">
    <div class="relative">
    {{$slot}}
    <div class="box bg-gray-100 block rounded-full"></div>
    <div
      class="dot absolute  flex items-center justify-center rounded-full bg-gray-400 transition"
    ></div>
    </div>
  </label>

</div>


