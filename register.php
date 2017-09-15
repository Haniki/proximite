<form method="POST" action="index.php?page=signup"  style="text-align:center;" enctype="multipart/form-data">
<h1>Créer votre profil</h1>
    <div class="form_1" >
        <div class="form-group">
            <label for="prenom"></label>
            <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="inscription[prenom]">
        </div>
        <div class="form-group">
            <label for="nom"></label>
            <input type="text" class="form-control" id="nom" placeholder="Nom" name="inscription[nom]">
        </div>
        <div class="form-group">
            <label for="ville"></label>
            <input type="text" class="form-control" id="ville" placeholder="Ville" name="inscription[ville]">
        </div>
    </div>
    <div class="form-group">
        <select class="form-control" name="inscription[business]">
            <option value="0">Métier</option>
            <?php foreach ($eventBusiness as $key => $business) : ?>
                <option value="<?php echo $key; ?>"><?php echo $business; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group" style="margin-top:20px;">
        <img style="margin-right:5px;" src="img/mbp.png" alt="" width="40"/>
        <label for="photo" style="color:#000;font-weight: 500;">Choisissez un avatar</label>
        <input type="file" id="photo" name="image" style="display:none;">
    </div>
    <button type="submit" class="btn btn-default" style="margin-top:5px;">Créer</button>
</form>
<br />
<center style="background:rgba(255,255,255,0.5);padding:10px 20px 20px;">
    <h2 style="margin-top:10px;margin-bottom:0;font-size:28px;">Déja inscrit ?</h2>
    <br />
    <a href="" title="">Me connecter</a>
</center>
