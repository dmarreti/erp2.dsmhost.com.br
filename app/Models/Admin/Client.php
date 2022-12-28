<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'company',
        'document',
        'document_secondary',
        'email',
        'address',
        'number',
        'neighborhood',
        'city',
        'zipcode',
        'state',
        'complement',
        'telephone',
        'cellphone',
        'payment_method',
        'status'
    ];

    public function user(){
        return $this->hasOne(User::class,'client_id','id');
    }

    public function setDocumentAttribute($value)
    {
        $this->attributes['document'] = $this->clearField($value);
    }

//    public function getDocumentAttribute($value)
//    {
//        return substr($value, 0,3).'.'.
//            substr($value, 3,3).'.'.
//            substr($value, 6,3).'-'.
//            substr($value, 9,2)
//            ;
//    }

    public function setDocumentSecondaryAttribute($value)
    {
        $this->attributes['document_secondary'] = $this->clearField($value);
    }

    public function setZipcodeAttribute($value)
    {
        $this->attributes['zipcode'] = $this->clearField($value);
    }

    public function setTelephoneAttribute($value)
    {
        $this->attributes['telephone'] = $this->clearField($value);
    }

    public function setCellphoneAttribute($value)
    {
        $this->attributes['cellphone'] = $this->clearField($value);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

//    public function setStatusAttribute($value)
//    {
//        $this->attributes['status'] = ($value == '1' ? 1 : 0);
//    }

    private function clearField(?string $param){
        if(empty($param)){
            return '';
        }

        return str_replace(['.','-','/','(',')',' '],'', $param);
    }
}
