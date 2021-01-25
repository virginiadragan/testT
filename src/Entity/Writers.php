<?php

namespace App\Entity;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Column;
//use Cycle\Annotated\Annotation\Relation\HasOne;

/**
 * @Entity(
 *    table      = "books"
 * )
 */
class Writers
{
    /** @Column(type = "primary") */
    protected int $id;

    /** @Column(type = "string(100)", name = "name") */
    protected string $writerName;

    public function __construct(string $writerName = '')
    {
        $this->writerName = $writerName;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getWriterName(): string
    {
        return $this->writerName;
    }

    public function setWriterName(string $writerName): void
    {
        $this->writerName = $writerName;
    }
}
