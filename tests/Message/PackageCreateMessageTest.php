<?php

declare(strict_types=1);

namespace Sentica\SymfonyDeliveryMicroservicesShared\Test\Message;

use PHPUnit\Framework\TestCase;
use Sentica\SymfonyDeliveryMicroservicesShared\Dto\PackageCreateInput;
use Sentica\SymfonyDeliveryMicroservicesShared\Message\PackageCreateMessage;

class PackageCreateMessageTest extends TestCase
{
    public function testGetRequestInput(): void
    {
        $requestInput = new PackageCreateInput();
        $message = new PackageCreateMessage($requestInput);
        $this->assertSame($requestInput, $message->requestInput);
    }
}
