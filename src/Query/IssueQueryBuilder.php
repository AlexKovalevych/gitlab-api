<?php

namespace GitlabApi\Query;

class IssueQueryBuilder extends AbstractQueryBuilder
{
    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $per_page;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var array
     */
    protected $labels = [];

    /**
     * @var string
     */
    protected $order_by;

    /**
     * @var string
     */
    protected $sort = 'desc';

    /**
     * Gets the value of page.
     *
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets the value of page.
     *
     * @param int $page the page
     *
     * @return self
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Gets the value of perPage.
     *
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * Sets the value of perPage.
     *
     * @param int $perPage the per page
     *
     * @return self
     */
    public function setPerPage($perPage)
    {
        $this->per_page = $perPage;

        return $this;
    }

    /**
     * Gets the value of state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the value of state.
     *
     * @param string $state the state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets the value of labels.
     *
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Sets the value of labels.
     *
     * @param array $labels the labels
     *
     * @return self
     */
    public function setLabels(array $labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Gets the value of orderBy.
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Sets the value of orderBy.
     *
     * @param string $orderBy the order by
     *
     * @return self
     */
    public function setOrderBy($orderBy)
    {
        $this->order_by = $orderBy;

        return $this;
    }

    /**
     * Gets the value of sort.
     *
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets the value of sort.
     *
     * @param string $sort the sort
     *
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }
}
