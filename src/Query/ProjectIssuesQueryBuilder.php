<?php

namespace GitlabApi\Query;

class ProjectIssuesQueryBuilder extends AbstractQueryBuilder
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
     * @var int
     */
    protected $iid;

    /**
     * @var string
     */
    protected $milestone;

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
     * Gets the value of per_page.
     *
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * Sets the value of per_page.
     *
     * @param int $per_page the per page
     *
     * @return self
     */
    public function setPerPage($per_page)
    {
        $this->per_page = $per_page;

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
     * Gets the value of order_by.
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Sets the value of order_by.
     *
     * @param string $order_by the order by
     *
     * @return self
     */
    public function setOrderBy($order_by)
    {
        $this->order_by = $order_by;

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

    /**
     * Gets the value of iid.
     *
     * @return int
     */
    public function getIid()
    {
        return $this->iid;
    }

    /**
     * Sets the value of iid.
     *
     * @param int $iid the iid
     *
     * @return self
     */
    public function setIid($iid)
    {
        $this->iid = $iid;

        return $this;
    }

    /**
     * Gets the value of milestone.
     *
     * @return string
     */
    public function getMilestone()
    {
        return $this->milestone;
    }

    /**
     * Sets the value of milestone.
     *
     * @param string $milestone the milestone
     *
     * @return self
     */
    public function setMilestone($milestone)
    {
        $this->milestone = $milestone;

        return $this;
    }
}
