<?php

namespace App\Models\DataContent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    protected $fillable = ['status'];

     /**
     * Set the status to active.
     *
     * @return void
     */
    public function setActive()
    {
        $this->update(['status' => True]);
    }

     /**
     * Set the status to active.
     *
     * @return void
     */
    public function setInactive()
    {
        $this->update(['status' => False]);
    }
}
