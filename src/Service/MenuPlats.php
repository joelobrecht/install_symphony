<?php

namespace App\Service;

use App\Repository\PlatRepository;

class MenuPlats
{
    public function listePlats(PlatRepository $platRepository): array
    {
        //dd($platRepository->findAll());

        return $platRepository->findAll();
    }
}
