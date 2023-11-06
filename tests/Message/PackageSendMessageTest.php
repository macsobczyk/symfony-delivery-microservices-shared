<?php

declare(strict_types=1);

namespace Sentica\SymfonyDeliveryMicroservicesShared\Test\Message;

use PHPUnit\Framework\TestCase;
use Sentica\SymfonyDeliveryMicroservicesShared\Dto\PackageUpdateInput;
use Sentica\SymfonyDeliveryMicroservicesShared\Message\PackageSendMessage;

class PackageSendMessageTest extends TestCase
{
    public function testGetRequestInput(): void
    {
        $requestInput = new PackageUpdateInput();
        $message = new PackageSendMessage($requestInput);
        $this->assertSame($requestInput, $message->requestInput);
    }
}
