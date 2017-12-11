<?php

namespace Netgen\BlockManager\Standard\Tests\Block\BlockDefinition\Integration\Doctrine;

use Netgen\BlockManager\Standard\Tests\Block\BlockDefinition\Integration\ButtonTest as BaseButtonTest;
use Netgen\BlockManager\Tests\Persistence\Doctrine\TestCaseTrait;

/**
 * @covers \Netgen\BlockManager\Standard\Block\BlockDefinition\Handler\ButtonHandler::__construct
 * @covers \Netgen\BlockManager\Standard\Block\BlockDefinition\Handler\ButtonHandler::buildParameters
 */
class ButtonTest extends BaseButtonTest
{
    use TestCaseTrait;

    public function tearDown()
    {
        $this->closeDatabase();
    }

    /**
     * Prepares the persistence handler used in tests.
     */
    public function preparePersistence()
    {
        $this->persistenceHandler = $this->createPersistenceHandler();
    }
}
