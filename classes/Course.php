<?php
namespace classes;

class Course extends Department
{
    public function courses()
    {
        return [
            'CSE-101',
            'CSE-102',
            'CSE-103'
        ];
    }

    public function departments()
    {
        return $this->departments();
    }
}