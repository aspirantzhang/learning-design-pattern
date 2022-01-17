<?php

declare(strict_types=1);

namespace zhang\nullObject;

class Price
{
    public function getTotal(array $tasks)
    {
        $result = 0;
        foreach ($tasks as $task) {
            $result += $task->getPrice();
        }
        return $result;
    }

    public function getWorkingHours(array $tasks)
    {
        $result = 0;
        foreach ($tasks as $task) {
            $hours = ($task->isNull()) ? 0 : 1;
            $result += $hours;
        }
        return $result;
    }
}
