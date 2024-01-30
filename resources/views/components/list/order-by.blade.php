<div {!! $attributes->merge(['class' => 'order_by cursor-pointer']) !!}>
  <svg xmlns="http://www.w3.org/2000/svg" width="10.494" height="6" viewBox="0 0 10.494 6">
    <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down" d="M11.436,15.438,15.4,11.467a.747.747,0,0,1,1.059,0,.756.756,0,0,1,0,1.062l-4.5,4.5a.749.749,0,0,1-1.034.022L6.406,12.532A.75.75,0,0,1,7.465,11.47Z" transform="translate(-6.188 -11.246)" fill="#041a3a"/>
  </svg>
  {{$slot}}
</div>
