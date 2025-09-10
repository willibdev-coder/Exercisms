<?php

class PizzaPi
{
    /**
     * Calculate the amount of dough needed to make a specific number of pizzas,
     * and distribute them among a specific number of people.
     *
     * Note. The dough needed for the middle is a minimum 200g.
     *
     * @param int $pizzas
     *   Number of pizzas needed.
     * @param int $people
     *   Number of people who will eat pizza.
     * @return int
     *   The total amount of dough needed for the pizza.
     */
    public function calculateDoughRequirement(int $pizzas, int $people): int
    {
        return $pizzas * (($people * 20) + 200);
    }

    public function calculateSauceRequirement(int $pizzas, int $sauceCans): int
    {
        return ($pizzas * 125) / $sauceCans;
    }

    public function calculateCheeseCubeCoverage(int $cheese_dimension, float $thickness, int $diameter): int
    {
        return pow($cheese_dimension, 3) / ($thickness * pi() * $diameter);
    }

    public function calculateLeftOverSlices(int $pizzas, int $friends)
    {
        return ($pizzas * 8) % $friends;
    }
}
