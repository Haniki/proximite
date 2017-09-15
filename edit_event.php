<?php
    if (isset($_POST['inscription'])) {
        $ev = array(
            'name' => isset($_POST['inscription']['name']) ? $_POST['inscription']['name'] : '',
            'address' => isset($_POST['inscription']['address']) ? $_POST['inscription']['address'] : '',
            'phone' => isset($_POST['inscription']['phone']) ? $_POST['inscription']['phone'] : '',
            'type' => $eventTypes[isset($_POST['inscription']['name']) ? $_POST['inscription']['type'] : 1],
            'business' => $eventBusiness[isset($_POST['inscription']['business']) ? $_POST['inscription']['business'] : 1],
            'where' => isset($_POST['inscription']['where']) ? $_POST['inscription']['where'] : '',
            'date' => isset($_POST['inscription']['date']) ? $_POST['inscription']['date'] : '',
            'hour' => isset($_POST['inscription']['hour']) ? $_POST['inscription']['hour'] : '',
            'description' => isset($_POST['inscription']['description']) ? $_POST['inscription']['description'] : '',
            'participants' => array($_SESSION['current_user']['id']),
            'creator' => $_SESSION['current_user']['id'],
        );

        $_SESSION['data']['events'][] = $ev;

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
            <input type="text" class="form-control" id="where" placeholder="Lieu" name="inscription[where]">
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
    <div class="form-group col-xs-12" style="padding: 0;">
        <div class="col-xs-6" style="padding: 0;"><input class="form-control " type="date" value="<?php echo date("Y-m-d"); ?>" name="inscription[date]"></div>
        <div class="col-xs-6" style="padding: 0 2px;"><input class="form-control col-xs-6" type="time" value="<?php echo date("H:i"); ?>" name="inscription[hour]"></div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="inscription[description]"></textarea>
    </div>
    <button type="submit" class="btn btn-default" style="margin-top:5px;">Créer</button>
</form>