<?php

namespace App\Policies;

use App\Entities\Manager;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ManagerPolicy
{
    use HandlesAuthorization;

    /**
     * @param Manager $manager
     * @return Response
     * @throws \App\Exceptions\StripeApiException
     */
    public function startWorking(Manager $manager)
    {
        // TODO policyの内容を記述する
        return Response::allow();
    }
}
