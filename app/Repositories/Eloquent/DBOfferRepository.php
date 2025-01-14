<?php

namespace App\Repositories\Eloquent;

use App\Models\Offer;
use App\Repositories\OfferRepository;
use Illuminate\Support\Facades\DB;

class DBOfferRepository extends DBRepository implements OfferRepository
{
    public function __construct(Offer $model)
    {
        parent::__construct($model);
    }

    public function getAllUserOffer($user_id = 1, $column = ['*'], $perPage = '4', $currentPage = '0')
    {
        $offers = Offer::where('user_id', $user_id)->paginate($perPage, $column);
        return $offers;
    }
}
