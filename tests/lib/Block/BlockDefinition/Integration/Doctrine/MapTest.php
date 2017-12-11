<?php

namespace Netgen\BlockManager\Standard\Tests\Block\BlockDefinition\Integration\Doctrine;

use Netgen\BlockManager\Standard\Tests\Block\BlockDefinition\Integration\MapTest as BaseMapTest;
use Netgen\BlockManager\Tests\Persistence\Doctrine\TestCaseTrait;

/**
 * @covers \Netgen\BlockManager\Standard\Block\BlockDefinition\Handler\MapHandler::__construct
 * @covers \Netgen\BlockManager\Standard\Block\BlockDefinition\Handler\MapHandler::buildParameters
 */
class MapTest extends BaseMapTest
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
