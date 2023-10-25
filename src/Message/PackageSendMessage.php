<?php

declare(strict_types=1);

namespace App\Message;

use Sentica\SymfonyDeliveryMicroservicesShared\Dto\PackageUpdateInput;

class PackageSendMessage
{
    public function __construct(
        public readonly PackageUpdateInput $requestInput,
    ){}
}