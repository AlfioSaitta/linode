<?php

declare(strict_types=1);

namespace SamuelMwangiW\Linode\Domain;

use Illuminate\Support\Collection;
use SamuelMwangiW\Linode\DTO\PlanDTO;
use SamuelMwangiW\Linode\Factory\PlanFactory;
use SamuelMwangiW\Linode\Saloon\Requests\Billing\PlansListRequest;

class Billing
{
    /**
     * @return Collection<PlanDTO>
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     * @throws \Sammyjo20\Saloon\Exceptions\SaloonException
     * @throws \Sammyjo20\Saloon\Exceptions\SaloonRequestException
     */
    public function plans(): Collection
    {
        return PlansListRequest::make()
            ->send()
            ->throw()
            ->collect('data')
            ->map(fn (array $plan) => PlanFactory::make($plan));
    }
}
