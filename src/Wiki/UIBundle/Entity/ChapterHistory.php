<?php

namespace Wiki\UIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChapterHistory
 *
 * @ORM\Table(name="chapter_history")
 * @ORM\Entity
 */
class ChapterHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="chapter_history_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $chapterHistoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="chapter_id", type="integer", nullable=false)
     */
    private $chapterId;

    /**
     * @var integer
     *
     * @ORM\Column(name="editor", type="integer", nullable=false)
     */
    private $editor;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="article_id", type="integer", nullable=false)
     */
    private $articleId;



    /**
     * Get chapterHistoryId
     *
     * @return integer 
     */
    public function getChapterHistoryId()
    {
        return $this->chapterHistoryId;
    }

    /**
     * Set chapterId
     *
     * @param integer $chapterId
     * @return ChapterHistory
     */
    public function setChapterId($chapterId)
    {
        $this->chapterId = $chapterId;
    
        return $this;
    }

    /**
     * Get chapterId
     *
     * @return integer 
     */
    public function getChapterId()
    {
        return $this->chapterId;
    }

    /**
     * Set editor
     *
     * @param integer $editor
     * @return ChapterHistory
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    
        return $this;
    }

    /**
     * Get editor
     *
     * @return integer 
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return ChapterHistory
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ChapterHistory
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return ChapterHistory
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ChapterHistory
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set articleId
     *
     * @param integer $articleId
     * @return ChapterHistory
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
    
        return $this;
    }

    /**
     * Get articleId
     *
     * @return integer 
     */
    public function getArticleId()
    {
        return $this->articleId;
    }
}