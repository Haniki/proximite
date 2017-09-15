<h1>Pro'ximité</h1>

<div id="events-container" style="border: 1px solid #e3e3e3;">
    <?php foreach ($events as $event) : ?>
        <div class="row">
            <div class="col-xs-12" style="border-bottom: 1px solid #e3e3e3; padding: 0;">
                <div class="col-xs-12">
                    <div class="col-xs-7" style="padding-left: 15px; padding-right: 0px">
                        <div class="col-xs-12" style="padding: 0px; font-family: 'Raleway'">
                            <h3><?php echo $event['name']; ?></h3>
                        </div>
                        <br>
                        <div class="col-xs-12" style="padding: 0px">
                            <div class="col-xs-6" style="padding: 0px; font-family: 'Raleway'">
                                <?php echo $event['date']; ?>
                            </div>
                            <div class="col-xs-6" style="padding: 0px; text-align: center; font-family: 'Raleway'">
                                <?php echo $event['hour']; ?>
                            </div>
                        </div>
                        <br>
                        <div class="col-xs-12" style="padding: 0px; font-family: 'Raleway'">
                            <?php echo $event['type']; ?> - <?php echo $event['business']; ?>
                        </div>
                        <br>
                        <div class="col-xs-12" style="padding: 0px; ; font-family: 'Raleway'">
                            <b><?php echo $event['where']; ?></b><br>
                            <?php echo $event['address']; ?><br>
                            <b><?php echo $event['phone']; ?></b>
                        </div>
                    </div>
                    <div class="col-xs-5" style="padding: 0px;">
                        <div class="col-xs-12" style="background-color: #e3e3e3; text-align: center; padding: 0px; font-family: 'Raleway'">
                            <div style="padding-bottom: 10px">
                                <img src="<?php echo 'img/escale.jpg'; ?>" width="160" height="140" />
                            </div>
                            <div style="padding-bottom: 20px">
                                <p><b>Organisateur</b></p>
                                <img src="<?php echo 'img/'.$event['avatar_owner']; ?>" width="50" height="50" />
                            </div>
                        </div>
                    </div>
                </div
            </div>
            <br>
            <div class="col-xs-12">
                <div class="col-xs-12">
                    <p><b>4 participants</b></p>
                    <?php for($i=0; $i< 4 ; $i++){?>
                        <img src="<?php echo 'img/'.$event['avatar_owner']; ?>" width="50" height="50" >
                    <?php }?>
                </div>
            </div>
            <br>
            <div class="col-xs-12">
                <div class="col-xs-12">
                    <p><b>Description</b></p>
                    <?php echo $event['description']; ?>
                </div
            </div>
        </div>
        <br>
        <div class="col-xs-12">
            <div class="col-xs-12">
                <button type="button" class="btn btn-default" style="width: 100%; background-color:#309ab5; border-radius:2px; border: none; color:#FFFFFF; font-family: 'Raleway'">
                    Rejoindre l'évènement
                </button>
            </div
        </div>
    <?php endforeach; ?>
</div>