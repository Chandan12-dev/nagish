<x-app-layout>	
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Active Real Time Licences  {{ __('(6)') }}
        </h2>
		<p>This sections shows all sites with active monitoring</p>
    </x-slot>
	<x-slot name="search_form">
        <x-list.search-form/>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @include('website-list') 
        </div>
    </div>
</x-app-layout>
