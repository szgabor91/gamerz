<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomModel extends Model
{
    protected $table      = 'platform';
    protected $primaryKey = 'platform_id';

    /*
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    */

    protected $allowedFields = ['platform_company', 'platform_name', 'platform_type'];


    protected $useTimestamps = true;
    protected $createdField  = 'post_created_at';
    /*
    protected $updatedField  = 'post_updated_at';
    
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    */

    /*
    protected $beforeInsert = ['checkName'];

    public function checkName(array $data)
    {

        $newTitle = $data['data']['post_title'] . 'Extra Features';
        $data['data']['post_title'] = $newTitle;

        return $data;
    }

    public static function getCurrentTime()
    {
        return date('YYYY-mm-dd HH:ii:ss');
    }
    */

    public function getAllPlatforms()
    {
        $query = $this->db->query("SELECT * FROM platforms");

        return $query->result();
    }
}
