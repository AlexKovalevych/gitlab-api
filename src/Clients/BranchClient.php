<?php

namespace GitlabApi\Clients;

class BranchClient extends AbstractClient
{
    /**
     * @param  int $projectId
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listBranches($projectId)
    {
        return $this->getRequest(sprintf('projects/%u/repository/branches', $projectId));
    }

    /**
     * @param  int $projectId
     * @param  string $branch
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getBranch($projectId, $branch)
    {
        return $this->getRequest(sprintf('projects/%u/repository/branches/%s', $projectId, $branch));
    }

    /**
     * @param  int $projectId
     * @param  string $branch
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function protectBranch($projectId, $branch)
    {
        return $this->getRequest(sprintf('projects/%u/repository/branches/%s/protect', $projectId, $branch));
    }

    /**
     * @param  int $projectId
     * @param  string $branch
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function unprotectBranch($projectId, $branch)
    {
        return $this->getRequest(sprintf('projects/%u/repository/branches/%s/unprotect', $projectId, $branch));
    }

    /**
     * @param  int $projectId
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createBranch($projectId, array $data)
    {
        return $this->postRequest(sprintf('projects/%u/repository/branches', $projectId), $data);
    }

    /**
     * @param  int $projectId
     * @param  string $branch
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function deleteBranch($projectId, $branch)
    {
        return $this->deleteRequest(sprintf('projects/%u/repository/branches/%s', $projectId, $branch));
    }
}
