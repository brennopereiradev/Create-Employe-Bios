<?php
$person_name = get_field( 'person_name', $employee_bio );
$person_image = get_field( 'person_image', $employee_bio );
$position_title = get_field( 'position_title', $employee_bio );
$division_title = get_field( 'division_title', $employee_bio );
$division_logo = get_field( 'division_logo', $employee_bio );
$how_long_with_company = get_field( 'how_long_with_the_company', $employee_bio );
$bio_text = get_field( 'bio_text', $employee_bio );
?>

<div class="employee-bio">
    <div class="employee-header">
        <?php if ( $person_image ) : ?>
            <img src="<?php echo esc_url( $person_image['url'] ); ?>" alt="<?php echo esc_attr( $person_name ); ?>">
        <?php endif; ?>
        <div class="employee-title">
            <h1><?php echo esc_html( $person_name ); ?></h1>
            <h2><?php echo esc_html( $position_title ); ?></h2>
        </div>
    </div>

    <div class="employee-details">
        <div class="sub-title">Division:</div>
        <div> <?php echo esc_html( $division_title ); ?></div>
        <div class="sub-title">Division Logo:</div>
        <div>
            <?php if ( $division_logo ) : ?>
                <img src="<?php echo esc_url( $division_logo['url'] ); ?>" alt="<?php echo esc_attr( $division_title ); ?>">    
            <?php endif; ?>
        </div>
        <div class="sub-title">How long working on company:</div>
        <div><?php echo esc_html( $how_long_with_company ); ?> Years</div>
        <div class="sub-title">Bio Information</div>
        <div><?php echo esc_html( $bio_text ); ?></div>
    </div>
    <div class="employee-footer"></div>
</div>
