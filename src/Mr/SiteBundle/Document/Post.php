<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mathieu
 * Date: 01/03/14
 * Time: 15:11
 * To change this template use File | Settings | File Templates.
 */

namespace Mr\SiteBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="posts")
 */
class Post
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $section;

    /**
     * @MongoDB\String
     */
    protected $title;
    /**
     * @MongoDB\Date
     */
    protected $createdAt;
    /**
     * @MongoDB\Date
     */
    protected $lastModificationAt;
    /**
     * @MongoDB\String
     */
    protected $content;

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
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set createdAt
     *
     * @param date $createdAt
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return date $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set lastModificationAt
     *
     * @param date $lastModificationAt
     * @return self
     */
    public function setLastModificationAt($lastModificationAt)
    {
        $this->lastModificationAt = $lastModificationAt;
        return $this;
    }

    /**
     * Get lastModificationAt
     *
     * @return date $lastModificationAt
     */
    public function getLastModificationAt()
    {
        return $this->lastModificationAt;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set section
     *
     * @param string $section
     * @return self
     */
    public function setSection($section)
    {
        $this->section = $section;
        return $this;
    }

    /**
     * Get section
     *
     * @return string $section
     */
    public function getSection()
    {
        return $this->section;
    }
}
