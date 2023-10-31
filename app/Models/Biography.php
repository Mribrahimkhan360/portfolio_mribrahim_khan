<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    use HasFactory;
    public static $biography, $image,$pdfUrl , $pdf, $pdfName , $imageUrl, $imageName, $directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'biography-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function getPdfUrl($request)
    {
        self::$pdf        = $request->file('pdf');
        self::$pdfName    = self::$pdf->getClientOriginalName();
        self::$directory    = 'biography-pdf/';
        self::$pdf->move(self::$directory, self::$pdfName);
        return self::$directory.self::$pdfName;
    }

    public static function newBiography($request)
    {
        self::$biography = new Biography();
        self::$biography->name = $request->name;
        self::$biography->subtitle = $request->subtitle;
        self::$biography->email = $request->email;
        self::$biography->mobile = $request->mobile;
        self::$biography->age = $request->age;
        self::$biography->born = $request->born;
        self::$biography->experience = $request->experience;
        self::$biography->project = $request->project;
        self::$biography->client = $request->client;
        self::$biography->description = $request->description;
        self::$biography->profession_type_one = $request->profession_type_one;
        self::$biography->profession_type_two = $request->profession_type_two;
        self::$biography->profession_type_three = $request->profession_type_three;
        self::$biography->image = self::getImageUrl($request);
        self::$biography->pdf = self::getPdfUrl($request);
        self::$biography->save();
    }

    public static function updateBiography($request, $id)
    {
        self::$biography = Biography::find($id);
        if ($request->file('pdf'))
        {
            if (file_exists(self::$biography->pdf))
            {
                unlink(self::$biography->pdf);
            }
            self::$pdfUrl = self::getPdfUrl($request);
        }
        else
        {
            self::$pdfUrl = self::$biography->pdf;
        }
        //pdf
        if ($request->file('image'))
        {
            if (file_exists(self::$biography->image))
            {
                unlink(self::$biography->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$biography->image;
        }

        self::$biography = new Biography();
        self::$biography->name = $request->name;
        self::$biography->subtitle = $request->subtitle;
        self::$biography->email = $request->email;
        self::$biography->mobile = $request->mobile;
        self::$biography->address = $request->address;
        self::$biography->age = $request->age;
        self::$biography->born = $request->born;
        self::$biography->experience = $request->experience;
        self::$biography->project = $request->project;
        self::$biography->client = $request->client;
        self::$biography->description = $request->description;
        self::$biography->image = self::getImageUrl($request);
        self::$biography->pdf = self::getPdfUrl($request);
        self::$biography->save();
    }

    public static function deleteBiography($id)
    {
        self::$biography = Biography::find($id);
        if (file_exists(self::$biography->image))
        {
            unlink(self::$biography->image);
        }
        self::$biography->delete();

        if (file_exists(self::$biography->pdf))
        {
            unlink(self::$biography->pdf);
        }
        self::$biography->delete();
    }
}
