<div id="defender-csp-debug">
    <div>
        <p>
		    <?php _e( "You are in Test Mode. Use your browser developer console check if the security header directives are working as expected before publishing the change lives, or revert if they are causing issues.", "defender-security" ) ?>
        </p>
        <form method="post" action="<?php echo admin_url( 'admin-ajax.php' ) ?>">
            <input type="hidden" name="action" value="defender-csp-debug-cancel"/>
		    <?php wp_nonce_field( 'defender-csp-debug-cancel' ) ?>
            <button type="submit">
			    <?php _e( "Cancel", "defender-security" ) ?>
            </button>
        </form>
        <form method="post" action="<?php echo admin_url( 'admin-ajax.php' ) ?>">
            <input type="hidden" name="action" value="defender-csp-debug-apply">
		    <?php wp_nonce_field( 'defender-csp-debug-apply' ) ?>
            <button type="submit" class="is-button-blue">
			    <?php _e( "Apply", "defender-security" ) ?>
            </button>
        </form>
    </div>
</div>