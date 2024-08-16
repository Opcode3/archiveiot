<?php

namespace app\controller;

use app\services\ProjectService;

class ProjectController
{

    private $projectService;

    function __construct()
    {
        $this->projectService = new ProjectService();
    }

    function addProject(array $payload, $files)
    {
        return $this->projectService->setProject($payload, $files);
    }

    function getSingleProject(string $slug)
    {
        return $this->projectService->getProject($slug);
    }

    function getAllProjects()
    {
        return $this->projectService->getProjects();
    }

    function getCount()
    {
        return $this->projectService->getProjectsCount();
    }

    function deleteProject(string $images, int $id)
    {
        return $this->projectService->removeProject( $images, $id);
    }

    function modifyProjectInfo(array $payload)
    {
        return $this->projectService->editProject($payload);
    }
}
