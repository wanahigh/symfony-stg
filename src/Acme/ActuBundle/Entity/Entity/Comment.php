<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 03/01/18
 * Time: 14:47
 */

namespace Acme\ActuBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Acme\ActuBundle\Repository\AdvertRepository")
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks()
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $user;

    /**
     * @ORM\Column(type="text")
     */
    protected $comment;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $approved;

    /**
     * @ORM\ManyToOne(targetEntity="Advert", inversedBy="comments")
     * @ORM\JoinColumn(name="Advert_id", referencedColumnName="id")
     */
    protected $blog;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

//    public function __construct()
//    {
//        $this->setCreated(new \DateTime());
//        $this->setUpdated(new \DateTime());
//
//        $this->setApproved(true);
//    }
//
//    /**
//     * @ORM\preUpdate
//     */
//    public function setUpdatedValue()
//    {
//        $this->setUpdated(new \DateTime());
//    }
}