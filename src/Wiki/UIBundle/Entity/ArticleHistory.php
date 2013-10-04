<?php

namespace Wiki\UIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleHistory
 *
 * @ORM\Table(name="article_history")
 * @ORM\Entity
 */
class ArticleHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="article_history_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $articleHistoryId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="log", type="text", nullable=false)
     */
    private $log;

    /**
     * @var \EditionStatus
     *
     * @ORM\ManyToOne(targetEntity="EditionStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status", referencedColumnName="edition_status_id")
     * })
     */
    private $status;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="article_id")
     * })
     */
    private $article;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="editor", referencedColumnName="user_id")
     * })
     */
    private $editor;

    /**
     * @var \Chapter
     *
     * @ORM\ManyToOne(targetEntity="Chapter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chapter_id", referencedColumnName="chapter_id")
     * })
     */
    private $chapter;



    /**
     * Get articleHistoryId
     *
     * @return integer 
     */
    public function getArticleHistoryId()
    {
        return $this->articleHistoryId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ArticleHistory
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
     * Set log
     *
     * @param string $log
     * @return ArticleHistory
     */
    public function setLog($log)
    {
        $this->log = $log;
    
        return $this;
    }

    /**
     * Get log
     *
     * @return string 
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set status
     *
     * @param \Wiki\UIBundle\Entity\EditionStatus $status
     * @return ArticleHistory
     */
    public function setStatus(\Wiki\UIBundle\Entity\EditionStatus $status = null)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return \Wiki\UIBundle\Entity\EditionStatus 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set article
     *
     * @param \Wiki\UIBundle\Entity\Article $article
     * @return ArticleHistory
     */
    public function setArticle(\Wiki\UIBundle\Entity\Article $article = null)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return \Wiki\UIBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set editor
     *
     * @param \Wiki\UIBundle\Entity\User $editor
     * @return ArticleHistory
     */
    public function setEditor(\Wiki\UIBundle\Entity\User $editor = null)
    {
        $this->editor = $editor;
    
        return $this;
    }

    /**
     * Get editor
     *
     * @return \Wiki\UIBundle\Entity\User 
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set chapter
     *
     * @param \Wiki\UIBundle\Entity\Chapter $chapter
     * @return ArticleHistory
     */
    public function setChapter(\Wiki\UIBundle\Entity\Chapter $chapter = null)
    {
        $this->chapter = $chapter;
    
        return $this;
    }

    /**
     * Get chapter
     *
     * @return \Wiki\UIBundle\Entity\Chapter 
     */
    public function getChapter()
    {
        return $this->chapter;
    }
}