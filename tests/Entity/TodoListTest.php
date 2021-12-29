<?php
// tests/AppBundle/Entity/TodoListTest.php
namespace tests\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
// use App\Entity\User as EntityUser;
// use AppBundle\Entity\User;

use App\Entity\User;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Carbon\Carbon;

class TodoListTest extends KernelTestCase
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    // private EntityUser $user;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();

        parent::setUp();
    }

    public function testUserCanCreateTodoList()
    {
        // User 3 dont have any todlist
        $user = $this->entityManager
            ->getRepository(User::class)
            ->find(3);


        if ($user->getTodoList() === null) $countTodolist = 0;
        else $countTodolist = $user->getTodoList()->count();

        $this->assertLessThan(1, $countTodolist);
    }

    public function testUserCannotCreateTodoList()
    {
        //user:1 has 8 item in his todolist
        $user = $this->entityManager
            ->getRepository(User::class)
            ->find(1);

        $countTodolist = $user->getTodoList()->count();

        $this->assertGreaterThan(0, $countTodolist);
    }

    public function testTooManyItems()
    {
        $user = $this->entityManager
            ->getRepository(User::class)
            ->find(1);

        $items = $user->getTodoList()->getItem();
        $this->assertGreaterThan(9, $items->count());
    }
    public function testCanCreateItem()
    {
        $user = $this->entityManager
            ->getRepository(User::class)
            ->find(2);
        $items = $user->getTodoList()->getItem();
        $lastCreatedAt = $items[$items->count() - 1]->getCreatedAt();
        $now = Carbon::now();
        $timeGap = $now->diffInMinutes($lastCreatedAt);


        $this->assertGreaterThan(29, $timeGap);
    }
    // public function testCannotCreateItem()
    // {
    //     // $id = 2;
    //     // $user = $this->getDoctrine()->getRepository(User::class)->findby($id);
    //     // $countTodolist = count($this->todolist);

    //     $this->assertLessThan(30, $minutes);
    // }

    public function testShouldSendMail()
    {
        // $id = 2;
        // $user = $this->getDoctrine()->getRepository(User::class)->findby($id);
        // $countTodolist = count($this->todolist);

        $this->assertEquals(29, $countItem);
    }
}
