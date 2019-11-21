<?php

namespace App\Models\General;

use App\Models\Agency\RapDocumentInstance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class DocumentInstance extends Model {
    public $timestamps = false;
    protected $table = 'documentinstance';

    static function insertDocuments(int $recruitmentAgencyPrototypeId, array $docs, array $docTypeIds) {

        DB::transaction(function () use ($docs, $docTypeIds, $recruitmentAgencyPrototypeId) {

            $documentInstances = [];
            $recruitmentAgencyDocumentInstances = [];
            $docId = self::max('id')+1;

            /* @var  UploadedFile $file */
            foreach ($docs as $i => $file) {
                if (!isset($file))
                    continue;

                // TODO determine what are those DocumentInstance columns left as (dtype, description, dmsdocumentdecimal...)
                $documentInst = [];
                $raDocumentInst = ['recruitmentagencyprototype_id'=>$recruitmentAgencyPrototypeId, 'documents_id' => $docId];
                $fl = FileContent::initFromFile($file);
                $documentInst['filecontent_id'] = $fl->getAttribute('id');
                $documentInst['type_id'] = intval($docTypeIds[$i]);
                $documentInst['id'] = $docId;
                array_push($documentInstances, $documentInst);
                array_push($recruitmentAgencyDocumentInstances, $raDocumentInst);
                $docId++;
                $fl->save();
            }

            self::insert($documentInstances);
            RapDocumentInstance::insert($recruitmentAgencyDocumentInstances);
        });
    }
}
