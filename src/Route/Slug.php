<?php

namespace Yii2BestRouter\Route;

use Cocur\Slugify\Slugify;

class Slug
{
    public function slugify($text)
    {
        return $text;
    }

    public function parse()
    {
        return $this;
    }
}
