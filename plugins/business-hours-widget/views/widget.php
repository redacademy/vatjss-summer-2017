<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $monday)) > 0 ) : ?>
<p>
  <span class="day-of-the-week">Monday:</span> <?php echo $monday; ?>
</p>
<?php endif; ?>

<?php if ( strlen( trim( $tuesday_friday)) > 0 ) : ?>
<p>
  <span class="day-of-the-week">Tuesday - Friday:</span> <?php echo $tuesday_friday; ?>
</p>
<?php endif; ?>

<?php if ( strlen( trim( $wednesday)) > 0 ) : ?>
<p>
  <span class="day-of-the-week">Wednesday:</span> <?php echo $wednesday; ?>
</p>
<?php endif; ?>

<?php if ( strlen( trim( $saturday_sunday)) > 0 ) : ?>
<p>
  <span class="day-of-the-week">Saturday - Sunday:</span> <?php echo $saturday_sunday; ?>
</p>
<?php endif; ?>