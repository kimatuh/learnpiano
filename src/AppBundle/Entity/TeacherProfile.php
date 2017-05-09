<?php
/**
 * Created by PhpStorm.
 * User: Yohana
 * Date: 5/5/2017
 * Time: 12:58 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as assert;



/**
 * @ORM\Entity(repositoryClass="TeacherProfileRepository")
 * @ORM\Table(name="teacher_profile")
 *
 */
class TeacherProfile
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;



    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;



    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $about;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $profile_photo;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InstrumentType")
     */
    private $instrumentType;

    /**
     * @return mixed
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param mixed $about
     */
    public function setAbout($about)
    {
        $this->about = $about;
    }

    /**
     * @return mixed
     */
    public function getProfilePhoto()
    {
        return $this->profile_photo;
    }

    /**
     * @param mixed $profile_photo
     */
    public function setProfilePhoto($profile_photo)
    {
        $this->profile_photo = $profile_photo;
    }


    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * @param mixed $instrumentType
     */
    public function setInstrumentType(InstrumentType $instrumentType)
    {
        $this->instrumentType = $instrumentType;
    }

}