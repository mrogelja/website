<?php
namespace Mr\SiteBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class Education
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    /**
     * @MongoDB\String
     */
    protected $name;
    /**
     * @MongoDB\String
     */
    protected $place;
    /**
     * @MongoDB\Date
     */
    protected $date;

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return self
     */
    public function setPlace($place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * Get place
     *
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set date
     *
     * @param date $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return date $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
}
