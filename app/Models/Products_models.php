<?php
namespace App\Models;

use CodeIgniter\Model;

    class Products_models extends Model{
        protected $table = 'tblproducts';

        protected $primaryKey = 'productid';
        protected $useAutoIncrement = true;

        protected $returnType = 'array';

        protected $allowedFields = [
            'productid',
            'productimage',
            'productname',
            'productdescription',
            'price',
            'datecreated'
        ];

        protected bool $allowEmptyInserts = false;
    }

?>