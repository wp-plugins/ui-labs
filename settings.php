<div class="wrap">
<h2>UI Labs Experiments</h2>

<form method="post" action="options.php">
    <?php settings_fields('ui-labs'); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row"><strong>Experiment 1:</strong> Colour-coded Post Statuses</th>
        <td><input type="checkbox" name="poststatuses" value="yes"<?php echo get_option('poststatuses') == 'yes' ? ' checked' : '';?> /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row"><strong>Experiment 2:</strong> Classic WordPress Admin Bar</th>
        <td><input type="checkbox" name="adminbar" value="yes"<?php echo get_option('adminbar') == 'yes' ? ' checked' : '';?> /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><strong>Experiment 3:</strong> Identify This Server</th>
        <td><input type="checkbox" name="identify" value="yes"<?php echo get_option('identify') == 'yes' ? ' checked' : '';?> /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Server type</th>
        <td>
        	<select id="servertype" name="servertype">
        		<option value="uilabs-blank"<?php echo get_option('servertype') == 'uilabs-blank' ? ' selected' : '';?>>--</option>
        		<option value="uilabs-development"<?php echo get_option('servertype') == 'uilabs-development' ? ' selected' : '';?>>Development</option>
        		<option value="uilabs-staging"<?php echo get_option('servertype') == 'uilabs-staging' ? ' selected' : '';?>>Staging</option>
        		<option value="uilabs-live"<?php echo get_option('servertype') == 'uilabs-live' ? ' selected' : '';?>>Live</option>
        	</select>
        </td>
        </tr>
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>