
<div class="wrap">
    <h1>Configuration du module</h1>
    
    <?php if (isset($_GET['saved'])) : ?>
    <div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible"> 
        <p><strong>Réglages enregistrés.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Ignorer cette notification.</span></button>
    </div>
    <?php endif; ?>
    <form method="post" action="options.php" novalidate="novalidate">
        <?php
            settings_fields( 'healthformsetting' );
            do_settings_sections( 'healthformsetting' );
        ?>
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row"><label for="setting1">Setting 1</label></th>
                    <td><input name="setting1" type="text" id="setting1" value="<?= get_option( 'setting1' ) ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="setting1">Setting 2</label></th>
                    <td><input name="setting2" type="text" id="setting2" value="<?= get_option( 'setting2' ) ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="setting1">Setting 3</label></th>
                    <td><input name="setting3" type="text" id="setting3" value="<?= get_option( 'setting3' ) ?>" class="regular-text"></td>
                </tr>
            </tbody>
        </table>
        <p class="submit"><input type="submit" name="submit_settings" id="submit" class="button button-primary" value="Enregistrer les modifications"></p>
    </form>
</div>
