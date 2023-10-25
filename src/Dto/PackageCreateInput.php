<?php

namespace Sentica\SymfonyDeliveryMicroservicesShared\Dto;

use Sentica\SymfonyDeliveryMicroservicesShared\Dto\ParcelCreateInput;
use Sentica\SymfonyDeliveryMicroservicesShared\Dto\ReceiverCreateInput;
use Symfony\Component\Validator\Constraints as Assert;

final class PackageCreateInput
{
    public ?int $id = null;

    public ?ReceiverCreateInput $sender = null;

    #[Assert\NotBlank]
    #[Assert\Valid]
    public ?ReceiverCreateInput $receiver = null;

    #[Assert\NotBlank]
    #[Assert\Valid]
    public ?ParcelCreateInput $parcel = null;

}
