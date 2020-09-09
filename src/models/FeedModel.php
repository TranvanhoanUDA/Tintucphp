<?php

namespace spark\models;

/**
* FeedModel
*
*/
class FeedModel extends Model
{
    protected static $table = 'feeds';

    protected $queryKey = 'feed_id';

    protected $autoTimestamp = true;

    protected $sortRules = [
        'newest'                  => ['created_at' => 'DESC'],
        'oldest'                  => ['created_at' => 'ASC'],
        'recently-refreshed'      => ['feed_last_refreshed' => 'DESC'],
        'less-recently-refreshed' => ['feed_last_refreshed' => 'ASC'],
        'highest-priority'        => ['feed_priority'  => 'ASC'],
        'lowest-priority'         => ['feed_priority'  => 'DESC'],
    ];
}
