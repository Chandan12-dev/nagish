<?php

namespace App\Http\Controllers;

use App\Models\Widgetsetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class WidgetsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $widgetsettingData = Widgetsetting::all();
        return response()->json(array('data'=> $widgetsettingData), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siteSettingData = new Widgetsetting;
        $siteSettingData->site_id = $request->input('site_id');
        $siteSettingData->data = $request->input('data');
        if($siteSettingData->save()){
            return response()->json(array('data'=> $siteSettingData), 200);
        }else{
            return response()->json(array('data'=> $siteSettingData), 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $siteSettingData = Widgetsetting::find($id);
        return response()->json(array('data'=> $siteSettingData), 200);
    }

    /**
     * Display the specified resource.
     */
    public function ShowBySiteId($id)
    {
        $siteSettingData = Widgetsetting::where('site_id',$id)->first();
        return response()->json(array('data'=> $siteSettingData), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Widgetsetting $widgetsetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->input('widgetsetting');
        // $htmlData = htmlentities($data['main']['accessibility_statement_content']);
        // $data['main']['accessibility_statement_content'] = $htmlData;

        if(isset($data['button']['show_sidebar_left'])){
            $data['button']['show_sidebar_left'] = true;
        }else{
            $data['button']['show_sidebar_left'] = false;
        }

        if(isset($data['button']['hide_on_mobile'])){
            $data['button']['hide_on_mobile'] = true;
        }else{
            $data['button']['hide_on_mobile'] = false;
        }

        if(isset($data['button']['desktop']['custom_logo_position'])){
            $data['button']['desktop']['custom_logo_position'] = true;
        }else{
            $data['button']['desktop']['custom_logo_position'] = false;
        }

        if(isset($data['button']['mobile']['custom_logo_position'])){
            $data['button']['mobile']['custom_logo_position'] = true;
        }else{
            $data['button']['mobile']['custom_logo_position'] = false;
        }

        if(isset($data['button']['button_icon']) && $data['button']['button_icon'] = 'button_icon_file'){
            if($data['button']['button_icon_file'] == ''){
                $data['button']['button_icon'] = asset('/assets/images/icon1.svg');
                $data['button']['button_icon_file'] = '';
            }
        }else{
            $data['button']['button_icon_file'] = '';
        }

        if(isset($data['layout']['enable_i18n_support'])){
            $data['layout']['enable_i18n_support'] = true;
        }else{
            $data['layout']['enable_i18n_support'] = false;
        }

        if(isset($data['contrast']['contrast_variations'])){
            $data['contrast']['contrast_variations'] = true;
        }else{
            $data['contrast']['contrast_variations'] = false;
        }

        if(isset($data['advancedsetting']['enable_web_speach_api'])){
            $data['advancedsetting']['enable_web_speach_api'] = true;
        }else{
            $data['advancedsetting']['enable_web_speach_api'] = false;
        }

        if(isset($data['advancedsetting']['enable_Report_problem'])){
            $data['advancedsetting']['enable_Report_problem'] = true;
        }else{
            $data['advancedsetting']['enable_Report_problem'] = false;
        }


        $siteSettingData = Widgetsetting::find($id);
        $siteSettingData->site_id = $request->input('site_id');
        $siteSettingData->data = $data;
        if($siteSettingData->update()){
            return response()->json(array('data'=> $siteSettingData), 200);
        }else{
            return response()->json(array('data'=> "Widget Settings Not updated. please try again."), 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
