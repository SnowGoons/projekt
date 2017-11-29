<html>
<head>
<title>Rejestracja</title>
</head>
<body>

  <?php echo validation_errors(); ?>
  <?php echo form_open('rejestracja'); ?>

  <h5>Nick</h5>
  <input type="text" name="nick" value="<?php set_value('nick'); ?>" size="16" />

  <h5>Haslo</h5>
  <input type="text" name="haslo" value="<?php set_value('haslo'); ?>" size="12" />

  <h5>Potwierdz Haslo</h5>
  <input type="text" name="potwhaslo" value="<?php set_value('potwhaslo'); ?>" size="12" />

  <h5>Adres Email</h5>
  <input type="text" name="email" value="<?php set_value('email'); ?>" size="50" />

  <h5>Imie</h5>
  <input type="text" name="imie" value="<?php set_value('imie'); ?>" size="16" />

  <h5>Nazwisko</h5>
  <input type="text" name="nazwisko" value="<?php set_value('nazwisko'); ?>" size="50" />

  <h5>Kod Pocztowy</h5>
  <input type="text" name="kodpocz" value="<?php set_value('kodpocz'); ?>" size="6" />

  <h5>Miejscowosc</h5>
  <input type="text" name="miasto" value="<?php set_value('miasto'); ?>" size="50" />

  <h5>Ulica</h5>
  <input type="text" name="ulica" value="<?php set_value('ulica'); ?>" size="32" />

  <div><input type="submit" name="Submit" /></div>

</form>
</body>
</html>
