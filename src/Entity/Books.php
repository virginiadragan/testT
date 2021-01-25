<?php

namespace App\Entity;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Column;

/**
 * @Entity(
 *    table      = "books"
 * )
 */
class Books
{
    /** @Column(type = "integer") */
    protected int $id;

    /** @Column(type = "string(100)", name = "name") */
    protected string $bookName;

    /** @Column(type = "integer",  nullable = true) */
    protected int $year;

    /** @Column(type = "integer",  nullable = true) */
    protected int $author_id;

    public function __construct(string $bookName = '', int $year = 0)
    {
        $this->bookName = $bookName;
        $this->year = $year;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getBookName(): string
    {
        return $this->bookName;
    }

    public function setBookName(string $bookName): void
    {
        $this->bookName = $bookName;
    }
    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }
    public function getAuthor(): int
    {
        return $this->author_id;
    }

    public function setAuthor(int $author_id): void
    {
        $this->author_id = $author_id;
    }
}
