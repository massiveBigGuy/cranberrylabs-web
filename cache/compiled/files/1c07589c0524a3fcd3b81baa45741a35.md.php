<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/03.ornithology/modular.md',
    'modified' => 1770174624,
    'size' => 943,
    'data' => [
        'header' => [
            'title' => 'Ornithology',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ]
            ],
            'body_classes' => 'modular header-image fullwidth',
            'media_order' => 'sam-first-day.jpg,august-smbranch-solo.jpg,august-solo-nearladder.jpg,sam-on-bars.jpg,baby-sam-near-ladder.jpg,duo-bestfriends.jpg,duo-chill-sit.jpg,duo-cute-weirdcamera.jpg,duo-in-morning.jpg,duo-late-night-sit.jpg,duo-on-house.jpg,duo-on-perch-blankbg.jpg,duo-on-perch-toy.jpg,duo-sleepyborbs.jpg,duo-top-friends.jpg,duo-whats-that.jpg,sam-avidreader.jpg,sam-baby-sam.jpg,sam-crazy.jpg,sam-floor-baby.jpg,sam-it-specialist.jpg,sam-new-friend.jpg,sam-solo-top.jpg,samsleepy.jpg,samsnoozin.jpg',
            'onpage_menu' => '0'
        ],
        'frontmatter' => 'title: Ornithology
content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
body_classes: \'modular header-image fullwidth\'
media_order: \'sam-first-day.jpg,august-smbranch-solo.jpg,august-solo-nearladder.jpg,sam-on-bars.jpg,baby-sam-near-ladder.jpg,duo-bestfriends.jpg,duo-chill-sit.jpg,duo-cute-weirdcamera.jpg,duo-in-morning.jpg,duo-late-night-sit.jpg,duo-on-house.jpg,duo-on-perch-blankbg.jpg,duo-on-perch-toy.jpg,duo-sleepyborbs.jpg,duo-top-friends.jpg,duo-whats-that.jpg,sam-avidreader.jpg,sam-baby-sam.jpg,sam-crazy.jpg,sam-floor-baby.jpg,sam-it-specialist.jpg,sam-new-friend.jpg,sam-solo-top.jpg,samsleepy.jpg,samsnoozin.jpg\'
onpage_menu: \'0\'',
        'markdown' => '<style>
body {
    background-color: #E6E6FA;
}

#ornithology .modular-row {
    display: flex;
    gap: 20px;
}

#ornithology ._main {
    flex: 3;
}

#ornithology ._sidebar {
    flex: 1;
    border-left: 1px solid #ddd;
    padding-left: 20px;
}
</style>'
    ]
];
