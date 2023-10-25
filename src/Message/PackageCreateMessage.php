<?php

declare(strict_types=1);

namespace App\Message;

use Sentica\SymfonyDeliveryMicroservicesShared\Dto\PackageCreateInput;

class PackageCreateMessage
{
    public function __construct(
        public readonly PackageCreateInput $requestInput,
    ){}
}