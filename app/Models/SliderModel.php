<?php

namespace App\Models;

class SliderModel extends \CodeIgniter\Model
{

    protected $table = "sliders";
    protected $primaryKey = "id";
    protected $allowedFields = ["id", "routeImg", "link_es", "textBtn_es", "textBetn_en", "link_en",
        "created_at","updated_at",        "deleted_at",        "created_by",
        "updated_by",        "deleted_by"];
    protected $useSoftDeletes = true;
    protected $skipValidation = true;
    protected $updatedField = "updated_at";
    protected $createdField = "created_at";
    protected $deletedField = "deleted_at";


}