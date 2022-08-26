<?php

global $wpdb;

$womanlist = $wpdb->get_results(
    $wpdb->prepare(
        "SELECT * FROM `wp_wphealthformwoman`", ""
    ), ARRAY_A
); ?>

<h1 class="wp-heading-inline">Liste sondage pour les femmes</h1>
<table class="wp-list-table widefat fixed striped table-view-list posts">
	<thead>
	    <tr>
            <th scope="col" id="id" class="manage-column column-tags">ID</th>
            <th scope="col" id="title" class="manage-column column-title"><span>Titre</span><span class="sorting-indicator"></span></th>
            <th scope="col" id="author" class="manage-column column-author">Email</th>
            <th scope="col" id="categories" class="manage-column column-categories">Adresse 1</th>
            <th scope="col" id="tags" class="manage-column column-tags">Adresse 2</th>
        </tr>
	</thead>

	<tbody id="the-list">

    <?php
    if ( count( $womanlist ) > 0 ) {
        $count = 1;
        foreach ( $womanlist as $index => $womanlist ) {
        ?>
            <tr id="post-<?= $count; ?>" class="iedit nom-self level-0 post-<?= $count; ?> type-post status-publish format-standard hentry category-non-classe">
                <td><?= $womanlist['id'] ?></td>
                <td class="title column-title has-row-actions column-primary page-title" data-colname="Titre">
                    <strong><?= $womanlist['nom'] ?></strong>
                </td>
                <td class="author column-email"><?= $womanlist['email'] ?></td>
                <td class="categories column-categories" data-colname="adresse1"><?= $womanlist['adresse1'] ?></td>
                <td class="tags column-tags" data-colname="adresse2"><span class="screen-reader-text"><?= $womanlist['adresse2'] ?></span></td>	
            </tr>
        <?php
        }
    }
    ?>	
	</tbody>

	<tfoot>
	    <tr>
            <th scope="col" id="id" class="manage-column column-tags">ID</th>
            <th scope="col" id="title" class="manage-column column-title"><span>Titre</span><span class="sorting-indicator"></span></th>
            <th scope="col" id="author" class="manage-column column-author">Email</th>
            <th scope="col" id="categories" class="manage-column column-categories">Adresse 1</th>
            <th scope="col" id="tags" class="manage-column column-tags">Adresse 2</th>
        </tr>
	</tfoot>

</table>