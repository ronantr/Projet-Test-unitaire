<?php
namespace tests\AppBundle\Entity;

use App\Entity\Item as EntityItem;
use PHPUnit\Framework\TestCase;
use Faker\Factory;

class ItemTest extends TestCase
{

    private EntityItem $item;

    protected function setUp(): void
    {
        $this->item = new EntityItem(); // Create Item object.
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
        // $faker = Factory::create();
        $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacinia sem tellus. Donec in elementum nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam fringilla convallis dolor, sed fermentum metus volutpat quis. Vivamus a enim et nibh pulvinar egestas. Morbi vestibulum, elit a tincidunt vehicula, enim lorem rhoncus elit, vitae dapibus mauris risus ac ligula. Quisque vel nunc euismod, malesuada est a, gravida ligula. Praesent urna mi, auctor id hendrerit non, placerat eu odio. Etiam sit amet finibus magna. Vestibulum lacinia tempus suscipit. Nulla facilisi. Proin turpis nibh, condimentum nec interdum eu, porta sit amet dui. In iaculis suscipit nisi eget fringilla. Ut et ligula placerat, aliquam mi quis, finibus sapien. Vivamus pretium sollicitudin est, a tincidunt sem vestibulum eget.
        Maecenas lobortis dolor quis erat gravida luctus. Integer elementum ante sed rutrum malesuada. Aliquam ac turpis dapibus, imperdiet massa sagittis erat curae.";
        $this->item->setContent($text);
        $this->assertFalse($this->item->isValid());
    }
}
