<?php 


?>

<html>
<body>
<div class="formEntete ui-corner-all">
<div id="form-content">  
      <div class="field field-type-hidden">
        <div class="form-content">
<input type="hidden" name="lib_scan_pdf" id="lib_scan_pdf"  value="" class="champFormulaire" />
        </div>

      </div>
      <div class="field field-type-hidden">
        <div class="form-content">
			<input type="hidden" name="courrier" id="courrier"  value="" class="champFormulaire" onchange="VerifNum(this)" />
        </div>
      </div>
      <div class="field field-type-hidden">
        <div class="form-content">
<input type="hidden" name="registre" id="registre"  value="" class="champFormulaire" />
        </div>

      </div>
      <fieldset id="fieldset-form-courrier_arrivee-courrier" class="cadre ui-corner-all ui-widget-content collapsible">
        <legend class="ui-corner-all ui-widget-content ui-state-active">courrier        </legend>
        <div class="fieldsetContent">

     <div class="bloc group">
      <div class="field field-type-hiddenstatic">
        <div class="form-libelle">
          <label for="typecourrier" class="libelle-typecourrier" id="lib-typecourrier">
            Registre 
          </label>
        </div>
        <div class="form-content">
<input type="hidden" id="typecourrier" name="typecourrier" value="arrivee" class="champFormulaire" />
arrivee
        </div>

      </div>
      <div class="field field-type-hidden">
        <div class="form-content">
<input type="hidden" name="repondre" id="repondre"  value="" class="champFormulaire" />
        </div>

      </div>
      <div class="field field-type-select">
        <div class="form-libelle">
          <label for="nature" class="libelle-nature" id="lib-nature">
            nature 
          </label>
        </div>
        <div class="form-content">
<select  name='nature'  id="nature"  size='1'  class="'champFormulaire" 
 >
    <option value="">Votre choix</option>
    <option value="CH">Chronopost</option>
    <option value="F">Fax</option>
    <option selected="selected" value="L">Lettre</option>
    <option value="LAR">Lettre A/R</option>
    <option value="MAIL">Email</option>
    <option value="TEL">T&eacute;l&eacute;copie</option>
    <option value="TLE">T&eacute;l&eacute;gramme</option>
</select>        </div>

      </div>
      </div>
          <div class="visualClear"><!-- --></div>
        </div>
      </fieldset>
      <fieldset id="fieldset-form-courrier_arrivee-horodatage" class="cadre ui-corner-all ui-widget-content ">
        <legend class="ui-corner-all ui-widget-content ui-state-active">Horodatage        </legend>
        <div class="fieldsetContent">

     <div class="bloc group">
      <div class="field field-type-date">
        <div class="form-libelle">
          <label for="datearrivee" class="libelle-datearrivee" id="lib-datearrivee">
            Arrivé le  <span class="not-null-tag">*</span>
          </label>
        </div>
        <div class="form-content">
<input type="text" name="datearrivee" id="datearrivee"  value="14/04/2017" size="20" maxlength="10" class="champFormulaire datepicker" onchange="fdate(this)" onkeyup="" onclick="" />
        </div>

      </div>
      <div class="field field-type-date">
        <div class="form-libelle">
          <label for="datecourrier" class="libelle-datecourrier" id="lib-datecourrier">
            du  <span class="not-null-tag">*</span>
          </label>
        </div>
        <div class="form-content">
<input type="text" name="datecourrier" id="datecourrier"  value="" size="20" maxlength="10" class="champFormulaire datepicker" onchange="fdate(this)" onkeyup="" onclick="" />
        </div>

      </div>
      </div>
          <div class="visualClear"><!-- --></div>
        </div>
      </fieldset>
      <fieldset id="fieldset-form-courrier_arrivee-correspondant" class="cadre ui-corner-all ui-widget-content ">
        <legend class="ui-corner-all ui-widget-content ui-state-active">correspondant        </legend>
        <div class="fieldsetContent">

     <div class="bloc col_3">
      <div class="field field-type-comboD">
        <div class="form-libelle">
          <label for="emetteur" class="libelle-emetteur" id="lib-emetteur">
            code 
          </label>
        </div>
        <div class="form-content">
<input type="text" name="emetteur"  id="emetteur" value=""  autocomplete="off" size="11" maxlength="11" onchange="VerifNum(this)" class="champFormulaire combod" />
<a class="combod ui-state-default ui-corner-all" href="javascript:vcorrel('emetteur','s1','&amp;table=emetteur&amp;correl=emetteurnom&amp;zorigine=emetteur&amp;zcorrel=emetteurnom&amp;correl2=');">
<span class="ui-icon ui-icon-circle-arrow-e" title="Cliquer ici pour corréler">-> Corréler</span></a>
        </div>

      </div>
      </div>

     <div class="bloc col_9">
      <div class="field field-type-select">
        <div class="form-libelle">
          <label for="civilite" class="libelle-civilite" id="lib-civilite">
            Civilité
          </label>
        </div>
        <div class="form-content">
<select name='civilite'  id="civilite" size='1' onchange="VerifNum(this)"  class="'champFormulaire" 
 >
    <option selected="selected" value="">choisir&nbsp;Civilité</option>
    <option value="6">Docteur</option>
    <option value="3">Madame</option>
    <option value="4">Mademoiselle</option>
    <option value="7">Maître</option>
    <option value="2">Messieurs</option>
    <option value="1">Monsieur</option>
    <option value="8">Professeur</option>
    <option value="5">Veuve</option>
</select>        </div>

      </div>
      <div class="field field-type-hiddenstatic">
        <div class="form-libelle">
          <label for="vide0" class="libelle-vide0" id="lib-vide0">
             
          </label>
        </div>
        <div class="form-content">
<input type="hidden" id="vide0" name="vide0" value="" class="champFormulaire" />

        </div>

      </div>
      <div class="field field-type-comboG">
        <div class="form-libelle">
          <label for="emetteurnom" class="libelle-emetteurnom" id="lib-emetteurnom">
             Nom <span class="not-null-tag">*</span>
          </label>
        </div>
        <div class="form-content">
<a class="combog ui-state-default ui-corner-all" href="javascript:vcorrel('emetteurnom','s1','&amp;table=emetteur&amp;correl=emetteur&amp;zorigine=emetteurnom&amp;zcorrel=emetteur&amp;correl2=');">
<span class="ui-icon ui-icon-circle-arrow-w" title="Cliquer ici pour corréler"><- Corréler</span></a>
<input type="text"  autocomplete="off" name="emetteurnom"  id="emetteurnom" value="" size="50" maxlength="100" onchange="this.value=this.value.toUpperCase()" class="champFormulaire combog" />
        </div>

      </div>
      <div class="field field-type-hiddenstatic">
        <div class="form-libelle">
          <label for="vide1" class="libelle-vide1" id="lib-vide1">
             
          </label>
        </div>
        <div class="form-content">
<input type="hidden" id="vide1" name="vide1" value="" class="champFormulaire" />

        </div>

      </div>
      <div class="field field-type-comboG">
        <div class="form-libelle">
          <label for="emetteurprenom" class="libelle-emetteurprenom" id="lib-emetteurprenom">
             Prénom
          </label>
        </div>
        <div class="form-content">
<a class="combog ui-state-default ui-corner-all" href="javascript:vcorrel('emetteurprenom','s1','&amp;table=emetteur&amp;correl=emetteur&amp;zorigine=emetteurprenom&amp;zcorrel=emetteur&amp;correl2=');">
<span class="ui-icon ui-icon-circle-arrow-w" title="Cliquer ici pour corréler"><- Corréler</span></a>
<input type="text"  autocomplete="off" name="emetteurprenom"  id="emetteurprenom" value="" size="50" maxlength="100" onchange="" class="champFormulaire combog" />
        </div>

      </div>
      <div class="field field-type-hiddenstatic">
        <div class="form-libelle">
          <label for="vide2" class="libelle-vide2" id="lib-vide2">
             
          </label>
        </div>
        <div class="form-content">
<input type="hidden" id="vide2" name="vide2" value="" class="champFormulaire" />

        </div>

      </div>
      <div class="field field-type-comboG">
        <div class="form-libelle">
          <label for="emetteurad1" class="libelle-emetteurad1" id="lib-emetteurad1">
             Adresse
          </label>
        </div>
        <div class="form-content">
<a class="combog ui-state-default ui-corner-all" href="javascript:vcorrel('emetteurad1','s1','&amp;table=emetteur&amp;correl=emetteur&amp;zorigine=emetteurad1&amp;zcorrel=emetteur&amp;correl2=');">
<span class="ui-icon ui-icon-circle-arrow-w" title="Cliquer ici pour corréler"><- Corréler</span></a>
<input type="text"  autocomplete="off" name="emetteurad1"  id="emetteurad1" value="" size="50" maxlength="40" onchange="" class="champFormulaire combog" />
        </div>

      </div>
      <div class="field field-type-hiddenstatic">
        <div class="form-libelle">
          <label for="vide3" class="libelle-vide3" id="lib-vide3">
             
          </label>
        </div>
        <div class="form-content">
<input type="hidden" id="vide3" name="vide3" value="" class="champFormulaire" />

        </div>

      </div>
      <div class="field field-type-comboG">
        <div class="form-libelle">
          <label for="emetteurad2" class="libelle-emetteurad2" id="lib-emetteurad2">
             
          </label>
        </div>
        <div class="form-content">
<a class="combog ui-state-default ui-corner-all" href="javascript:vcorrel('emetteurad2','s1','&amp;table=emetteur&amp;correl=emetteur&amp;zorigine=emetteurad2&amp;zcorrel=emetteur&amp;correl2=');">
<span class="ui-icon ui-icon-circle-arrow-w" title="Cliquer ici pour corréler"><- Corréler</span></a>
<input type="text"  autocomplete="off" name="emetteurad2"  id="emetteurad2" value="" size="50" maxlength="40" onchange="" class="champFormulaire combog" />
        </div>

      </div>
      <div class="field field-type-comboG">
        <div class="form-libelle">
          <label for="emetteurcp" class="libelle-emetteurcp" id="lib-emetteurcp">
             CP
          </label>
        </div>
        <div class="form-content">
<a class="combog ui-state-default ui-corner-all" href="javascript:vcorrel('emetteurcp','s1','&amp;table=emetteur&amp;correl=emetteur&amp;zorigine=emetteurcp&amp;zcorrel=emetteur&amp;correl2=');">
<span class="ui-icon ui-icon-circle-arrow-w" title="Cliquer ici pour corréler"><- Corréler</span></a>
<input type="text"  autocomplete="off" name="emetteurcp"  id="emetteurcp" value="" size="10" maxlength="5" onchange="" class="champFormulaire combog" />
        </div>

      </div>
      <div class="field field-type-comboG">
        <div class="form-libelle">
          <label for="emetteurville" class="libelle-emetteurville" id="lib-emetteurville">
             Ville
          </label>
        </div>
        <div class="form-content">
<a class="combog ui-state-default ui-corner-all" href="javascript:vcorrel('emetteurville','s1','&amp;table=emetteur&amp;correl=emetteur&amp;zorigine=emetteurville&amp;zcorrel=emetteur&amp;correl2=');">
<span class="ui-icon ui-icon-circle-arrow-w" title="Cliquer ici pour corréler"><- Corréler</span></a>
<input type="text"  autocomplete="off" name="emetteurville"  id="emetteurville" value="" size="30" maxlength="40" onchange="" class="champFormulaire combog" />
        </div>

      </div>
      <div class="field field-type-hiddenstatic">
        <div class="form-libelle">
          <label for="vide6" class="libelle-vide6" id="lib-vide6">
             
          </label>
        </div>
        <div class="form-content">
<input type="hidden" id="vide6" name="vide6" value="" class="champFormulaire" />

        </div>

      </div>
      <div class="field field-type-select">
        <div class="form-libelle">
          <label for="type_correspondant" class="libelle-type_correspondant" id="lib-type_correspondant">
            Type de correspondant
          </label>
        </div>
        <div class="form-content">
<select name='type_correspondant'  id="type_correspondant" size='1' onchange="VerifNum(this)"  class="'champFormulaire" 
 >
    <option selected="selected" value="">choisir&nbsp;Type de correspondant</option>
    <option value="2">Administration</option>
    <option value="5">Administré</option>
    <option value="4">Assurance</option>
    <option value="1">Avocat</option>
    <option value="3">Entreprise</option>
    <option value="6">Huissier</option>
</select>        </div>

      </div>
      </div>

     <div class="bloc col_3">
      <div class="field field-type-checkbox">
        <div class="form-libelle">
          <label for="vide5" class="libelle-vide5" id="lib-vide5">
            sauvegarde du correspondant
          </label>
        </div>
        <div class="form-content">
<input type="checkbox" name="vide5" id="vide5"  value="" size="-2" maxlength="-2" class="champFormulaire" onchange="changevaluecheckbox(this);" />
        </div>

      </div>
      </div>
          <div class="visualClear"><!-- --></div>
        </div>
      </fieldset>
      <fieldset id="fieldset-form-courrier_arrivee-dyotails" class="cadre ui-corner-all ui-widget-content collapsible">
        <legend class="ui-corner-all ui-widget-content ui-state-active">Détails        </legend>
        <div class="fieldsetContent">
      <div class="field field-type-textarea">
        <div class="form-libelle">
          <label for="objetcourrier" class="libelle-objetcourrier" id="lib-objetcourrier">
             objet  <span class="not-null-tag">*</span>
          </label>
        </div>
        <div class="form-content">
<textarea name="objetcourrier" id="objetcourrier"  cols="92" rows="2" class="champFormulaire">
</textarea>
        </div>

      </div>
      <div class="field field-type-httpclick">
        <div class="form-libelle">
          <label for="bible" class="libelle-bible" id="lib-bible">
             
          </label>
        </div>
        <div class="form-content">
<a href='#' onclick="bible()" >Bible</a>
        </div>

      </div>
      <div class="field field-type-select">
        <div class="form-libelle">
          <label for="categorie_courrier" class="libelle-categorie_courrier" id="lib-categorie_courrier">
            Catégorie des courriers
          </label>
        </div>
        <div class="form-content">
<select name='categorie_courrier'  id="categorie_courrier" size='1' onchange="VerifNum(this)"  class="'champFormulaire" 
 >
    <option selected="selected" value="">choisir&nbsp;Catégorie des courriers</option>
    <option value="4">Anciens combattants</option>
    <option value="5">Associations</option>
    <option value="2">Assurances</option>
    <option value="6">Autre</option>
    <option value="3">Buvette</option>
    <option value="1">Signale</option>
</select>        </div>

      </div>
          <div class="visualClear"><!-- --></div>
        </div>
      </fieldset>
      <fieldset id="fieldset-form-courrier_arrivee-traitement" class="cadre ui-corner-all ui-widget-content collapsible">
        <legend class="ui-corner-all ui-widget-content ui-state-active">Traitement        </legend>
        <div class="fieldsetContent">
      <div class="field field-type-select">
        <div class="form-libelle">
          <label for="traitement" class="libelle-traitement" id="lib-traitement">
             service  <span class="not-null-tag">*</span>
          </label>
        </div>
        <div class="form-content">
<select name='traitement'  id="traitement" size='1' onchange="VerifNum(this)"  class="'champFormulaire" 
 >
    <option selected="selected" value="">choisir&nbsp;Traitement</option>
    <option value="8">Accueils Périscolaires</option>
    <option value="10">Bibliothèque Municipale</option>
    <option value="9">Bureau d'Étude</option>
    <option value="11">Centre Technique Municipal (Services Tec</option>
    <option value="4">Direction de la Culture et du Patrimoine</option>
    <option value="3">Direction de l'Aménagement Urbain</option>
    <option value="5">Direction de l'Éducation et des Sports</option>
    <option value="2">Direction des Affaires Générales</option>
    <option value="12">Direction des Ressources Humaines</option>
    <option value="6">Direction Générale</option>
    <option value="13">Piscine</option>
    <option value="14">Restauration Scolaire</option>
    <option value="21">Secrétariat du Maire</option>
    <option value="19">Secrétariat Général</option>
    <option value="17">Service Communication et Evénementiel</option>
    <option value="16">Service Culturel</option>
    <option value="23">Service des Sports</option>
    <option value="18">Service Finances</option>
    <option value="20">Service Informatique</option>
    <option value="22">Service Population / Etat-Civil / Cimeti</option>
    <option value="15">Services Administratifs</option>
    <option value="24">Service Urbanisme</option>
    <option value="1">Tous service</option>
    <option value="7">Transports Publics et Scolaires</option>
</select>        </div>

      </div>
      <div class="field field-type-text">
        <div class="form-libelle">
          <label for="referent" class="libelle-referent" id="lib-referent">
            Référent
          </label>
        </div>
        <div class="form-content">
<input type="text" name="referent" id="referent"  value="" size="30" maxlength="70" class="champFormulaire" />
        </div>

      </div>
          <div class="visualClear"><!-- --></div>
        </div>
      </fieldset>
      <fieldset id="fieldset-form-courrier_arrivee-diffusion" class="cadre ui-corner-all ui-widget-content startClosed">
        <legend class="ui-corner-all ui-widget-content ui-state-active">Diffusion        </legend>
        <div class="fieldsetContent">

     <div class="bloc col_12">

     <div class="bloc col_4">
      <div class="field field-type-select">
        <div class="form-libelle">
          <label for="service" class="libelle-service" id="lib-service">
            service(s)
          </label>
        </div>
        <div class="form-content">
<select  name='service'  id="service"  size='1'  class="'champFormulaire" 
 >
    <option selected="selected" value="">choix service</option>
    <option value="8">Accueils Périscolaires</option>
    <option value="10">Bibliothèque Municipale</option>
    <option value="9">Bureau d'Étude</option>
    <option value="11">Centre Technique Municipal (Services Tec</option>
    <option value="4">Direction de la Culture et du Patrimoine</option>
    <option value="3">Direction de l'Aménagement Urbain</option>
    <option value="5">Direction de l'Éducation et des Sports</option>
    <option value="2">Direction des Affaires Générales</option>
    <option value="12">Direction des Ressources Humaines</option>
    <option value="6">Direction Générale</option>
    <option value="13">Piscine</option>
    <option value="14">Restauration Scolaire</option>
    <option value="21">Secrétariat du Maire</option>
    <option value="19">Secrétariat Général</option>
    <option value="17">Service Communication et Evénementiel</option>
    <option value="16">Service Culturel</option>
    <option value="23">Service des Sports</option>
    <option value="18">Service Finances</option>
    <option value="20">Service Informatique</option>
    <option value="22">Service Population / Etat-Civil / Cimeti</option>
    <option value="15">Services Administratifs</option>
    <option value="24">Service Urbanisme</option>
    <option value="1">Tous service</option>
    <option value="7">Transports Publics et Scolaires</option>
</select>        </div>

      </div>
      </div>

     <div class="bloc col_4">
      <div class="field field-type-textareamulti">
        <div class="form-libelle">
          <label for="diffusion" class="libelle-diffusion" id="lib-diffusion">
            
          </label>
        </div>
        <div class="form-content">
<input type="button" onclick="selectauto('diffusion','service')" value="->"  class="boutonmulti" />
<textarea name="diffusion" id="diffusion"  cols="40" rows="3" class="champFormulaire champmulti">
</textarea>
        </div>

      </div>
      </div>
      </div>
      <div class="field field-type-hidden">
        <div class="form-content">
<input type="hidden" name="liste_elu" id="liste_elu"  value="" class="champFormulaire" />
        </div>

      </div>
      <div class="field field-type-hidden">
        <div class="form-content">
<input type="hidden" name="copiea" id="copiea"  value="" class="champFormulaire" />
        </div>

      </div>
          <div class="visualClear"><!-- --></div>
        </div>
      </fieldset>
      <div class="field field-type-hidden">
        <div class="form-content">
<input type="hidden" name="pj" id="pj"  value="" class="champFormulaire" />
        </div>

      </div>
      <div class="field field-type-hidden">
        <div class="form-content">
<input type="hidden" name="liaison" id="liaison"  value="" class="champFormulaire" onchange="VerifNum(this)" />
        </div>

      </div>
      <div class="field field-type-hidden">
        <div class="form-content">
<input type="hidden" name="nbtache" id="nbtache"  value="0" class="champFormulaire" onchange="VerifNum(this)" />
        </div>

      </div>
</div>
</div>
<!-- ########## END FORMULAIRE ########## -->

</body>
</html>