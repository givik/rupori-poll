<?php
    require_once('includes/tile.class.php');
    require_once('includes/ui.class.php');

    $ui = new UI();

    $ui->setTitle('Rupori APP');

    $tiles = array(

        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'blue',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'orange',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'green',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'red',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'purple',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'yellow',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'grey',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'darkgreen',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'darkred',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'darkblue',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'blue',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'orange',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'green',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'red',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'purple',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'yellow',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'grey',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'darkgreen',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'darkred',
            'link'        => ''
        ),
        array(
            'name'        => 'tile009',
            'thumbnail'   => 'images/widget_tag.png',
            'content'     => 'tile009',
            'url'         => 'tiles/blank.php',
            'size'        => '2x2',
            'theme'       => 'darkblue',
            'link'        => ''
        )
    );

    $tile_container1 = array(
        'size'  => 'full',
        'theme' => '',
        'tiles' => $tiles
    );

    $ui->addTileContainer($tile_container1);

    $ui->printHeader();
    $ui->printTiles();
    $ui->printFooter();
?>