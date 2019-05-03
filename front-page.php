<?php

/*
Template Name: homeLanding layout
Template Post Type: post, page
*/
$context = Timber\Timber::context();
$ecopure_FetchPostMetadata = new \EcopureTheme\FetchPostMetadata();
$content = new EcopureTheme\HomePage($ecopure_FetchPostMetadata);
$navigation = new EcopureTheme\Navigation();
$site = new EcopureTheme\Site();
$footer = new EcopureTheme\Footer($site);
$location = new EcopureTheme\Location();
$context['content'] = $content->getData(get_the_ID());
$context['navigation'] = $navigation->getData();
$context['footer'] = $footer->getData();
$context['site'] = $site->getData();
$context['location'] = $location->getData();


//foreach ($data as $key => $value) {
//    $context[$key] = $value;
//}

//json_decode(file_get_contents(__DIR__.'/app/twig/data/index.twig.json'),true);



//$context['num_queries'] = get_num_queries();

Timber\Timber::render(
    [
        'twig/pages/home.twig'
    ],
    $context
);

