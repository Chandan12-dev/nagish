<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Newsite;
use App\Models\Widgetsetting;
class AddNewSite extends Controller
{
    public function submitsite(Request $request){
        
        $newsite = new Newsite;
        $websettingData = new Widgetsetting;
        $websiteListSubmit = $request->websiteListSubmit;
        $jayParsedAry = [
            "main" => [
                "close_button_title" => "",
                "accessibility_statement_button" => "",
                "accessibility_statement_content" => "",
                "clear_cookies_title" => "",
                "greyscale_images_button_title" => "",
                "invert_button_title" => "",
                "adhd_button_title" => "",
                "cognitive_disability_profile_button_title" => "",
                "mute_volume_title" => ""
            ],
            "button" => [
                "show_sidebar_left" => false,
                "button_color" => "#000000",
                "button_color_type" => "solid",
                "desktop" => [
                "button_size" => "50",
                "shape_type" => "circle",
                "custom_logo_position" => false,
                "logoposition" => "bottom_right",
                "position" => [
                    [
                        "distance" => "0",
                        "from" => "right"
                    ],
                    [
                            "distance" => "0",
                            "from" => "bottom"
                        ]
                ]
                ],
                "mobile" => [
                    "button_size" => "50",
                    "shape_type" => "circle",
                    "custom_logo_position" => false,
                    "logoposition" => "bottom_right",
                    "position" => [
                        [
                            "distance" => "0",
                            "from" => "right"
                        ],
                        [
                            "distance" => "0",
                            "from" => "bottom"
                        ]
                    ]
                ],
                "button_icon" => url("/assets/images/icon1.svg"),
                "button_icon_file" => "",
                "hide_on_mobile" => true
            ],
            "layout" => [
                "enable_i18n_support" => false,
                "vision_impaired_profile_title" => "",
                "vision_impaired_profile_desciption" => "",
                "adjust_background_colors_title" => "",
                "adjust_title_colors_title" => "",
                "adjust_text_colors_title" => "",
                "adjust_link_colors" => "",
                "keyboard_navigation_description" => "",
                "underline_links_description" => "",
                "highlight_links_description" => "",
                "images_greyscale_description" => "",
                "invert_colors_description" => "",
                "remove_animations_description" => "",
                "remove_styles_description" => "",
                "highlight_titles_description" => "",
                "images_description" => "",
                "large_cursor" => "",
                "monochrome_description" => "",
                "sepia_description" => "",
                "inspector_description" => "",
                "letter_spacing_description" => "",
                "word_spacing_description" => "",
                "line_height_description" => "",
                "adhd_profile_description" => "",
                "cognitive_disability_profile_description" => "",
                "mute_volume_description" => "",
                "hide_images_description" => "",
                "table_of_contents" => "",
                "dark_light_color_scheme_title" => "",
                "color_adjustment_settings" => ""
            ],
            "fonts" => [
                "letter_spacing_title" => "",
                "word_spacing_title" => "",
                "line_height_title" => "",
                "font_family" => "",
                "reset_font_size_title" => ""
            ],
            "contrast" => [
                "color_button_title" => "",
                "contrast_variations" => false,
                "contrast_variations_colors" => [
                ],
                "monochrome_mode_title" => "",
                "sepia_mode_title" => ""
            ],
            "styles" => [
                "remove_animations_title" => "",
                "large_mouse_cursor_title" => ""
            ],
            "links" => [
                "underline_links_title" => "",
                "highlight_links_title" => ""
            ],
            "content" => [
                "hide_images_title" => "",
                "display_image_description_title" => "",
                "table_content_title" => ""
            ],
            "advancedsetting" => [
                "enable_web_speach_api" => false,
                "nagish_email" => "",
                "enable_Report_problem" => false,
                "report_problem_title" => "",
                "report_problem_close_button_title" => "",
                "popup_title" => "",
                "mail_to" => ""
            ]
        ];
        //print_r($websiteListSubmit);
        if($websiteListSubmit == "AddSite"){
            $newsite->name = $request->domain;
            
            if(empty($request->active_site)){
                $newsite->active = 'off';
            }else{
                $newsite->active = $request->active_site;
            }
            $newsite->visible = 'off';

            $newsite->license = Str::random(24);
            $license = Str::random(24);
            $websieName = $request->domain;
        // print_r($newsite->license);
            if (DB::table('newsites')->where('license', $license)->exists()) {
            
                return redirect('dashboard')->with('error', 'License Duplicate');

            }else if(DB::table('newsites')->where('name', $websieName)->exists()){

                return redirect('dashboard')->with('error', 'Website Already Added with name'.$websieName);

            }else{
                
                $newsite->save();

                $websettingData->site_id = $newsite->id;
                $websettingData->data = json_encode($jayParsedAry, true);
                $websettingData->save();
                return redirect('dashboard')->with('status', 'NewSite Added');
            }
        }
        if($websiteListSubmit == "UpdateSite"){
            foreach ($request->input('data') as $list) {
                $recordId =  $list['record_id'];
                if(isset($list['visible'])){
                    $visible =  $list['visible'];
                }else{
                    $visible = 0;
                }
                if(isset($list['active'])){
                    $active =  $list['active'];
                }else{
                    $active = 0;
                }
              
                DB::table('newsites')
                ->where('id', $recordId)
                ->update(['visible' => $visible,'active'=>$active]);
              
        
               
              }
          
           
          
            return redirect('dashboard')->with('status', 'Updated Successfully');
           
           
           
            

           

        }
      
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $widgetsettingData = Newsite::with('widgetsetting')->get();
        return response()->json(array('data'=> $widgetsettingData), 200);
    }

    /**
     * Display a listing of the resource.
     */
    public function show($id)
    {
        $widgetsettingData = Newsite::with('widgetsetting')->find($id);
        return response()->json(array('data'=> $widgetsettingData), 200);
        // return view('widgetsetting', compact('widgetsettingData'));
    }
    
}
