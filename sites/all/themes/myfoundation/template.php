<?php

function myfoundation_form_alter(&$form, &$form_state, $form_id) {
    if ( TRUE === in_array( $form_id, array( 'user_login', 'user_login_block') ) ) {
        dsm($form);
        // Javascript placeholders for Username and Password (old browsers)
        // Almost all browsers support HTML5 nowadays
        // If you don't want it remove it : )
        $form['name']['#title_display']['onblur'] = "if (this.value == '') {this.value = 'Username';}";
        $form['name']['#title_display']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
        $form['pass']['#title_display']['onblur'] = "if (this.value == '') {this.value = 'Password';}";
        $form['pass']['#title_display']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
        // "Login" form (no label, no description and with HTML5 placeholder)
        $form['name']['#title_display'] = "invisible";
        $form['pass']['#title_display'] = "invisible";
        $form['name']['#attributes']['placeholder'] = t( 'Username' );
        $form['pass']['#attributes']['placeholder'] = t( 'Password' );
        $form['name']['#description'] = t('');
        $form['pass']['#description'] = t('');
        //$form['action']['submit']['#value'] = "BLABLABLA";
    }
    if ($form_id == 'user_pass') {
        // Javascript placeholders for Request Password page (old browsers)
        // Almost all browsers support HTML5 nowadays
        // If you don't want it remove it : )
        $form['name']['#title_display']['onblur'] = "if (this.value == '') {this.value = 'Type your username or e-mail address';}";
        $form['name']['#title_display']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
        // "Request new password" form (no label and with HTML5 placeholder)
        $form['name']['#title_display'] = "invisible";
        $form['name']['#attributes']['placeholder'] = t( 'Type your username or e-mail address' );
    }

}
?>