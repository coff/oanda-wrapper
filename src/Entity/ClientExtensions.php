<?php


namespace Coff\OandaWrapper\Entity;


class ClientExtensions extends Entity
{
    /**
     * @var string $id The Client ID of the Order/Trade
     */
    protected $id;

    /**
     * @var string $tag A tag associated with the Order/Trade
     */
    protected $tag;

    /**
     * @var string $comment A comment associated with the Order/Trade
     */
    protected $comment;

    public function toJson(): \stdClass
    {
        $obj = new \stdClass();

        if (null !== $this->id) {
            $obj->id = $this->id;
        }

        if (null !== $this->tag) {
            $obj->tag = $this->tag;
        }

        if (null !== $this->comment) {
            $obj->comment = $this->comment;
        }

        return $obj;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ClientExtensions
     */
    public function setId(string $id): ClientExtensions
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return ClientExtensions
     */
    public function setTag(string $tag): ClientExtensions
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return ClientExtensions
     */
    public function setComment(string $comment): ClientExtensions
    {
        $this->comment = $comment;
        return $this;
    }


}