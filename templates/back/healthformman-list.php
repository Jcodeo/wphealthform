<?php

global $wpdb;

$manlist = $wpdb->get_results(
    $wpdb->prepare(
        "SELECT * FROM `wp_wphealthformman`", ""
    ), ARRAY_A
); ?>

<h1 class="wp-heading-inline">Liste sondage pour les hommes</h1>
<table class="wp-list-table widefat fixed striped table-view-list posts">
	<thead>
	    <tr>
            <th scope="col" id="title" class="manage-column column-title"><span>Titre</span><span class="sorting-indicator"></span></th>
            <th scope="col" id="author" class="manage-column column-author">Email</th>
            <th scope="col" id="categories" class="manage-column column-categories">Adresse 1</th>
            <th scope="col" id="tags" class="manage-column column-tags">Adresse 2</th>
        </tr>
	</thead>

	<tbody id="the-list">

    <?php
    if ( count( $manlist ) > 0 ) {
        $count = 1;
        foreach ( $manlist as $index => $manlist ) {
        ?>
            <tr id="post-<?= $count; ?>" class="iedit nom-self level-0 post-<?= $count; ?> type-post status-publish format-standard hentry category-non-classe">
                <td class="title column-title has-row-actions column-primary page-title" data-colname="Titre">
                    <strong><?= $manlist['nom'] ?></strong>
                </td>
                <td class="author column-email"><?= $manlist['email'] ?></td>
                <td class="categories column-categories" data-colname="adresse1"><?= $manlist['adresse1'] ?></td>
                <td class="tags column-tags" data-colname="adresse2"><span class="screen-reader-text"><?= $manlist['adresse2'] ?></span></td>	
            </tr>
        <?php
        }
    }
    ?>	
	</tbody>

	<tfoot>
	    <tr>
            <th scope="col" id="title" class="manage-column column-title"><span>Titre</span><span class="sorting-indicator"></span></th>
            <th scope="col" id="author" class="manage-column column-author">Email</th>
            <th scope="col" id="categories" class="manage-column column-categories">Adresse 1</th>
            <th scope="col" id="tags" class="manage-column column-tags">Adresse 2</th>
        </tr>
	</tfoot>

</table>