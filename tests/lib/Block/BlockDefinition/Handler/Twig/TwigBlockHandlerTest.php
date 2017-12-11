<?php

namespace Netgen\BlockManager\Standard\Tests\Block\BlockDefinition\Handler\Twig;

use Netgen\BlockManager\Core\Values\Block\Block;
use Netgen\BlockManager\Parameters\ParameterValue;
use Netgen\BlockManager\Standard\Block\BlockDefinition\Handler\Twig\TwigBlockHandler;
use PHPUnit\Framework\TestCase;

class TwigBlockHandlerTest extends TestCase
{
    /**
     * @var \Netgen\BlockManager\Standard\Block\BlockDefinition\Handler\Twig\TwigBlockHandler
     */
    private $handler;

    public function setUp()
    {
        $this->handler = new TwigBlockHandler();
    }

    /**
     * @covers \Netgen\BlockManager\Standard\Block\BlockDefinition\Handler\Twig\TwigBlockHandler::isContextual
     */
    public function testIsContextual()
    {
        $this->assertTrue($this->handler->isContextual(new Block()));
    }

    /**
     * @covers \Netgen\BlockManager\Standard\Block\BlockDefinition\Handler\Twig\TwigBlockHandler::getTwigBlockName
     */
    public function testGetTwigBlockName()
    {
        $block = new Block(
            array(
                'availableLocales' => array('en'),
                'locale' => 'en',
                'parameters' => array(
                    'block_name' => new ParameterValue(
                        array(
                            'value' => 'twig_block',
                        )
                    ),
                ),
            )
        );

        $this->assertEquals('twig_block', $this->handler->getTwigBlockName($block));
    }
}
