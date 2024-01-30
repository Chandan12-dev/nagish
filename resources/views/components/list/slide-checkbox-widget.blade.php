<div {!! $attributes->merge(['class' => 'cursor-pointer widgetslider']) !!}>
  <label for="toggleFour" class="flex cursor-pointer select-none items-center slide-checbox">
    <div class="relative">
    {{$slot}}
    <div class="box bg-black block rounded-full"></div>
    <div
      class="dot absolute  flex items-center justify-center rounded-full bg-gray-400 transition"
    ><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" class="onchecked">
  <g id="Group_22" data-name="Group 22" transform="translate(-677 -239)">
    <circle id="Ellipse_2" data-name="Ellipse 2" cx="13" cy="13" r="13" transform="translate(677 239)" fill="#fff"/>
    <path id="Icon_feather-check" data-name="Icon feather-check" d="M18.293,9,9.842,17.451,6,13.61" transform="translate(677.399 238.774)" fill="none" stroke="#2271b1" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
  </g>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" class="nonchecked">
  <g id="Group_21" data-name="Group 21" transform="translate(-649 -172)">
    <circle id="Ellipse_1" data-name="Ellipse 1" cx="13" cy="13" r="13" transform="translate(649 172)" fill="#fff"/>
    <path id="Icon_feather-check" data-name="Icon feather-check" d="M18.293,9,9.842,17.451" transform="translate(647.658 171.774)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
    <path id="Icon_feather-check-2" data-name="Icon feather-check" d="M9.842,9l8.451,8.451" transform="translate(647.658 171.774)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
  </g>
</svg></div>
    </div>
  </label>

</div>


