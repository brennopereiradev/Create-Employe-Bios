## Settings - How to setup the Employees Bio Plugin

### Steps

1. Go to the plugins menu and upload, install and activate the plugin Employee Bios (zonda_employee_bio-main.zip)

2. Install the free version of the plugin ACF (Advanced Custom Fields) - ACF-Plugin

3. Click on: ACF > Field Groups menu and create a group called Employee Bios

    #### Create the fields:

    ##### Field name: person_name | Type: text | Validation: Required
    ##### Field name: person_image | Type: image | Validation: Required
    ##### Field name: position_title | Type: text | Validation: Required
    ##### Field name: division_title | Type: text | Validation: Required
    ##### Field name: division_logo | Type: text | Validation: Optional
    ##### Field name: how_long_with_the_company | Type: text | Validation: Required
    ##### In Settings > Location Rules > Rules set:
    ##### Show this field group if to Post Type > is equal to > Employee Bios

4. Click on the menu Employee Bios > Add New
5. Fill out the form Employee Bios and hit the Button Publish

6. Now You can put this Shortcode [employee-biography id="XX"] and change the "XX" for the ID of the employee You already registered on any page or post and the Employee Biography will be rendered
