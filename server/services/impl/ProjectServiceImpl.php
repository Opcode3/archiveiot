<?php

namespace app\services\impl;

interface ProjectServiceImpl
{
    function setProject(array $data, $files): string;
    function getProjects(): string;
    function getProjectsCount(): int;
    function getProject(string $slug): string;
    function editProject(array $data): string;
    function removeProject(string $images, int $id): string;
}
