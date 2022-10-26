<?php

use Carbon\Carbon;

function releaseDate($date)
{
    return Carbon::parse($date)->format('d M Y');
}