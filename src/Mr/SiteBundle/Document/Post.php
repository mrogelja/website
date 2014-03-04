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
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @MongoDB\String
     */
    protected $summary;
    /**
     * @Gedmo\Timestampable(on="create")
     * @MongoDB\Date
     */
    protected $createdAt;
    /**
     * @Gedmo\Timestampable(on="update")
     * @MongoDB\Date
     */
    protected $lastModificationAt;
    /**
     * @MongoDB\String
     */
    protected $content;
    /**
     * @Gedmo\Slug(fields={"title"})
     * @MongoDB\String
     */
    protected $slug;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Mr\SiteBundle\Document\Address", simple=true)
     */
    protected $image;

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
     * Set slug
     *
     * @param string $slug
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set image
     *
     * @param file $image
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return file $image
     */
    public function getImage()
    {
        return $this->image;
    }
}
