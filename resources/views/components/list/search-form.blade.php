<?php $searchText = request()->get('search');
 

?>
<form action="{{ route('dashboard') }}" method="GET" class="search-form">
    <div class="input relative">
        <div class="form-outline" data-mdb-input-init>
          <input value="{{$searchText }}" id="search-input" name="search" placeholder="Search" type="text"  />
            
        </div>
        <button id="search-button" type="submit" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="21.414" height="21.414" viewBox="0 0 21.414 21.414">
                <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(-3.5 -3.5)">
                  <path id="Path_55" data-name="Path 55" d="M21.389,12.944A8.444,8.444,0,1,1,12.944,4.5,8.444,8.444,0,0,1,21.389,12.944Z" fill="none" stroke="#0578fa" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path id="Path_56" data-name="Path 56" d="M29.567,29.567l-4.592-4.592" transform="translate(-6.067 -6.067)" fill="none" stroke="#0578fa" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </g>
              </svg>
        </button>
      </div>
    </form>