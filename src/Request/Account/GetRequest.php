<?php

declare(strict_types=1);

namespace SamuelMwangiW\Linode\Request\Account;

use SamuelMwangiW\Linode\Request\LinodeRequest;

class GetRequest extends LinodeRequest
{
    protected string $path = 'account';
}
