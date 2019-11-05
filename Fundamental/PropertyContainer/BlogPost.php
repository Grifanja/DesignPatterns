<?php


namespace App\Services\DesignPatterns\Fundamental\PropertyContainer;


class BlogPost extends PropertyContainer
{

    private $id       = 0;
    private $title    = '';
    private $category = 0;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BlogPost
     */
    public function setId(int $id): BlogPost
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return BlogPost
     */
    public function setTitle(string $title): BlogPost
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return BlogPost
     */
    public function setCategory(int $category): BlogPost
    {
        $this->category = $category;
        return $this;
    }


}