<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class Resource extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = [
        'images',
        'available_quantity',
        'can_be_modified'
    ];

    public function center(){
        return $this->belongsTo(Center::class);
    }

    public function getProductNameAttribute(){
        return ucfirst($this->attributes['product_name']);
    }

    public function getAvailableQuantityAttribute(){
        return $this->resources_quantity - $this->given_quantity;
    }

    public function getImagesAttribute(){
        return $this->images();
    }

    public function getCanBeModifiedAttribute(){
        if(!Auth::check()){
            return false;
        }

        if(Auth::user()->center_id == $this->center_id){
            return true;
        }
        else{
            return false;
        }
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
