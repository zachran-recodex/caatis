<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $table = 'documents';

    public $fillable = [
        'name',
        'description',
        'status',
        'created_by',
        'custom_fields',
        'verified_at',
        'verified_by'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'status' => 'string',
        'created_by' => 'integer',
        'verified_by' => 'integer',
        'custom_fields' => 'array'
    ];

    public static $rules = [
        'name' => 'required',
        'description' => 'nullable',
        'tags' => 'required',
        'custom_fields' => 'nullable'
    ];

    public function createdBy()
    {
        return $this->belongsTo(\App\User::class, 'created_by', 'id');
    }

    public function verifiedBy()
    {
        return $this->belongsTo(\App\User::class, 'verified_by', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'documents_tags','document_id','tag_id');
    }

    public function getIsVerifiedAttribute()
    {
        return !empty($this->verified_by) && !empty($this->verified_at) && $this->status==config('constants.STATUS.APPROVED');
    }

    public function files()
    {
        return $this->hasMany(File::class,'document_id', 'id');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class,'document_id', 'id')
            ->orderByDesc('id');
    }

    public function newActivity($activity_text,$include_document=true){
        if($include_document){
            $activity_text .= " : ".'<a href="'.route('documents.show',$this->id).'">'.$this->name."</a>";
        }
        Activity::create([
            'activity' => $activity_text,
            'created_by' => \Auth::id(),
            'document_id' => $this->id,
        ]);
    }
}
