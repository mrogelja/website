<?php
namespace Mr\SiteBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class Project
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
    protected $start;
    /**
     * @MongoDB\Date
     */
    protected $end;
    /**
     * @MongoDB\String
     */
    protected $job;
    /**
     * @MongoDB\String
     */
    protected $contract;
    /**
     * @MongoDB\String
     */
    protected $details;

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
     * Set start
     *
     * @param date $start
     * @return self
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Get start
     *
     * @return date $start
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param date $end
     * @return self
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Get end
     *
     * @return date $end
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set job
     *
     * @param string $job
     * @return self
     */
    public function setJob($job)
    {
        $this->job = $job;
        return $this;
    }

    /**
     * Get job
     *
     * @return string $job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set contract
     *
     * @param string $contract
     * @return self
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Get contract
     *
     * @return string $contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return self
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Get details
     *
     * @return string $details
     */
    public function getDetails()
    {
        return $this->details;
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
