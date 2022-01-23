<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfWork extends Model
{
    use HasFactory;

    protected $table = 'types_of_work';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function repairs()
    {
        return $this->hasOne(TypeOfRepair::class, 'id', 'type_of_repair_id');
    }
}
