<?php

namespace App\Models;

class storyModel extends \CodeIgniter\Model
{

    protected $table = "stories";
    protected $primaryKey = "id";
    protected $allowedFields = ["id", "routeImg", "title_es", "description_es", "title_en", "description_en",
        "created_at","updated_at",        "deleted_at",        "created_by",
        "updated_by",        "deleted_by"];
    protected $useSoftDeletes = true;
    protected $skipValidation = true;
    protected $useTimestamps = true;
    protected $updatedField = "updated_at";
    protected $createdField = "created_at";
    protected $deletedField = "deleted_at";

}