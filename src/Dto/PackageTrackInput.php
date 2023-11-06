<?php

namespace Sentica\SymfonyDeliveryMicroservicesShared\Dto;

use Symfony\Component\Validator\Constraints as Assert;

final class PackageTrackInput
{
    #[Assert\NotBlank]
    public ?string $trackingNumber = null;

}
