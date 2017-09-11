<!-- This file is used to markup the public-facing widget. -->
<div class="vatjss-business-hours">
  <div class="vatjss-hours">
    <?php if ( strlen( trim( $monday)) > 0 ) : ?>
    <p>
      <span class="day-of-the-week vatjss-text-uppercase">Monday:</span> <?php echo $monday; ?>
    </p>
    <?php endif; ?>

    <?php if ( strlen( trim( $tuesday_friday)) > 0 ) : ?>
    <p>
      <span class="day-of-the-week vatjss-text-uppercase">Tuesday-Friday:</span> <?php echo $tuesday_friday; ?>
    </p>
    <?php endif; ?>

    <?php if ( strlen( trim( $wednesday)) > 0 ) : ?>
    <p>
      <span class="day-of-the-week vatjss-text-uppercase">Wednesday:</span> <?php echo $wednesday; ?>
    </p>
    <?php endif; ?>

    <?php if ( strlen( trim( $saturday_sunday)) > 0 ) : ?>
    <p>
      <span class="day-of-the-week vatjss-text-uppercase">Saturday-Sunday:</span> <?php echo $saturday_sunday; ?>
    </p>
    <?php endif; ?>
    </div> 
    <?php if ( strlen( trim( $address)) > 0 ) : ?>
      <div class="vatjss-widget-address">
        <p>
          <span class="widget_address">Address:</span> <?php echo $address; ?>
        </p>
      </div>
</div>
<?php endif; ?>