<?php

function formatDate($date)
{
    return date('d-m-Y', strtotime($date));
}

function formatDescription($description)
{
    return Str::limit($description, 100, $end = '...');
}
