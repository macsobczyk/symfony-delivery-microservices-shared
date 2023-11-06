<?php

declare(strict_types=1);

namespace Sentica\SymfonyDeliveryMicroservicesShared\Message;

use Sentica\SymfonyDeliveryMicroservicesShared\Dto\PackageTrackInput;

class PackageSendMessage
{
    public function __construct(
        public readonly PackageTrackInput $requestInput,
    ){}
}