<?php

namespace App\Entity;

use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birthday;

    /**
     * @ORM\Column(type="datetime")
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity=TodoList::class, mappedBy="userId", cascade={"persist", "remove"})
     */
    private $todoList;

    public function isValid(): bool
    {
        return !empty($this->email)
            && filter_var($this->email, FILTER_VALIDATE_EMAIL)
            && !empty($this->firstname)
            && !empty($this->lastname)
            && !is_null($this->birthday)
            && !empty($this->password)
            && (strlen($this->password) >= 8 && strlen($this->password) <= 40)
            && $this->getAge($this->birthday) > 13;
    }
    function getAge($date)
    {
        $dob = new DateTime($date);

        $now = new DateTime();

        $difference = $now->diff($dob);

        $age = $difference->y;

        return  $age;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getBirthday(): self
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getTodoList(): ?TodoList
    {
        return $this->todoList;
    }

    public function setTodoList(TodoList $todoList): self
    {
        // set the owning side of the relation if necessary
        if ($todoList->getUserId() !== $this) {
            $todoList->setUserId($this);
        }

        $this->todoList = $todoList;

        return $this;
    }
}
