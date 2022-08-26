<?php

$path = preg_replace( '/wp-content.*$/', '', __DIR__ );
require_once( $path . "wp-load.php" );

global $wpdb;

if ( isset( $_POST['submit_form_woman'] ) ) {
    $nom = sanitize_text_field( $_POST['nom'] );
    $email = sanitize_email( $_POST['email'] );
    $adresse1 = sanitize_text_field( $_POST['adresse1'] );
    $adresse2 = sanitize_text_field( $_POST['adresse2'] );

    echo $nom . '<br>' . $email . '<br>' . $adresse1 . '<br>' . $adresse2;
    $wpdb->insert( 'wp_wphealthformwoman', [
        'nom' => $nom,
        'email' => $email,
        'adresse1' => $adresse1,
        'adresse2' => $adresse2
    ] );

    echo '<br>informations saved successfully on the database';
}
if ( isset( $_POST['submit_form_man'] ) ) {
    $nom = sanitize_text_field( $_POST['nom'] );
    $email = sanitize_email( $_POST['email'] );
    $adresse1 = sanitize_text_field( $_POST['adresse1'] );
    $adresse2 = sanitize_text_field( $_POST['adresse2'] );

    echo $nom . '<br>' . $email . '<br>' . $adresse1 . '<br>' . $adresse2;
    $wpdb->insert( 'wp_wphealthformman', [
        'nom' => $nom,
        'email' => $email,
        'adresse1' => $adresse1,
        'adresse2' => $adresse2
    ] );

    echo '<br>informations saved successfully on the database';
}