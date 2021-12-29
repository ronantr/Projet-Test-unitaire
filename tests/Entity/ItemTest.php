<?php

namespace tests\AppBundle\Entity;

use App\Entity\Item as EntityItem;
use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

class ItemTest extends TestCase
{

    private EntityItem $item;

    protected function setUp(): void
    {
        $item = new EntityItem(); // Create Item object.

        $this->item->setName("eat");
        $this->item->setContent("I'm hungry");
        parent::setUp();
    }

    public function testValidItem()
    {
        $this->assertTrue($this->item->isValid());
    }

    public function testEmptyName()
    {
        $this->item->setName("");

        $this->assertFalse($this->item->isValid());
    }

    public function testSameName()
    {
        $this->item->setName("eat");
        $this->assertFalse($this->item->isValid());
    }


    public function testEmptyContent()
    {
        $this->item->setContent("");
        $this->assertFalse($this->item->isValid());
    }

    public function testTooLongContent()
    {
        $faker = \Faker\Factory::create();
        $this->item->setContent($item->setContent($faker->realText($maxNbChars = 1010, $indexSize = 2)));
        $this->assertFalse($this->item->isValid());
    }
}
