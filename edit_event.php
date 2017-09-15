<?php
    if (isset($_POST['inscription'])) {
        $events[] = array(
            'name' => isset($_POST['inscription']['name']) ? $_POST['inscription']['name'] : '',
            'address' => isset($_POST['inscription']['address']) ? $_POST['inscription']['address'] : '',
            'phone' => isset($_POST['inscription']['phone']) ? $_POST['inscription']['phone'] : '',
            'type' => $eventTypes[isset($_POST['inscription']['name']) ? $_POST['inscription']['type'] : 1],
            'date' => isset($_POST['inscription']['date']) ? $_POST['inscription']['date'] : '',
            'hour' => isset($_POST['inscription']['hour']) ? $_POST['inscription']['hour'] : '',
        );

        header('Location: /?page=home');
    }
?>

<form method="POST" action="index.php?page=edit_event"  style="text-align:center;">
    <h1>Événement</h1>
    <div class="form_1" >
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Nom" name="inscription[name]">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="where" placeholder="Lieu" name="inscription[address]">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="address" placeholder="Adresse" name="inscription[address]">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Telephone" name="inscription[phone]">
        </div>
    </div>
    <div class="form-group">
        <select class="form-control" name="inscription[type]">
            <option value="0">Categories</option>
            <?php foreach ($eventTypes as $key => $type) : ?>
                <option value="<?php echo $key; ?>"><?php echo $type; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" name="inscription[business]">
            <option value="0">Métier</option>
            <?php foreach ($eventBusiness as $key => $business) : ?>
                <option value="<?php echo $key; ?>"><?php echo $business; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <input class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>" name="inscription[date]">
    </div>
    <div class="form-group">
        <input class="form-control" type="time" value="<?php echo date("H:i"); ?>" name="inscription[hour]">
    </div>
    <button type="submit" class="btn btn-default" style="margin-top:5px;">Créer</button>
</form>