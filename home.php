<h1>Pro'ximité</h1>

<div id="events-container" style="border: 1px solid #e3e3e3;">
    <?php foreach ($_SESSION['data']['events'] as $key => $event) : ?>
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
                    <p><b> <?php echo count($event['participants']); ?> participants</b></p>
                    <?php foreach ($event['participants'] as $userId) : ?>
                        <img src="<?php echo $_SESSION['data']['users'][$userId]['avatar'];?>" width="50" height="50" >
                    <?php endforeach; ?>
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
                <button type="button" data-in="<?php echo in_array($_SESSION['current_user']['id'], $_SESSION['data']['events'][$key]['participants']) ? 1 : 0;?>" data-creator="<?php echo $_SESSION['current_user']['id']; ?>" data-event-id="<?php echo $key; ?>" class="participate btn btn-default" style="width: 100%; background-color:#309ab5; border-radius:2px; border: none; color:#FFFFFF; font-family: 'Raleway'"><?php echo in_array($_SESSION['current_user']['id'], $_SESSION['data']['events'][$key]['participants']) ? 'SE DÉSINSCRIRE' : "                    HIGH FIVE !
";?></button>
            </div
        </div>
    <?php endforeach; ?>
</div>

<script type="application/javascript">
    $(document).ready(function () {
        $button = $('.participate');
        $button.on('click', function (event) {
            event.preventDefault();
            var id = $button.data('event-id');
            var creator = $button.data('creator');
            var inEvent = $button.data('in');
            $.ajax({
                url: 'participate.php?creator=' + creator + '&event=' + id + '&in=' + inEvent,
                type: 'GET',
                success: function (data) {
                document.location.reload();
            }
            })
        })
    })
</script>