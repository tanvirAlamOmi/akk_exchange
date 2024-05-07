<?php

namespace App\Models\WebContent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Settings\Section;
use App\Models\WebContent\ImageContent;
use App\Models\WebContent\FileContent;
use App\Models\WebContent\VideoContent;

class TextContent extends Model
{
    use HasFactory;

    protected $fillable = ['section_id','type','title','image','description','serial_no','status','created_by','updated_by'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function image_contents()
    {
        return $this->hasMany(ImageContent::class);
    }

    public function file_contents()
    {
        return $this->hasMany(FileContent::class);
    }

    public function video_contents()
    {
        return $this->hasMany(VideoContent::class);
    }
}
