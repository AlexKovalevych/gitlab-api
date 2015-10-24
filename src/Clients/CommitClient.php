<?php

namespace Gitlab\Clients;

use Gitlab\Query\CommitQueryBuilder;
use Gitlab\Query\CommitStatusQueryBuilder;

class CommitClient extends AbstractClient
{
    /**
     * @param  int                     $projectId
     * @param  CommitQueryBuilder|null $query
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listCommits($projectId, CommitQueryBuilder $query = null)
    {
        return $this->getRequest(sprintf('projects/%u/repository/commits', $projectId), $query);
    }

    /**
     * @param  int    $projectId
     * @param  string $sha
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getCommit($projectId, $sha)
    {
        return $this->getRequest(sprintf('projects/%u/repository/commits/%s', $projectId, $sha));
    }

    /**
     * @param  int    $projectId
     * @param  string $sha
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getCommitDiff($projectId, $sha)
    {
        return $this->getRequest(sprintf('projects/%u/repository/commits/%s/diff', $projectId, $sha));
    }

    /**
     * @param  int    $projectId
     * @param  string $sha
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getComments($projectId, $sha)
    {
        return $this->getRequest(sprintf('projects/%u/repository/commits/%s/comments', $projectId, $sha));
    }

    /**
     * @param  int    $projectId
     * @param  string $sha
     * @param  array  $data
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createCommitComment($projectId, $sha, array $data)
    {
        return $this->postRequest(sprintf('projects/%u/repository/commits/%s/comments', $projectId, $sha), $data);
    }

    /**
     * @param  int                           $projectId
     * @param  string                        $sha
     * @param  CommitStatusQueryBuilder|null $query
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getCommitStatus($projectId, $sha, CommitStatusQueryBuilder $query = null)
    {
        return $this->getRequest(sprintf('projects/%u/repository/commits/%s/statuses', $projectId, $sha), $query);
    }

    /**
     * @param  int        $projectId
     * @param  string     $sha
     * @param  array|null $data
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createCommitStatus($projectId, $sha, array $data = null)
    {
        return $this->postRequest(sprintf('projects/%u/statuses/%s/statuses', $projectId, $sha), $data);
    }
}
