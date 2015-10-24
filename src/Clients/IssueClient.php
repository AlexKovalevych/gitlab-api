<?php

namespace GitlabApi\Clients;

use GitlabApi\Query\IssueQueryBuilder;
use GitlabApi\Query\ProjectIssueQueryBuilder;

class IssueClient extends AbstractClient
{
    /**
     * @param  QueryBuilderInterface|null $query
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listIssues(IssueQueryBuilder $query = null)
    {
        return $this->getRequest('issues', $query);
    }

    /**
     * @param  int $projectId
     * @param  ProjectIssueQueryBuilder|null $query
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listProjectIssues($projectId, ProjectIssueQueryBuilder $query = null)
    {
        return $this->getRequest(sprintf('projects/%u/issues', $projectId));
    }

    /**
     * @param  int $projectId
     * @param  int $issueId
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getIssue($projectId, $issueId)
    {
        return $this->getRequest(sprintf('projects/%u/issues/%u', $projectId, $issueId));
    }

    /**
     * @param  string $projectId
     * @param  array  $data
     * @return \GuzzleHttp\Message\Response
     */
    public function createIssue($projectId, array $data)
    {
        return $this->postRequest(sprintf('projects/%s/issues', $projectId), $data);
    }

    /**
     * @param  int $projectId
     * @param  int $issueId
     * @param  array  $data
     * @return \GuzzleHttp\Message\Response
     */
    public function editIssue($projectId, $issueId, array $data)
    {
        return $this->putRequest(sprintf('projects/%s/issues/%s', $projectId, $issueId), $data);
    }
}
