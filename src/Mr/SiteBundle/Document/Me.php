<?php

namespace Mr\SiteBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="me")
 */
class Me
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $firstName;
    /**
     * @MongoDB\String
     */
    protected $lastName;
    /**
     * @MongoDB\Date
     */
    protected $dob;
    /**
     * @MongoDB\String
     */
    protected $email;
    /**
     * @MongoDB\String
     */
    protected $summary;
    /**
     * @MongoDB\String
     */
    protected $phone;
    /**
     * @MongoDB\EmbedOne(targetDocument="Mr\SiteBundle\Document\Address")
     */
    protected $address;
    /**
     * @MongoDB\EmbedMany(targetDocument="Mr\SiteBundle\Document\Skill")
     */
    protected $skills;
    /**
     * @MongoDB\EmbedMany(targetDocument="Mr\SiteBundle\Document\Education")
     */
    protected $educations;
    /**
     * @MongoDB\EmbedMany(targetDocument="Mr\SiteBundle\Document\Project")
     */
    protected $projects;
    /**
     * @MongoDB\EmbedMany(targetDocument="Mr\SiteBundle\Document\Hobby")
     */
    protected $hobbies;

    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
        $this->educations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hobbies = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set dob
     *
     * @param date $dob
     * @return self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
        return $this;
    }

    /**
     * Get dob
     *
     * @return date $dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return self
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Get summary
     *
     * @return string $summary
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param Mr\SiteBundle\Document\Address $address
     * @return self
     */
    public function setAddress(\Mr\SiteBundle\Document\Address $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return Mr\SiteBundle\Document\Address $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add skill
     *
     * @param Mr\SiteBundle\Document\Skill $skill
     */
    public function addSkill(\Mr\SiteBundle\Document\Skill $skill)
    {
        $this->skills[] = $skill;
    }

    /**
     * Remove skill
     *
     * @param Mr\SiteBundle\Document\Skill $skill
     */
    public function removeSkill(\Mr\SiteBundle\Document\Skill $skill)
    {
        $this->skills->removeElement($skill);
    }

    /**
     * Get skills
     *
     * @return Doctrine\Common\Collections\Collection $skills
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Add education
     *
     * @param Mr\SiteBundle\Document\Education $education
     */
    public function addEducation(\Mr\SiteBundle\Document\Education $education)
    {
        $this->educations[] = $education;
    }

    /**
     * Remove education
     *
     * @param Mr\SiteBundle\Document\Education $education
     */
    public function removeEducation(\Mr\SiteBundle\Document\Education $education)
    {
        $this->educations->removeElement($education);
    }

    /**
     * Get educations
     *
     * @return Doctrine\Common\Collections\Collection $educations
     */
    public function getEducations()
    {
        return $this->educations;
    }

    /**
     * Add project
     *
     * @param Mr\SiteBundle\Document\Project $project
     */
    public function addProject(\Mr\SiteBundle\Document\Project $project)
    {
        $this->projects[] = $project;
    }

    /**
     * Remove project
     *
     * @param Mr\SiteBundle\Document\Project $project
     */
    public function removeProject(\Mr\SiteBundle\Document\Project $project)
    {
        $this->projects->removeElement($project);
    }

    /**
     * Get projects
     *
     * @return Doctrine\Common\Collections\Collection $projects
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Add hobby
     *
     * @param Mr\SiteBundle\Document\Hobby $hobby
     */
    public function addHobby(\Mr\SiteBundle\Document\Hobby $hobby)
    {
        $this->hobbies[] = $hobby;
    }

    /**
     * Remove hobby
     *
     * @param Mr\SiteBundle\Document\Hobby $hobby
     */
    public function removeHobby(\Mr\SiteBundle\Document\Hobby $hobby)
    {
        $this->hobbies->removeElement($hobby);
    }

    /**
     * Get hobbies
     *
     * @return Doctrine\Common\Collections\Collection $hobbies
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }
}
