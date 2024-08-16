<?php

namespace app\services;

use app\config\MysqlDBH;
use app\dto\ResponseDto;
use app\model\Project;
use app\services\impl\ProjectServiceImpl;
use app\utils\MediaFileHandler;

class ProjectService implements ProjectServiceImpl
{

    private $model;

    function __construct()
    {
        $connector = new MysqlDBH();
        $this->model = new Project($connector);
    }

    function setProject(array $payload, $files): string
    {
        $media = new MediaFileHandler();

        if ($media->multipleFileUpload($files) == true) {
            $response = $this->model->createProject($payload);
            if (is_int($response)) {
                $res = $media->sealUpload($response);
                return $res ? ResponseDto::json("Project upload was successful!", 201) :
                    ResponseDto::json("An error was encountered while trying to create project!", 500);
            } else if (is_bool($response)) {
                return ResponseDto::json("An error was encountered while trying to create project!", 500);
            } else if ($response == "exist") {
                return ResponseDto::json("This project name already exist in our system!", 422);
            } else {
                return ResponseDto::json($response, 422);
            }
        }
        return ResponseDto::json("An issue was encountered while trying to upload the media!", 422);
    }

    function getProject(string $slug): string
    {
        $response = $this->model->fetchProjectBySlug($slug);
        return ResponseDto::json($response);
    }

    function getProjects(): string
    {
        $response = $this->model->fetchProjects();
        return ResponseDto::json($response);
    }

    function getProjectsCount(): int
    {
        $response = $this->model->fetchProjects();
        return count($response);
    }


    function editProject(array $payload): string
    {
        return "";
    }

    function removeProject(string $images, int $id): string
    {
        $response = $this->model->deleteProject($id);
        if ($response) {
            $media = new MediaFileHandler();
            if ($media->deleteFiles($images)) {
                return ResponseDto::json("Project was deleted successfully", 200);
            }
            return ResponseDto::json("Project has been deleted; but we are unable to delete it's resources entirely!");
        }
        return ResponseDto::json("We are unable to delete this project at the moment. Please try again!");
    }
}
