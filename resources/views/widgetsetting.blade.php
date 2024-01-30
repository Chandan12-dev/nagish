
<form enctype="multipart/form-data">
	<div class="widget-setting">
		<div class="pop-top-header mb-4">
			<h3>Widget Settings | <span class="pop-website-name">domain.co.il</span></h3>
		</div>
		<div class="mb-4">
			<ul class="flex flex-wrap text-sm font-medium text-center" id="widget-settings-tab" data-tabs-toggle="#default-tab-content" role="tablist">
				<li class="" role="presentation">
					<button class="inline-block px-4 py-2  rounded-t-lg" id="main-tab" data-tabs-target="#main-content" type="button" role="tab" aria-controls="main" aria-selected="false">Main</button>
				</li>
				<li class="" role="presentation">
					<button class="inline-block px-4 py-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="button-tab" data-tabs-target="#button-content" type="button" role="tab" aria-controls="button" aria-selected="false">Button</button>
				</li>
				<li class="" role="presentation">
					<button class="inline-block px-4 py-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="mrdnlayout-tab" data-tabs-target="#mrdnlayout-content" type="button" role="tab" aria-controls="mrdnlayout" aria-selected="false">Modern Layout</button>
				</li>
				<li role="presentation">
					<button class="inline-block px-4 py-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="fonts-tab" data-tabs-target="#fonts-content" type="button" role="tab" aria-controls="fonts" aria-selected="false">Fonts</button>
				</li>
				<li class="" role="presentation">
					<button class="inline-block px-4 py-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contrast-tab" data-tabs-target="#contrast-content" type="button" role="tab" aria-controls="contrast" aria-selected="false">Contrast</button>
				</li>
				<li class="" role="presentation">
					<button class="inline-block px-4 py-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="styles-tab" data-tabs-target="#styles-content" type="button" role="tab" aria-controls="styles" aria-selected="false">Styles</button>
				</li>
				<li role="presentation">
					<button class="inline-block px-4 py-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="links-tab" data-tabs-target="#links-content" type="button" role="tab" aria-controls="links" aria-selected="false">Links</button>
				</li>
				<li class="" role="presentation">
					<button class="inline-block px-4 py-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="content-tab" data-tabs-target="#content-content" type="button" role="tab" aria-controls="content" aria-selected="false">Content</button>
				</li>
				<li role="presentation">
					<button class="inline-block px-4 py-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="advancedstng-tab" data-tabs-target="#advancedstng-content" type="button" role="tab" aria-controls="advancedstng" aria-selected="false">Advanced Settings</button>
				</li>
			</ul>
		</div>
		<div id="widget-settings-tab-content" class="mb-4">
			<div class="hidden" id="main-content" role="tabpanel" aria-labelledby="main-tab">
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Close button - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[main][close_button_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Accessibility statement button</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[main][accessibility_statement_button]" /></div>
				</div>
				<div class="flex align-items-start w-full bg-light-blue rounded-[10px] px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Accessibility statement content</div>
					<div class="w-4/6"><textarea id="widgetSettingEditor" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="widgetsetting[main][accessibility_statement_content]" rows="50"></textarea></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Clear cookies - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[main][clear_cookies_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Greyscale Images button - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[main][greyscale_images_button_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Invert button - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[main][invert_button_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">ADHD button - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[main][adhd_button_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Cognitive Disability Profile button - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[main][cognitive_disability_profile_button_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Mute volume - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[main][mute_volume_title]" /></div>
				</div>
			</div>
			<div class="hidden" id="button-content" role="tabpanel" aria-labelledby="button-tab">
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-1/2 custom-label">Show Sidebar on left side?</div>
					<div class="w-1/2">
						<x-list.slide-checkbox-widget class="">
							<input type="checkbox" name="widgetsetting[button][show_sidebar_left]" class="slide-checbox-input" />
						</x-list.slide-checkbox-widget>
					</div>
				</div>
				<div class="w-full bg-light-blue rounded-[10px] px-4 py-3 mb-3">
					<div class="w-full custom-label mb-3">Button Color</div>
					<div class="w-full flex align-items-center">
						<div class="w-3/4">
							<input type="color"  onchange="buttoncolor(event);" class="w-20 h-20" />
						</div>
						<div class="w-1/4">
							<div class="custom-input py-1 px-2 mb-2"><span id="colorpicked" class="colorpicked" style="background-color:#000;"></span><input type="text" id="colorpickedinput" class="undesign-input p-0" name="widgetsetting[button][button_color]" value="#000000" /></div>
							<div class="">
								<select class="custom-input w-full" name="widgetsetting[button][button_color_type]">
									<option value="solid">Solid</option>
									<option value="gradient" disabled>Gradient</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="w-full bg-light1-blue rounded-[10px] px-4 py-3 mb-3">
					<div class="w-full custom-label mb-3">Button Type</div>
					<div class="w-full flex align-items-center mb-3">
						<div class="custom-checkbox-container mr-6">
							<div class="radio-inner">
								<input type="radio" class="custom-checkbox" onclick="buttonSize(event)" name="widgetsetting[button][desktop][button_size]" value="30" />
								<span class="checkbox-custom-input mr-1.5"></span>
								Small(30px)
							</div>
						</div>
						<div class="custom-checkbox-container mr-6">
							<div class="radio-inner">
								<input type="radio" class="custom-checkbox" onclick="buttonSize(event)" name="widgetsetting[button][desktop][button_size]" value="50" checked />
								<span class="checkbox-custom-input mr-1.5"></span>
								Meduim(50px)
							</div>
						</div>
						<div class="custom-checkbox-container mr-6">
							<div class="radio-inner">
								<input type="radio" class="custom-checkbox" onclick="buttonSize(event)" name="widgetsetting[button][desktop][button_size]" value="80" />
								<span class="checkbox-custom-input mr-1.5"></span>
								Large(80px)
							</div>
							
						</div>
					</div>
					<div class="w-full custom-label mb-3">Shape Type</div>
					<div class="w-full flex align-items-center mb-3">
						<div class="custom-checkbox-container mr-6">
							<div class="radio-inner">
								<input type="radio" class="custom-checkbox" onclick="buttonShape(event)" name="widgetsetting[button][desktop][shape_type]" value="square" />
								<span class="checkbox-custom-input mr-1.5"></span>
								Sqaure
							</div>
						</div>
						<div class="custom-checkbox-container mr-6">
							<div class="radio-inner">
								<input type="radio" class="custom-checkbox" onclick="buttonShape(event)" name="widgetsetting[button][desktop][shape_type]" value="square_rounded" />
								<span class="checkbox-custom-input mr-1.5" ></span>
								Square( with round cornders )
							</div>
						</div>
						<div class="custom-checkbox-container mr-6">
							<div class="radio-inner">
								<input type="radio" class="custom-checkbox" onclick="buttonShape(event)" name="widgetsetting[button][desktop][shape_type]" value="half_left_circle" />
								<span class="checkbox-custom-input mr-1.5"></span>
								Half Left Circle
							</div>
							
						</div>
						<div class="custom-checkbox-container mr-6">
							<div class="radio-inner">
								<input type="radio" class="custom-checkbox" onclick="buttonShape(event)" name="widgetsetting[button][desktop][shape_type]" value="half_right_circle" />
								<span class="checkbox-custom-input mr-1.5"></span>
								Half Right Circle
							</div>
							
						</div>
						<div class="custom-checkbox-container mr-6">
							<div class="radio-inner">
								<input type="radio" class="custom-checkbox" onclick="buttonShape(event)" name="widgetsetting[button][desktop][shape_type]" value="circle" checked />
								<span class="checkbox-custom-input mr-1.5"></span>
								Circle
							</div>
							
						</div>
					</div>
					<div class="w-full flex">
						<div class="w-1/4 pr-3 relative">
							<input type="radio" name="widgetsetting[button][button_icon]" class="icon-input w-full h-full rounded-none border-0 absolute inset-0 opacity-0" value="{{ asset('/assets/images/icon1.png') }}" />
							<div class="icon-box border-slate-300 border border-solid rounded-[10px] w-full h-48 bg-white flex align-items-center justify-content-center">
								<div class="w-12 h-12 p-2.5 flex align-items-center justify-content-center rounded-full icon-bg-color" style="background-color: rgb(0, 0, 0);">
									<img src="{{ asset('/assets/images/icon1.svg') }}" class="icon-bg-size w-full" />
								</div>
							</div>
						</div>
						<div class="w-1/4 pr-3 relative">
							<input type="radio" name="widgetsetting[button][button_icon]" class="icon-input w-full h-full rounded-none border-0 absolute inset-0 opacity-0" value="{{ asset('/assets/images/icon2.png') }}" />
							<div class="icon-box border-slate-300 border border-solid rounded-[10px] w-full h-48 bg-white flex align-items-center justify-content-center">
							<div class="w-12 h-12 p-2.5 flex align-items-center justify-content-center rounded-full icon-bg-color" style="background-color: rgb(0, 0, 0);">
									<img src="{{ asset('/assets/images/icon2.svg') }}" class="icon-bg-size w-full" />
								</div>
							</div>
						</div>
						<div class="w-1/4 pr-3 relative">
							<input type="radio" name="widgetsetting[button][button_icon]" class="icon-input w-full h-full rounded-none border-0 absolute inset-0 opacity-0" value="{{ asset('/assets/images/icon3.svg') }}" />
							<div class="icon-box border-slate-300 border border-solid rounded-[10px] w-full h-48 bg-white flex align-items-center justify-content-center">
								<div class="w-12 h-12 p-2.5 flex align-items-center justify-content-center rounded-full icon-bg-color" style="background-color: rgb(0, 0, 0);">
									<img src="{{ asset('/assets/images/icon3.svg') }}" class="icon-bg-size w-full" />
								</div>
							</div>
						</div>
						<div class="w-1/4">
							<div class="icon-box border-slate-300 border border-solid rounded-[10px] w-full h-48 bg-white flex align-items-center justify-content-center">
								<div class="relative" id="hideonpreview">
									<input type="file" name="widgetsetting[button][button_icon_file]" class="w-full h-full rounded-none border-0 absolute inset-0 opacity-0" onchange="showPreview(event)" />
									<div class="upload-icon-setup text-center" id="">
										<img src="{{ asset('/assets/images/upload.svg') }}" class="w-10 h-10 mx-auto" />
										<span class="text-slate-400 block text-sm">Upload your icon</span>
									</div>
								</div>
								<div class="relative hidden w-full h-full align-items-center justify-content-center" id="preview-button-icon">
									<img id="preview-button-icon-img" class="h-32 w-32" />
									<span onclick="removePreviewbtnicon()" class="block absolute w-6 h-6 left-2 bottom-2"><img src="{{ asset('/assets/images/remove.svg') }}" class="w-full h-full" /></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-full bg-light-blue rounded-[10px] px-4 py-2 mb-3" x-data="{ showcustomlogoposition: false }">
					<div class="mb-3 flex align-items-center w-full">
						<div class="w-1/2 custom-label">Custom logo position?</div>
						<div class="w-1/2">
							<x-list.slide-checkbox-widget class="">
								<input type="checkbox" x-model="showcustomlogoposition" name="widgetsetting[button][desktop][custom_logo_position]" class="slide-checbox-input" />
							</x-list.slide-checkbox-widget>
						</div>
					</div>
					<div x-show="showcustomlogoposition" class="mb-3 flex align-items-start w-full">
						<div class="w-1/2 custom-label">Logo position (px)</div>
						<div class="w-1/2">
						<!-- Logo Position -->
							<div class="icon-box border-slate-300 border border-solid rounded-[10px] w-full bg-white p-2 mb-3">
								<div class="flex align-items-center justify-content-between mb-4">
									<div class="custom-checkbox-container mr-0">
										<div class="radio-inner">
											<input type="radio" class="custom-checkbox" name="widgetsetting[button][desktop][logoposition]" value="top_left" />
											<span class="checkbox-custom-input"></span>
										</div>
									</div>
									<div class="custom-checkbox-container mr-0">
										<div class="radio-inner">
											<input type="radio" class="custom-checkbox" name="widgetsetting[button][desktop][logoposition]" value="top_center" />
											<span class="checkbox-custom-input"></span>
										</div>
									</div>
									<div class="custom-checkbox-container mr-0">
										<div class="radio-inner">
											<input type="radio" class="custom-checkbox" name="widgetsetting[button][desktop][logoposition]" value="top_right" />
											<span class="checkbox-custom-input"></span>
										</div>
									</div>
								</div>
								<div class="flex align-items-center justify-content-between mb-4">
									<div class="custom-checkbox-container mr-0">
										<div class="radio-inner">
											<input type="radio" class="custom-checkbox" name="widgetsetting[button][desktop][logoposition]" value="left_center" />
											<span class="checkbox-custom-input"></span>
										</div>
									</div>
									<div class="custom-checkbox-container mr-0">
										<div class="radio-inner">
											<input type="radio" class="custom-checkbox" name="widgetsetting[button][desktop][logoposition]" value="right_center" />
											<span class="checkbox-custom-input"></span>
										</div>
									</div>
								</div>
								<div class="flex align-items-center justify-content-between">
									<div class="custom-checkbox-container mr-0">
										<div class="radio-inner">
											<input type="radio" class="custom-checkbox" name="widgetsetting[button][desktop][logoposition]" value="bottom_left" />
											<span class="checkbox-custom-input"></span>
										</div>
									</div>
									<div class="custom-checkbox-container mr-0">
										<div class="radio-inner">
											<input type="radio" class="custom-checkbox" name="widgetsetting[button][desktop][logoposition]" value="bottom_center" />
											<span class="checkbox-custom-input"></span>
										</div>
									</div>
									<div class="custom-checkbox-container mr-0">
										<div class="radio-inner">
											<input type="radio" class="custom-checkbox" name="widgetsetting[button][desktop][logoposition]" value="bottom_right" />
											<span class="checkbox-custom-input"></span>
										</div>
									</div>
								</div>
							</div>
							<!-- position padding margin from top or left -->
							<div class="w-full custom-label mb-3">Exact positioning:</div>
							<div class="flex align-items-center justify-content-between mb-3">
								<div class="w-1/2 pr-2">
									<div class="flex rounded-[80px] border border-gray-200 overflow-hidden h-8">
										<input type="number" class="py-2 px-3 pe-11 block w-full border-0 bg-transparent" name="widgetsetting[button][desktop][position][0][distance]" value="0">
										<span class="pl-2 pr-4 inline-flex items-center min-w-fit">px</span>
									</div>
								</div>
								<div class="w-1/2 pl-2">
									<select class="custom-input w-full" name="widgetsetting[button][desktop][position][0][from]">
										<option value="left" selected>To the left</option>
										<option value="right">To the Right</option>
									</select>
								</div>
							</div>
							<div class="flex align-items-center justify-content-between mb-3">
								<div class="w-1/2 pr-2">
									<div class="flex rounded-[80px] border border-gray-200 overflow-hidden h-8">
										<input type="number" class="py-2 px-3 pe-11 block w-full border-0 bg-transparent" name="widgetsetting[button][desktop][position][1][distance]" value="0">
										<span class="pl-2 pr-4 inline-flex items-center min-w-fit">px</span>
									</div>
								</div>
								<div class="w-1/2 pl-2">
									<select class="custom-input w-full" name="widgetsetting[button][desktop][position][1][from]">
										<option value="top" selected>To the Top</option>
										<option value="bottom">To the Bottom</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-1/2 custom-label">Hide for mobile? (max: 767px)</div>
					<div class="w-1/2">
						<x-list.slide-checkbox-widget>
							<input type="checkbox" name="widgetsetting[button][hide_on_mobile]" class="slide-checbox-input" />
						</x-list.slide-checkbox-widget>
					</div>
				</div>
				<div class="w-full bg-light-blue rounded-[10px] px-4 py-2 mb-3" x-data="{ showcustommobilelogoposition: false }">
					<div class="mb-3 flex align-items-center w-full">
						<div class="w-1/2 custom-label">Custom logo position?(Mobile)</div>
						<div class="w-1/2">
							<x-list.slide-checkbox-widget class="">
								<input type="checkbox" x-model="showcustommobilelogoposition" name="widgetsetting[button][mobile][custom_logo_position]" class="slide-checbox-input" />
							</x-list.slide-checkbox-widget>
						</div>
					</div>
					
					<div x-show="showcustommobilelogoposition" class="mb-3 w-full">
						<div class="w-full custom-label mb-3">Button Type</div>
						<div class="w-full flex align-items-center mb-3">
							<div class="custom-checkbox-container mr-6">
								<div class="radio-inner">
									<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][button_size]" value="30" />
									<span class="checkbox-custom-input mr-1.5"></span>
									Small(30px)
								</div>
							</div>
							<div class="custom-checkbox-container mr-6">
								<div class="radio-inner">
									<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][button_size]" value="50" checked />
									<span class="checkbox-custom-input mr-1.5"></span>
									Meduim(50px)
								</div>
							</div>
							<div class="custom-checkbox-container mr-6">
								<div class="radio-inner">
									<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][button_size]" value="80" />
									<span class="checkbox-custom-input mr-1.5"></span>
									Large(80px)
								</div>
								
							</div>
						</div>
						<div class="w-full custom-label mb-3">Shape Type</div>
						<div class="w-full flex align-items-center mb-3">
							<div class="custom-checkbox-container mr-6">
								<div class="radio-inner">
									<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][shape_type]" value="square" />
									<span class="checkbox-custom-input mr-1.5"></span>
									Sqaure
								</div>
							</div>
							<div class="custom-checkbox-container mr-6">
								<div class="radio-inner">
									<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][shape_type]" value="square_rounded" />
									<span class="checkbox-custom-input mr-1.5" ></span>
									Square( with round cornders )
								</div>
							</div>
							<div class="custom-checkbox-container mr-6">
								<div class="radio-inner">
									<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][shape_type]" value="half_left_circle" />
									<span class="checkbox-custom-input mr-1.5"></span>
									Half Left Circle
								</div>
								
							</div>
							<div class="custom-checkbox-container mr-6">
								<div class="radio-inner">
									<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][shape_type]" value="half_right_circle" />
									<span class="checkbox-custom-input mr-1.5"></span>
									Half Right Circle
								</div>
								
							</div>
							<div class="custom-checkbox-container mr-6">
								<div class="radio-inner">
									<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][shape_type]" value="circle" checked />
									<span class="checkbox-custom-input mr-1.5"></span>
									Circle
								</div>
								
							</div>
						</div>
						<div class=" flex align-items-start w-full">
							<div class="w-1/2 custom-label">Logo position (Mobile)</div>
							<div class="w-1/2">
							<!-- Logo Position -->
								<div class="icon-box border-slate-300 border border-solid rounded-[10px] w-full bg-white p-2 mb-3">
									<div class="flex align-items-center justify-content-between mb-4">
										<div class="custom-checkbox-container mr-0">
											<div class="radio-inner">
												<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][logoposition]" value="top_left" />
												<span class="checkbox-custom-input"></span>
											</div>
										</div>
										<div class="custom-checkbox-container mr-0">
											<div class="radio-inner">
												<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][logoposition]" value="top_center" />
												<span class="checkbox-custom-input"></span>
											</div>
										</div>
										<div class="custom-checkbox-container mr-0">
											<div class="radio-inner">
												<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][logoposition]" value="top_right" />
												<span class="checkbox-custom-input"></span>
											</div>
										</div>
									</div>
									<div class="flex align-items-center justify-content-between mb-4">
										<div class="custom-checkbox-container mr-0">
											<div class="radio-inner">
												<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][logoposition]" value="left_center" />
												<span class="checkbox-custom-input"></span>
											</div>
										</div>
										<div class="custom-checkbox-container mr-0">
											<div class="radio-inner">
												<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][logoposition]" value="right_center" />
												<span class="checkbox-custom-input"></span>
											</div>
										</div>
									</div>
									<div class="flex align-items-center justify-content-between">
										<div class="custom-checkbox-container mr-0">
											<div class="radio-inner">
												<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][logoposition]" value="bottom_left" />
												<span class="checkbox-custom-input"></span>
											</div>
										</div>
										<div class="custom-checkbox-container mr-0">
											<div class="radio-inner">
												<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][logoposition]" value="bottom_center" />
												<span class="checkbox-custom-input"></span>
											</div>
										</div>
										<div class="custom-checkbox-container mr-0">
											<div class="radio-inner">
												<input type="radio" class="custom-checkbox" name="widgetsetting[button][mobile][logoposition]" value="bottom_right" />
												<span class="checkbox-custom-input"></span>
											</div>
										</div>
									</div>
								</div>
								<!-- position padding margin from top or left -->
								<div class="w-full custom-label mb-3">Exact positioning:</div>
								<div class="flex align-items-center justify-content-between mb-3">
									<div class="w-1/2 pr-2">
										<div class="flex rounded-[80px] border border-gray-200 overflow-hidden h-8">
											<input type="number" class="py-2 px-3 pe-11 block w-full border-0 bg-transparent" name="widgetsetting[button][mobile][position][0][distance]" value="0">
											<span class="pl-2 pr-4 inline-flex items-center min-w-fit">px</span>
										</div>
									</div>
									<div class="w-1/2 pl-2">
										<select class="custom-input w-full" name="widgetsetting[button][mobile][position][0][from]">
											<option value="left" selected>To the left</option>
											<option value="right">To the Right</option>
										</select>
									</div>
								</div>
								<div class="flex align-items-center justify-content-between mb-3">
									<div class="w-1/2 pr-2">
										<div class="flex rounded-[80px] border border-gray-200 overflow-hidden h-8">
											<input type="number" class="py-2 px-3 pe-11 block w-full border-0 bg-transparent" name="widgetsetting[button][mobile][position][1][distance]" value="0">
											<span class="pl-2 pr-4 inline-flex items-center min-w-fit">px</span>
										</div>
									</div>
									<div class="w-1/2 pl-2">
										<select class="custom-input w-full" name="widgetsetting[button][mobile][position][1][from]">
											<option value="top" selected>To the Top</option>
											<option value="bottom">To the Bottom</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden" id="mrdnlayout-content" role="tabpanel" aria-labelledby="mrdnlayout-tab">
				<div class="w-full bg-light1-blue rounded-[12px] px-4 py-2 mb-3">
					<div class="flex align-items-center mb-3">
						<div class="w-2/6 custom-label">Enable i18n support?</div>
						<div class="w-4/6 ">
							<x-list.slide-checkbox-widget class="">
								<input type="checkbox" name="widgetsetting[layout][enable_i18n_support]" class="slide-checbox-input" />
							</x-list.slide-checkbox-widget>
						</div>
					</div>
					<div class="w-full mb-3 text-sm"><b>Internationalization.</b> Load pretranslated plugin settings. Currently supported 3 languages: English, Hebrew, Russian.</div>
					<div class="w-full text-sm">*HTML code is NOT allowed</div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Vision Impaired Profile title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][vision_impaired_profile_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Vision Impaired Profile desciption</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][vision_impaired_profile_desciption]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Adjust Background Colors title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][adjust_background_colors_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Adjust Title Colors title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][adjust_title_colors_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Adjust Text Colors title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][adjust_text_colors_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Adjust Link Colors</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][adjust_link_colors]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Keyboard navigation description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][keyboard_navigation_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Underline links description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][underline_links_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Highlight Links description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][highlight_links_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Images Greyscale description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][images_greyscale_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Invert Colors description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][invert_colors_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Remove Animations description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][remove_animations_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Remove styles description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][remove_styles_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Highlight titles description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][highlight_titles_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Images description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][images_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Large cursor</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][large_cursor]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Monochrome description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][monochrome_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Sepia description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][sepia_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Inspector description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][inspector_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Letter spacing description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][letter_spacing_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Word spacing description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][word_spacing_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Line height description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][line_height_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">ADHD Profile description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][adhd_profile_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Cognitive Disability Profile description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][cognitive_disability_profile_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Mute volume description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][mute_volume_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Hide images description</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][hide_images_description]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Table of contents</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][table_of_contents]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Dark/light color scheme title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][dark_light_color_scheme_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">הגדרות צבעים</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[layout][color_adjustment_settings]" /></div>
				</div>
			</div>
			<div class="hidden" id="fonts-content" role="tabpanel" aria-labelledby="fonts-tab">
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Letter spacing - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[fonts][letter_spacing_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Word spacing - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[fonts][word_spacing_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Line height - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[fonts][line_height_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Choose custom font</div>
					<div class="w-4/6">
						<select class="custom-input" name="widgetsetting[fonts][font_family]">
							<option value="">Please, choose font</option>
							<option value="Times New Roman, Times, serif">Times New Roman, Times, serif</option>
							<option value="Arial, Helvetica, sans-serif">Arial, Helvetica, sans-serif</option>
							<option value="Comic Sans MS, cursive, sans-serif">Comic Sans MS, cursive, sans-serif</option>
							<option value="Tahoma, Geneva, sans-serif">Tahoma, Geneva, sans-serif</option>
							<option value="Trebuchet MS, Helvetica, sans-serif">Trebuchet MS, Helvetica, sans-serif</option>
							<option value="Verdana, Geneva, sans-serif">Verdana, Geneva, sans-serif</option>
							<option value="Courier New, Courier, monospace">Courier New, Courier, monospace</option>
							<option value="Lucida Console, Monaco, monospace">Lucida Console, Monaco, monospace</option>
							<option value="Georgia, serif">Georgia, serif</option>
						</select>
					</div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Reset font size - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[fonts][reset_font_size_title]" /></div>
				</div>
			</div>
			<div class="hidden" id="contrast-content" role="tabpanel" aria-labelledby="contrast-tab">
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Choose color button - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[contrast][color_button_title]" /></div>
				</div>
				<div class="w-full bg-light1-blue rounded-[12px] px-4 py-2 mb-3" x-data="{ showcontrastvariations: false }">
					<div class="w-full flex align-items-center mb-3">
						<div class="w-2/6 custom-label">Contrast variations?</div>
						<div class="w-4/6 ">
							<x-list.slide-checkbox-widget class="">
								<input type="checkbox" x-model="showcontrastvariations" name="widgetsetting[contrast][contrast_variations]" class="slide-checbox-input" />
							</x-list.slide-checkbox-widget>
						</div>
					</div>
					<div x-show="showcontrastvariations" class="w-full">
						<div class="w-full text-sm mb-3">Please add custom contrast mode variation:</div>
						<div x-data="colors()">
						<template x-for="color in colors" :key="color.id">
							<div class="mb-3">
								<div class="flex w-full align-items-center">
								<!-- x-text="color.body" -->
									<div class="w-11/12" x-html="color.body">
										
									</div>
									<div class="w-1/12 text-center mt-7">
										<span class="cursor-pointer block text-center leading-6 w-8 h-8 text-3xl bg-red-700 hover:bg-red-700 hover:rounded-full p-1 text-white rounded-full mx-auto" @click="deleteColor(color.id)">&times;</span>
									</div>
								</div>
								
							</div>
						</template>
						<button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-500 rounded-[5px]" @click="addColor()">+ Add New color</button>
						<button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-500 rounded-[5px]" @click="saveColors()">Save Colors</button>
						</div>
					</div>
				</div>
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Monochrome mode - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[contrast][monochrome_mode_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Sepia mode - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[contrast][sepia_mode_title]" /></div>
				</div>
			</div>
			<div class="hidden" id="styles-content" role="tabpanel" aria-labelledby="styles-tab">
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Remove animations - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[styles][remove_animations_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Large mouse cursor - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[styles][large_mouse_cursor_title]" /></div>
				</div>
			</div>
			<div class="hidden" id="links-content" role="tabpanel" aria-labelledby="links-tab">
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Underline links title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[links][underline_links_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Highlight links - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[links][highlight_links_title]" /></div>
				</div>
			</div>
			<div class="hidden" id="content-content" role="tabpanel" aria-labelledby="content-tab">
				<div class="flex align-items-center w-full bg-light-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Hide images - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[content][hide_images_title]" /></div>
				</div>
				<div class="flex align-items-center w-full bg-light1-blue cf-group px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Display image description - title</div>
					<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[content][display_image_description_title]" /></div>
				</div>
				<div class="flex align-items-start w-full bg-light-blue rounded-[12px] px-4 py-2 mb-3">
					<div class="w-2/6 custom-label">Table Content - title</div>
					<div class="w-4/6">
						<textarea name="widgetsetting[content][table_content_title]" class="rounded-[10px] border border-slate-300 w-3/4 bg-transparent" rows="10"></textarea>
					</div>
				</div>
			</div>
			<div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="advancedstng-content" role="tabpanel" aria-labelledby="advancedstng-tab">
				<div class="w-full bg-light1-blue rounded-[12px] px-4 py-2 flex align-items-center mb-3">
					<div class="w-2/6 custom-label">Enable Web Speach API?</div>
					<div class="w-4/6 ">
						<x-list.slide-checkbox-widget class="">
							<input type="checkbox" name="widgetsetting[advancedsetting][enable_web_speach_api]" class="slide-checbox-input" />
						</x-list.slide-checkbox-widget>
					</div>
				</div>
				<div class="w-full bg-light-blue rounded-[12px] px-4 py-2 mb-3">
					<div class="flex align-items-center w-full mb-3">
						<div class="w-2/6 custom-label">Nagish Email</div>
						<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[content][nagish_email]" /></div>
					</div>
					<div class="w-full text-sm">Enter email here to attach in footer support title</div>
				</div>
				<div class="w-full bg-light1-blue rounded-[12px] px-4 py-2" x-data="{ showreportproblem: false }">
					<div class="w-full flex align-items-center mb-3">
						<div class="w-2/6 custom-label">Enable 'Report a problem'?</div>
						<div class="w-4/6 ">
							<x-list.slide-checkbox-widget class="">
								<input type="checkbox" x-model="showreportproblem" name="widgetsetting[advancedsetting][enable_Report_problem]" class="slide-checbox-input" />
							</x-list.slide-checkbox-widget>
						</div>
					</div>
					<div x-show="showreportproblem" class="w-full">
						<div class="flex align-items-center w-full mb-3">
							<div class="w-2/6 custom-label">Report a problem - title</div>
							<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[advancedsetting][report_problem_title]" /></div>
						</div>
						<div class="flex align-items-center w-full mb-3">
							<div class="w-2/6 custom-label">Report a problem - close button title</div>
							<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[advancedsetting][report_problem_close_button_title]" /></div>
						</div>
						<div class="flex align-items-center w-full mb-3">
							<div class="w-2/6 custom-label">Popup title</div>
							<div class="w-4/6"><input type="text" class="custom-input" name="widgetsetting[advancedsetting][popup_title]" /></div>
						</div>
						<div class="flex align-items-center w-full">
							<div class="w-2/6 custom-label">Mail to</div>
							<div class="w-4/6">
								<input type="text" class="custom-input" name="widgetsetting[advancedsetting][mail_to]" />
								<div class="w-full mb-3 text-sm"><i>Default: admin email. Multiple emails are supported (comma separated).</i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="widget-settings-footer text-center">
			<button class="inline-block rounded btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>  Save settings</button>
		</div>
	</div>

	<script>
		ClassicEditor
		.create(document.querySelector('#widgetSettingEditor'))
		.catch(error => {
		console.error(error);
		});
		
	</script>
	<script>
		function colors() {
			return {
			colors: [],
			newColor: '<div class="flex w-full"><div class="w-1/3 pr-2"><label for="backgroundcolor" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Background color</label><div class="w-full relative"><input type="color" class="w-full custom-input opacity-0 absolute top-0 left-0" onchange="ContrastColor(event)" value="#FFFFFF" /><input type="text" value="#FFFFFF" name="widgetsetting[contrast][contrast_variations_colors][][backgroundcolor]" class="block w-full custom-input customColorInput" ></div></div><div class="w-1/3 pr-2"><label for="textcolor" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Text color</label><div class="w-full relative"><input type="color" class="w-full custom-input opacity-0 absolute top-0 left-0" onchange="ContrastColor(event)" value="#FFFFFF" /><input type="text" value="#FFFFFF" name="widgetsetting[contrast][contrast_variations_colors][][textcolor]" class="block w-full custom-input customColorInput" ></div></div><div class="w-1/3 pr-2"><label for="title" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Title</label><input type="text" name="widgetsetting[contrast][contrast_variations_colors][][title]" class="block w-full custom-input" ></div></div>',
			addColor() {
				if (this.newColor.length < 1) return;
				this.colors.push({
				id: Date.now(),
				body: this.newColor,
				completed: false
				});
				// this.newColor = '';
			},
			deleteColor(colorId) {
				let position = this.colors.findIndex(el => el.id == colorId);
				this.colors.splice(position, 1);
			}
			}
		}
	</script>
</form>
