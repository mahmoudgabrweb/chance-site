<?php

if (!function_exists("generateEventSlug")) {
    function generateEventSlug(int $id, string $title): string
    {
        $slug = str_replace(" ", "-", $title);
        return url("events/$id/$slug");
    }
}

if (!function_exists("getEventStartEndTime")) {
    function getEventStartEndTime(string $startDate, string $endDate): string
    {
        return date("h:i A", strtotime($startDate)) . " - " . date("H:i A", strtotime($endDate));
    }
}

if (!function_exists("generateArticleSlug")) {
    function generateArticleSlug(int $id, string $title): string
    {
        $slug = str_replace(" ", "-", $title);
        return url("articles/$id/$slug");
    }
}
