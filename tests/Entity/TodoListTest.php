<?php

namespace tests\AppBundle\Entity;

use App\Entity\User as EntityUser;
use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

class TodoListTest extends TestCase
{

    private EntityUser $user;

    protected function setUp(): void
    {
        $this->user = new EntityUser(); // Create User object.
        /// user 
        parent::setUp();
    }

    public function testUserCanCreateTodoList()
    {
        // $id = 1;
        // $user = $this->getDoctrine()->getRepository(User::class)->findby($id);
        // $countTodolist = count($this->todolist);

        $this->assertLessThan(1, $countTodolist);
    }

    public function testUserCannotCreateTodoList()
    {
        // $id = 2;
        // $user = $this->getDoctrine()->getRepository(User::class)->findby($id);
        // $countTodolist = count($this->todolist);

        $this->assertGreaterThan(0, $countTodolist);
    }

    public function testTooManyItems()
    {
        // $id = 2;
        // $user = $this->getDoctrine()->getRepository(User::class)->findby($id);
        // $countTodolist = count($this->todolist);

        $this->assertGreaterThan(10, $countItem);
    }
    public function testCanCreateItem()
    {
        // $id = 2;
        // $user = $this->getDoctrine()->getRepository(User::class)->findby($id);
        // $countTodolist = count($this->todolist);

        $this->assertLesserThan(31, $minutes);
    }
    public function testCannotCreateItem()
    {
        // $id = 2;
        // $user = $this->getDoctrine()->getRepository(User::class)->findby($id);
        // $countTodolist = count($this->todolist);

        $this->assertGreaterThan(29, $minutes);
    }

    public function testShouldSendMail()
    {
        // $id = 2;
        // $user = $this->getDoctrine()->getRepository(User::class)->findby($id);
        // $countTodolist = count($this->todolist);

        $this->assertEquals(29, $countItem);
    }
}
