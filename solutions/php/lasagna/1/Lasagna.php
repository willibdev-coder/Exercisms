<?php

class Lasagna
{
    private const int COOKTIME = 40;
    private const int MINUTES_PER_LAYER = 2;

    public function expectedCookTime(): int
    {
        return Lasagna::COOKTIME;
    }

    public function remainingCookTime(int $elapsed_minutes): int
    {
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    public function totalPreparationTime(int $layers_to_prep): int
    {
        return $layers_to_prep * Lasagna::MINUTES_PER_LAYER;
    }

    public function totalElapsedTime(int $layers_to_prep, int $elapsed_minutes): int
    {
        return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    public function alarm(): string
    {
        return "Ding!";
    }
}
