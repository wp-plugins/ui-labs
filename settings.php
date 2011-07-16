<div class="wrap">
<h2>UI Labs Experiments</h2>

<form method="post" action="options.php">
    <?php settings_fields('ui-labs'); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row"><strong>Experiment 1:</strong> Colour-coded Post Statuses</th>
        <td><input type="checkbox" name="poststatuses" value="yes"<?=get_option('poststatuses') == 'yes' ? ' checked' : '';?> /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row"><strong>Experiment 2:</strong> Classic WordPress Admin Bar</th>
        <td><input type="checkbox" name="adminbar" value="yes"<?=get_option('adminbar') == 'yes' ? ' checked' : '';?> /></td>
        </tr>
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>