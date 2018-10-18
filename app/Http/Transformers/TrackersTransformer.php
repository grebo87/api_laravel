<?php

namespace App\Http\Transformers;

use App\Trackers;
use League\Fractal\TransformerAbstract;

class TrackersTransformer extends TransformerAbstract
{
    public function transform(Trackers $trackers)
    {
        return $trackers->toArray();
    }
}