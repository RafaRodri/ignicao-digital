<?php

namespace App\Http\Controllers;

/**
 * Class ApiController - Responsável pela página "API"
 * @package App\Http\Controllers
 */
class ApiController extends WebController
{
    public function index()
    {
        return response()->json([
            'menu' => array(
                array(
                    'title' => 'Navigation here',
                    'url' => '#',
                ),
                array(
                    'title' => 'About us',
                    'url' => '#'
                )
            ),
            'logo' => 'LEARN',
            'banner' => asset('images/banner.png'),
            'text' => array(
                array(
                    'title' => 'Our latest work',
                    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis sem in purus facilisis adipiscing at vitae sapien. Maecenas eget metus turpis. Integer ac molestie mauris. Aenean id libero eget ante dignissim faucibus.</p><p>Morbi sit amet nunc et ante feugiat blandit id aliquam risus. Nulla mattis auctor mi sit amet interdum. Nam consequat, ipsum non tincidunt tincidunt, massa mi tincidunt augue, in elementum lectus sem in libero.</p><p>Morbi feugiat est dui, quis scelerisque ipsum dictum quis. Fusce adipiscing est sodales aliquet vulputate. Etiam eget risus at purus fermentum mattis vitae eu sem. Maecenas tincidunt sapien in tortor adipiscing lacinia. Sed velit odio, pulvinar sagittis diam id, feugiat sodales lacus. Quisque magna nisl, aliquet id laoreet ut, placerat et felis. Suspendisse aliquet ullamcorper purus, luctus faucibus velit feugiat sed. Aenean interdum, elit ut dictum convallis, dolor arcu pulvinar neque, et congue elit nisl quis tellus. Aliquam auctor libero nec purus facilisis, sit amet fermentum metus lacinia.</p>'
                ),
                array(
                    'title' => 'About us',
                    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis sem in purus facilisis adipiscing at vitae sapien. Maecenas eget metus turpis. Integer ac molestie mauris. Aenean id libero eget ante dignissim faucibus.</p><p>Morbi feugiat est dui, quis scelerisque ipsum dictum quis. Fusce adipiscing est sodales aliquet vulputate. Etiam eget risus at purus fermentum mattis vitae eu sem. Maecenas tincidunt sapien in tortor adipiscing lacinia. Sed velit odio, pulvinar sagittis diam id, feugiat sodales lacus. Quisque magna nisl, aliquet id laoreet ut, placerat et felis. Suspendisse aliquet ullamcorper purus, luctus faucibus velit feugiat sed. Aenean interdum, elit ut dictum convallis, dolor arcu pulvinar neque, et congue elit nisl quis tellus. Aliquam auctor libero nec purus facilisis, sit amet fermentum metus lacinia.</p>'
                ),
            ),
            'highlights' => array(
                array(
                    'title' => 'Best restaurants',
                    'image' => asset('images/featured-1.png')
                ),
                array(
                    'title' => 'Design',
                    'image' => asset('images/featured-2.png')
                ),
                array(
                    'title' => 'Wood chair',
                    'image' => asset('images/featured-3.png')
                )
            )
        ]);
    }
}
