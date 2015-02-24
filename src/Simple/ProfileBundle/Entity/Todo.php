<?php

namespace Simple\ProfileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="todos")
 * @ORM\Entity(repositoryClass="Simple\ProfileBundle\Entity\TodoRepository")
 */
class Todo implements  \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=155)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", length=40)
     */
    private $date_todo;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="todos")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;



    public function __construct()
    {

    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @inheritDoc
     */
    public function getDateTodo()
    {
        return $this->date_todo;
    }

   /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Todo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set salt
     *
     * @param string $description
     * @return Todo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Set date_todo
     *
     * @param string $date_todo
     * @return Todo
     */
    public function setDateTodo($date_todo)
    {
        $this->date_todo = $date_todo;

        return $this;
    }

    /**
     * Set user
     *
     * @param User $user
     * @return Todo
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }





}
