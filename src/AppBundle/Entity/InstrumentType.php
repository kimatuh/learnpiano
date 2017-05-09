<?php
/**
 * Created by PhpStorm.
 * User: Yohana
 * Date: 5/5/2017
 * Time: 3:34 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="instrument_type")
 */
class InstrumentType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $instrumentName;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $skill_level;

    /**
     * @return mixed
     */
    public function getInstrumentName()
    {
        return $this->instrumentName;
    }

    /**
     * @param mixed $instrument
     */
    public function setInstrumentName($instrumentName)
    {
        $this->instrumentName = $instrumentName;
    }

    /**
     * @return mixed
     */
    public function getSkillLevel()
    {
        return $this->skill_level;
    }

    /**
     * @param mixed $skill_level
     */
    public function setSkillLevel($skill_level)
    {
        $this->skill_level = $skill_level;
    }

}