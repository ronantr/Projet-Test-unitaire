<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemRepository::class)
 */
class Item
{
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", length=65535)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity=TodoList::class, inversedBy="item")
     * @ORM\JoinColumn(nullable=false)
     */
    private $todoList;

    /**
 * @Gedmo\Timestampable(on="create")
 * @ORM\Column(type="datetime")
 */
private $createdAt;


    public function validList(): bool
    {
        return !empty($this->name)
            && !empty($this->content)
            && !strlen($this->content) <=1000
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTodoList(): ?TodoList
    {
        return $this->todoList;
    }

    public function setTodoList(?TodoList $todoList): self
    {
        $this->todoList = $todoList;

        return $this;
    }

    /**
 * @return \DateTime
 */
public function getCreatedAt()
{
    return $this->createdAt;
}

/**
 * @return \DateTime
 */
public function getUpdatedAt()
{
    return $this->updatedAt;
}
}
