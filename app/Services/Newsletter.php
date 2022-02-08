<?php

namespace App\Services;

interface Newsletter
{
    public function subscribe($email, string $list = null);
}
