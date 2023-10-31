<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public static $banner, $image, $imageUrl, $imageName, $directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'banner-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newBanner($request)
    {
        self::$banner = new Banner();
        self::$banner->name = $request->name;
        self::$banner->email = $request->email;
        self::$banner->mobile = $request->mobile;
        self::$banner->address = $request->address;
        self::$banner->profession_type_one = $request->profession_type_one;
        self::$banner->profession_type_two = $request->profession_type_two;
        self::$banner->profession_type_three = $request->profession_type_three;
        self::$banner->description = $request->description;
        self::$banner->image = self::getImageUrl($request);
        self::$banner->save();
    }

    public static function updateBanner($request, $id)
    {
        self::$banner = Banner::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$banner->image))
            {
                unlink(self::$banner->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$banner->image;
        }
        self::$banner->name = $request->name;
        self::$banner->email = $request->email;
        self::$banner->mobile = $request->mobile;
        self::$banner->address = $request->address;
        self::$banner->profession_type_one = $request->profession_type_one;
        self::$banner->profession_type_two = $request->profession_type_two;
        self::$banner->profession_type_three = $request->profession_type_three;
        self::$banner->description = $request->description;
        self::$banner->image = self::$imageUrl;
        self::$banner->save();
    }

    public static function deleteBanner($id)
    {
        self::$banner = Banner::find($id);
        if (file_exists(self::$banner->image))
        {
            unlink(self::$banner->image);
        }
        self::$banner->delete();
    }
}
