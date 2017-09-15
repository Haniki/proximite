<form method="POST" action="index.php?page=signup"  style="text-align:center;" enctype="multipart/form-data">
<h1>Créer votre profil</h1>
    <div class="form_1" >
        <div class="form-group" style="margin-left:5%;">
            <label for="prenom"></label>
            <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="inscription[prenom]">
        </div>
        <div class="form-group" style="margin-left:5%;">
            <label for="nom"></label>
            <input type="text" class="form-control" id="nom" placeholder="Nom" name="inscription[nom]">
        </div>
        <div class="form-group" style="margin-left:5%;">
            <label for="ville"></label>
            <input type="text" class="form-control" id="ville" placeholder="Ville" name="inscription[ville]">
        </div>
    </div>
    <div class="form-group" style="margin-top:10px;">
        <select class="form-control" name="inscription[poste]">
            <optgroup label="Administration">
            <option value="9">Directeur général</option>
            <option value="4">Comptable</option>
            <option value="5">Assistant de direction</option>
            <option value="7">Direction administrative</option>
            <option value="10">Responsable RH</option>
            <optgroup label="Editorial">
            <option value="8">Rédacteur web</option>
            <optgroup label="Gestion / management">
            <option value="6">Chef de produit</option>
            <option value="2">Chef de projet</option>
            <option value="2">QA</option>
            <optgroup label="Technique">
            <option value="1">Développeur web</option>
            <option value="3">Intégrateur web </option>
                <optgroup label="Juridique">
            <option value="1">Juriste</option>
            <option value="3">Avocat</option>
        </select>
    </div>
    <div class="form-group" style="margin-top:20px;">
        <img style="margin-right:5px;" src="img/mbp.png" alt="" width="40"/>
        <label for="photo" style="color:#000;font-weight: 500;">Une petite photo ?</label>
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
