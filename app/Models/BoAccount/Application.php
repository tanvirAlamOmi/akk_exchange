<?php

namespace App\Models\BoAccount;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BoAccount\Applicant;
use App\Models\BoAccount\BankInfo;

class Application extends Model
{
    use HasFactory;

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

    public function first_applicant()
    {
        return $this->hasOne(Applicant::class)->where('is_joint', false);
    }

    public function joint_applicant()
    {
        return $this->hasOne(Applicant::class)->where('is_joint', true);
    }

    public function bank_info()
    {
        return $this->hasOne(BankInfo::class);
    }

    public function nominees()
    {
        return $this->hasMany(Nominee::class)->orderBy('id', 'asc') ;
    }
  
    public function first_nominee()
    {
        return $this->hasOne(Nominee::class)->orderBy('id', 'asc')->limit(1) ;
    }
    
    public function second_nominee()
    {
        return $this->hasOne(Nominee::class)->orderBy('id', 'asc')->skip(1)->limit(1);
    }
}
