<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 05:35
 */
?>

<ul class="<?php echo $parentclass; ?>">';
<?php foreach( $items as $name => $value) { ?>
    <li class="<?php echo $childclass; ?>_<?php echo $name; ?>"><?php echo $value; ?></li>
<?php } ?>
</ul>
