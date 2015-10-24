<?php

namespace Gitlab\Query;

class CommitStatusQueryBuilder extends AbstractQueryBuilder
{
    /**
     * @var string
     */
    protected $ref;

    /**
     * @var string
     */
    protected $stage;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var boolean
     */
    protected $all;

    /**
     * Gets the value of ref.
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Sets the value of ref.
     *
     * @param string $ref the ref
     *
     * @return self
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Gets the value of stage.
     *
     * @return string
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Sets the value of stage.
     *
     * @param string $stage the stage
     *
     * @return self
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param string $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of all.
     *
     * @return boolean
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * Sets the value of all.
     *
     * @param boolean $all the all
     *
     * @return self
     */
    public function setAll($all)
    {
        $this->all = $all;

        return $this;
    }
}
