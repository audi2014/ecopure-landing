<?php

/*
Template Name: howitworks layout
Template Post Type: post, page
*/
$context = Timber\Timber::context();

//$context['post_meta'] = $audi2014_FetchPostMetadata(get_the_ID());
//
//foreach ([
//             'features_img' => 'features',
//             'splash_img' => 'splash',
//         ] as $metaKey => $imgKey) {
//    if (isset($context['post_meta'][$metaKey])) {
//        $context['img'][$imgKey] = new Timber\Image($context['post_meta'][$metaKey]);
//    }
//}
//
//
//$context['num_queries'] = get_num_queries();

Timber\Timber::render(
    [
        'twig/pages/how_it_works.twig'
    ],
    $context
);

