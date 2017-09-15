<h1>Pro'ximité</h1>


<div id="events-container">
    <?php foreach ($events as $event) : ?>
        <div class="event">
            <div class="event-name">
                <?php echo $event['name']; ?>
            </div>
            <div class="event-top">
                <div class="event-top-left">
                    <div class="event-date">

                    </div>
                </div>
                <div class="event-top-right">

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
