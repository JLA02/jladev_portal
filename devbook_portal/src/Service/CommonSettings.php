<?php

namespace App\Service;

class CommonSettings
{
    public function GetAuthorFirstName()
    {
        $authorFirstName = 'Jean-Louis';
        return $authorFirstName;
    }

    public function GetAuthorLastName()
    {
        $authorLastName = 'AMADI';
        return $authorLastName;
    }

    public function GetCurrentYear()
    {
        $currentYear = date("Y");
        return $currentYear;
    }

    public function GetCurrentMonth()
    {
        $currentMonth = date("m");
        return $currentMonth;
    }

    public function GetCurrenDayNumber()
    {
        $currentDayNumber = date("d");
        return $currentDayNumber;
    }

    public function GetCurrenDay()
    {
        $currentDay = date("l");
        return $currentDay;
    }

    public function GetAppName()
    {
        $appName = 'DevBook';
        return $appName . '-' . $this->GetAuthorFirstName() . ' ' . $this->GetAuthorLastName();
    }
}

?>