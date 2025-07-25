<?php

namespace App\Http\Controllers;

use App\Models\RoomImage;
//use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomImageController extends Controller
{
    public function destroy($id)
    {

        $image = RoomImage::findOrFail($id);
        if(!$image)
        {
            return response()->json(['message' => 'Room Image not found'], 404);
        }
        Storage::disk('public')->delete($image->image_path);

        $image->delete();

        return response()->json(['message' => 'Room Image deleted successfully'], 200);

    }
}
