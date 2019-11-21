<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class FileContent extends Model {
    public $timestamps = false;
    protected $table = 'filecontent';
    protected $fillable = ['id', 'content', 'filesize', 'filename', 'mimetype'];

    static function initFromFile(UploadedFile $file) : FileContent {
        $mymeType = $file->getMimeType();
        $size = $file->getSize();
        $name = $file->getClientOriginalName();
        $path = $file->getRealPath();
        $content = /*base64_encode(*/file_get_contents($path)/*)*/;
        $id = self::max('id')+1;
        return new self([
            'id' => $id, 'content' => $content,'filesize' => $size, 'filename' => $name, 'mimetype' => $mymeType
        ]);
    }
}
