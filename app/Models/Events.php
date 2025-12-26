<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $table = 'events';

    public function event_category()
    {
        return $this->hasOne(EventCategories::class, 'id', 'event_category_id');
    }

    public function images()
    {
        return $this->hasMany(EventImages::class, 'event_id', 'id');
    }

    public function primary_image()
    {
        return $this->hasOne(EventImages::class, 'event_id', 'id');
    }

    public function status(){

        $status = 'Inactive';
        $statusClass = 'bg-warning';

        if ($this->status == 1){
            $status = 'Active';
            $statusClass = 'bg-success';
        }

        return (Object)[
            'text' => $status,
            'class' => $statusClass,
        ];
    }
}
