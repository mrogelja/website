<?php
/**
 * Created by IntelliJ IDEA.
 * User: hypermedia
 * Date: 04/03/14
 * Time: 14:43
 * To change this template use File | Settings | File Templates.
 */

namespace Mr\SiteBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Upload
{
    /** @MongoDB\Id */
    private $id;

    /** @MongoDB\File */
    private $file;

    /** @MongoDB\String */
    private $filename;

    /** @MongoDB\String */
    private $mimeType;

    /** @MongoDB\Date */
    private $uploadDate;

    /** @MongoDB\Int */
    private $length;

    /** @MongoDB\Int */
    private $chunkSize;

    /** @MongoDB\String */
    private $md5;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    public function getMimeType()
    {
        return $this->mimeType;
    }

    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }

    public function getChunkSize()
    {
        return $this->chunkSize;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getMd5()
    {
        return $this->md5;
    }

    public function getUploadDate()
    {
        return $this->uploadDate;
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
     * Set uploadDate
     *
     * @param date $uploadDate
     * @return self
     */
    public function setUploadDate($uploadDate)
    {
        $this->uploadDate = $uploadDate;
        return $this;
    }

    /**
     * Set length
     *
     * @param int $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Set chunkSize
     *
     * @param int $chunkSize
     * @return self
     */
    public function setChunkSize($chunkSize)
    {
        $this->chunkSize = $chunkSize;
        return $this;
    }

    /**
     * Set md5
     *
     * @param string $md5
     * @return self
     */
    public function setMd5($md5)
    {
        $this->md5 = $md5;
        return $this;
    }
}
