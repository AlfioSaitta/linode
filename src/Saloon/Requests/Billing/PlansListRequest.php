<?php

declare(strict_types=1);

namespace SamuelMwangiW\Linode\Saloon\Requests\Billing;

use SamuelMwangiW\Linode\Saloon\Requests\BaseRequest;

class PlansListRequest extends BaseRequest
{
    public function defineEndpoint(): string
    {
        return 'linode/types';
    }
}
