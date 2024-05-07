<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'email', 'phone', 'bo_id', 'message', 'status', 'is_seen'];

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
