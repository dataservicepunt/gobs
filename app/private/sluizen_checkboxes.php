<?php
  $sluizen = json_decode(file_get_contents(__DIR__ . "/mapping_from_specs/mapping_sluizen.json"), true);
  foreach ($sluizen as $id => $sluis) {
    if (!empty($sluis["communicatie_naam"])) {
?>
    <label>
      <input type="checkbox" name="objecten[]" value="<?php echo $id; ?>">
      <?php echo $sluis["communicatie_naam"]; ?>
    </label>
    <br>
<?php
    } // if
  } // foreach
