<?php

namespace App\Http\Controllers\ContentManagement;

use App\Models\homebanner;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;
use App\Http\Controllers\Controller;

class HomeBannerController extends Controller
{
    public function index(){
        $banner = homebanner::first();
        $mainHeadings = [];
        
        if ($banner && $banner->main_heading) {
            $shortHeading = Purifier::clean($banner->short_heading);
            $mainHeadings = json_decode($banner->main_heading, true) ?? [];
            $paragraph = Purifier::clean($banner->paragraph);
            // Safely clean HTML
            $mainHeadings = array_map(function($line) {
                return Purifier::clean($line);
            }, $mainHeadings);
        }
        return view("admin.cms.homebanner.index", compact("banner", "mainHeadings", "shortHeading", "paragraph"));
    }

    public function update(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'short_heading' => 'required|string|max:100',
            'main_heading' => 'required|array',
            'main_heading.*' => 'string|max:100',
            'paragraph' => 'required|string|max:500'
        ]);

        // HTML Cleaning with Purifier
        $cleanData = [
            'short_heading' => Purifier::clean($request->short_heading),
            'main_heading' => json_encode(
                array_map(fn($line) => Purifier::clean($line), $request->main_heading)
            ),
            'paragraph' => Purifier::clean($request->paragraph)
        ];

        // Database Update
        homebanner::updateOrCreate(['id' => 1], $cleanData);

        return back()->with('success', 'Banner updated securely!');
    }
}
