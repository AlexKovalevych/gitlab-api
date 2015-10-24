<?php

namespace Gitlab\Query;

class CommitQueryBuilder extends AbstractQueryBuilder
{
    /**
     * @var string
     */
    protected $ref_name;

    /**
     * Gets the value of ref_name.
     *
     * @return string
     */
    public function getRefName()
    {
        return $this->ref_name;
    }

    /**
     * Sets the value of ref_name.
     *
     * @param string $ref_name the ref name
     *
     * @return self
     */
    public function setRefName($ref_name)
    {
        $this->ref_name = $ref_name;

        return $this;
    }
}
