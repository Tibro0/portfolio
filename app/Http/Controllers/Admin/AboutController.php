<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about-section.index', compact('about'));
    }

    public function aboutUpdate(Request $request)
    {
        $request->validate([
            'signature' => ['nullable', 'image', 'mimes:png'],
            'signature_description' => ['required', 'max:255'],
            'description' => ['required'],
        ]);
        if ($request->file('signature')) {
            $image = $request->file('signature');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(300, 73);
            $img->toPng()->save(base_path('public/uploads/signature/' . $name_gen));
            $save_url = 'uploads/signature/' . $name_gen;

            About::updateOrCreate(
                ['id' => 1],
                [
                    'signature' => $save_url,
                    'signature_description' => $request->signature_description,
                    'description' => $request->description,
                ]
            );

            return redirect()->back()->with('toast', [
                'type' => 'success',
                'message' => 'Updated Successfully!'
            ]);
        } else {
            About::updateOrCreate(
                ['id' => 1],
                [
                    'signature_description' => $request->signature_description,
                    'description' => $request->description,
                ]
            );

            return redirect()->back()->with('toast', [
                'type' => 'success',
                'message' => 'Updated Successfully!'
            ]);
        }
    }
}
