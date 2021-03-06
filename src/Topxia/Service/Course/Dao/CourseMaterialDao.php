<?php

namespace Topxia\Service\Course\Dao;

interface CourseMaterialDao
{

    public function getMaterial($id);

    public function findMaterialsByCourseId($courseId, $start, $limit);

    public function findMaterialsByLessonId($lessonId, $start, $limit);

    public function getMaterialCountByCourseId($courseId);

    public function addMaterial($material);

    public function updateMaterial($id, $fields);

    public function findMaterialsByCopyIdAndLockedCourseIds($copyId, $courseIds);

    public function deleteMaterial($id);

    public function deleteMaterialsByLessonId($lessonId);

    public function deleteMaterialsByCourseId($courseId);

    public function deleteMaterialsByFileId($fileId);

    public function getLessonMaterialCount($courseId,$lessonId);

    public function getMaterialCountByFileId($fileId);

    public function findMaterialsGroupByFileId($courseId, $start, $limit);

    public function findMaterialCountGroupByFileId($courseId);

    public function searchMaterials($conditions, $orderBy, $start, $limit);

    public function searchMaterialCount($conditions);
}