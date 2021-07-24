<?php

return [
    'production' => false,
    'baseUrl' => 'https://sergiu-adrian.ro/',
    'site' => [
        'title' => 'Mission blog',
        'description' => 'Îmi găsesc misiunea prin scris.',
        'image' => 'assets/images/logo.png',
    ],
    'owner' => [
        'name' => 'Sergiu Adrian',
        'facebook' => 'sergiu.adrian.rus',
        'linkedin' => 'russergiuadrian',
    ],
    'services' => [
        'cmsVersion' => '2.10.139',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
          "cloud_name" => "sergiu-adrian-ro",
          "api_key" => "711896784982343",
          "api_secret" => "nEdmb0ehlY-uvK5fe-1xOYS8uaE",
          "secure" => true
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
