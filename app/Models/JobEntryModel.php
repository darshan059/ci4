<?php

namespace App\Models;

use CodeIgniter\Model;

class JobEntryModel extends Model
{
    protected $table = 'jobentries';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'job_no',
        'design_no',
        'fabric',
        'pcs',
        'top',
        'sleeve',
        'colors',
        'panna',
        'consumption',
        'bottom',
        'dupatta',
        'less',
        'date',
        'pass_status',
        'total_mtr',
        'pn_km',
        'set_copy',
        'allover',
        'lot',
        'roll',
        'print',
        'wastage',
        'images'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
