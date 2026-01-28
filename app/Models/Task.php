<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'is_completed',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
    ];

    public function date()
    {
        if (!is_null($this->due_date)) {
            return \Carbon\Carbon::createFromFormat('Y-m-d', $this->due_date)->format('d/m/Y');
        }
        return $this->due_date;
    }
}
