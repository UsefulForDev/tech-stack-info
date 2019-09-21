<?php


namespace App\Service;


class DeveloperManager implements DeveloperManagerInterface
{

    /**
     * @return array
     */
    public function getDevelopers(): array
    {
        return [
            'name' => 'Hoan'
        ];
    }
}
