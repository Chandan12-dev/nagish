<x-list.popup id="newSiteModel">
	<x-list.popup-close data-modal-hide="newSiteModel" />
	<h2 class="new-site-title mb-4">Add New Site</h2>
        <form method="POST" action="{{url('/')}}/dashboard">
			@csrf
			
			<!-- Website Domain -->
			<div>
				<x-text-input type="hidden" name="websiteListSubmit" value="AddSite" />
				<x-text-input placeholder="Domain (example.com)" id="domain" class="block mt-1 w-full bg-gray-100 gray-border" type="text" name="domain"  required autofocus autocomplete="domain" />
				<x-input-error :messages="$errors->get('domain')" class="mt-2" />
			</div>
			<div class="block mt-4">
				<label for="active_site" class="inline-flex items-center">
					<input id="active_site" type="checkbox" class="bg-gray-100 rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="active_site">
					<span class="ms-2 text-sm text-gray-600">{{ __('Active') }}</span>
				</label>
			</div>
			<div class="flex items-center justify-end mt-4">
			 
				<x-primary-button class="">
					{{ __('Create') }}
				</x-primary-button>
			</div>
		</form>
</x-list.popup>