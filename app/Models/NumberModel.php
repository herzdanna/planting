<?php

namespace App\Models;

use CodeIgniter\Model;

class NumberModel extends Model
{
    protected $table            = 'numberswhats';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ["id", "page", "title_es", "description_es", "title_en", "description_en",
        "created_at", "updated_at", "deleted_at", "created_by", "updated_by", "deleted_by",
    ];
    protected $returnType = "array";

    // Dates
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


}
