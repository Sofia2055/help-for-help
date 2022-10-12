<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Resource extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = [
        'images',
        'available_quantity'
    ];

    public function center(){
        return $this->belongsTo(Center::class);
    }

    public function getAvailableQuantityAttribute(){
        return $this->resources_quantity - $this->given_quantity;
    }

    public function getImagesAttribute(){
        return $this->images();
    }

    public function images(){
        $images = collect();

        for ($i=1; $i <= 6; $i++) {
            $file = 'resources-img/' . $this->id . '-' . $i . '.jpg';
            if(Storage::disk('public')->exists($file)){
                $images->push(url($file));
            }
        }

        if($images->count() < 1){
            $images->push(url('resources-img/placeholder.png'));
        }
        return $images;
    }
}
