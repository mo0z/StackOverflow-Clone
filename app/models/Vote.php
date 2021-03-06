<?php

class Vote extends Eloquent {

    protected $table = 'votes';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    
    public function post()
    {
        return $this->belongsTo('Post');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
    
    public function voteType()
    {
        return $this->hasOne('VoteType');
    }
}