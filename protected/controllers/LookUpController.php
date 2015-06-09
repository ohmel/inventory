<?php

class LookUpController extends RestController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public function fetchLevels()
    {
        $levelArray = array();
        $index = 0;
        $levels = LcsLevel::model()->findAll();
        foreach($levels as $level){
            $levelArray[$index]['levelName'] = $level->level_name;
            $levelArray[$index]['levelId'] = $level->level_id;
            $levelArray[$index]['levelType'] = $level->level_type;
            $index++;
        }

        return $levelArray;
    }

    public function fetchCourses()
    {
        $courseArray = array();
        $index = 0;
        $courses = LcsCourse::model()->findAll();
        foreach($courses as $course){
            $courseArray[$index]['courseName'] = $course->course_name;
            $courseArray[$index]['courseId'] = $course->course_id;
            $index++;
        }

        return $courseArray;
    }

    public function restEvents()
    {
        $this->onRest('req.get.fetchLevels.render', function () {
            return $this->restJsonEncode($this->fetchLevels());
        });

        $this->onRest('req.get.fetchCourses.render', function () {
            echo $this->restJsonEncode($this->fetchCourses());
        });
    }
}
