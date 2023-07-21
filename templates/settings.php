<?php
echo '<div class="wrap">';
echo '<h1>' . esc_html__( 'Settings - How to setup the Employees Bio Plugin', 'employee-biography-plugin' ) . '</h1>';
echo '<hr/>'; ?>
<h3>Steps</h3>
<ol class="install-steps">
    <li>Go to the plugins menu and upload, install and activate the plugin <strong>Employee Bios (zonda_employee_bio-main.zip)</strong></li>
    <hr/>
    <li>Install the free version of the plugin <strong>ACF (Advanced Custom Fields)</strong> - <a href="https://www.advancedcustomfields.com/">ACF-Plugin</a></li>
    <li>Click on: <strong>ACF > Field Groups</strong> menu and create a group called <strong>Employee Bios</strong></li>
    <li>Create the fields:
        <ul>
            <li>Field name: person_name                | Type: text  | Validation: Required</li>
            <li>Field name: person_image               | Type: image | Validation: Required</li>
            <li>Field name: position_title             | Type: text  | Validation: Required</li>
            <li>Field name: division_title             | Type: text  | Validation: Required</li>
            <li>Field name: division_logo              | Type: text  | Validation: Optional</li>
            <li>Field name: how_long_with_the_company  | Type: text  | Validation: Required</li>
        </ul>
    </li>
    <li>In Settings > Location Rules > Rules set:
        <ul>
            <li><strong>Show this field group if</strong> to <strong>Post Type</strong> > <strong>is equal to</strong> >  <strong>Employee Bios</strong></li>
        </ul>
    </li>
    <hr/>
    <li>Click on the menu <strong>Employee Bios</strong> > Add New</li>
    <li>Fill out the form Employee Bios and hit the Button <strong>Publish</strong></li>
    <hr/>
    <li>Now You can put this Shortcode <strong>[employee-biography id="XX"]</strong> and change the "XX" for the ID of the employee You already registered on any page or post and the Employee Biography will be rendered</li>
</ol>
<?php echo '</div>';
?>
