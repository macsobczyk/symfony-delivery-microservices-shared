<?php

declare(strict_types=1);

namespace Sentica\SymfonyDeliveryMicroservicesShared\Message;

use Sentica\SymfonyDeliveryMicroservicesShared\Dto\PackageUpdateInput;

class PackageSendMessage
{
    public function __construct(
        public readonly PackageUpdateInput $requestInput,
    ){}
}