<?php

namespace App;

class Channel extends Model
{
    /**
     * Sets up relationship:
     * a Channel belongs to a User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
