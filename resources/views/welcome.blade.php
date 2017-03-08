<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script
                src="https://code.jquery.com/jquery-3.1.1.slim.js"
                integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
                crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
        <form class="form-horizontal" method="post" action="/pdf">
            <fieldset>

                <!-- Form Name -->
                <legend>Fiche</legend>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Nom</label>
                    <div class="col-md-4">
                        <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="company">Société</label>
                    <div class="col-md-4">
                        <input id="company" name="company" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="phone">Numéro de téléphone</label>
                    <div class="col-md-4">
                        <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email</label>
                    <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <HR WIDTH="100%">

                <div class="form-group">
                    <label class="col-md-4 control-label" for="Stesak">Sexe</label>
                    <div class="col-md-4">
                        <select id="gender" name="gender" class="form-control">
                            <option value="1">M</option>
                            <option value="2">Mme</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Nom</label>
                    <div class="col-md-4">
                        <input id="name" name="customer_name" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="place">Fonction</label>
                    <div class="col-md-4">
                        <input id="place" name="place" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="events">Raison sociale</label>
                    <div class="col-md-4">
                        <input id="events" name="events" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Forme de société </label>
                    <div class="col-md-4">
                        <input id="sarl" name="sarl" type="text" placeholder="forme de société" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Capital social</label>
                    <div class="col-md-4">
                        <input id="capital" name="capital" type="text" placeholder="capital social" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Adresse (numéro, rue)</label>
                    <div class="col-md-4">
                        <input id="rue" name="rue" type="text" placeholder="Adresse (numéro, rue)" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Postal code</label>
                    <div class="col-md-4">
                        <input id="postal" name="postal" type="text" placeholder="Postal code" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Ville</label>
                    <div class="col-md-4">
                        <input id="city" name="city" type="text" placeholder="Ville" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">RCS de Ville</label>
                    <div class="col-md-4">
                        <input id="rcs" name="rcs" type="text" placeholder="RCS de Ville" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Numero Siren</label>
                    <div class="col-md-4">
                        <input id="siren" name="siren" type="text" placeholder="Numero Siren" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Nom du spectacle</label>
                    <div class="col-md-4">
                        <input id="spectacle" name="spectacle" type="text" placeholder="nom du spectacle" class="form-control input-md" required="">

                    </div>
                </div>

				<div class="form-group">
                    <label class="col-md-4 control-label" for="Stesak">Type de spectacle</label>
                    <div class="col-md-4">
                        <select id="Stesak" name="stesak" class="form-control">
                            <option value="les concerts et tours de chant">les concerts et tours de chant</option>
                            <option value="les spectacles d'humour entendus comme une suite de sketchs ou un récital parlé donné par un ou plusieurs artistes non interchangeables">les spectacles d'humour entendus comme une suite de sketchs ou un récital parlé donné par un ou plusieurs artistes non interchangeables</option>
                            <option value="les comédies musicales et les spectacles lyriques"> les comédies musicales et les spectacles lyriques</option>
                        </select>
                    </div>
                </div>

        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                    <thead>
                    <tr>
                        <th class="text-center" >
                            Artiste (ou groupe d'artistes) participant à ce spectacle
                        </th>
                        <th class="text-center">
                            Intitulé du spectacle
                        </th>
                        <th class="text-center">
                            Dates du spectacle
                        </th>
                        <th class="text-center">
                            Nombre d'entrées payantes
                        </th>
                        <th class="text-center">
                            Salle de spectacle
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td>
                            <input type="text" name='first_data[0][artist]' placeholder='' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='first_data[0][name]'  placeholder='' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='first_data[0][mail]' placeholder='' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='first_data[0][mobile]' placeholder='' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='first_data[0][lyov]' placeholder='' class="form-control"/>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a id="add_row" class="pull-left">Ajouter une représentation</a>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <table class="table table-bordered table-hover" id="actors">
                            <thead>
                           <tr>
                               <th colspan = 2 class="text-center">
                                   Dates prévisionnels du spectacle
                               </th>
                           </tr>
                            <tr>
                                <th class="text-center">
                                    DATE
                                </th>
                                <th class="text-center">
                                    LIEU
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id='salary0'>
                                <td>
                                    <input type="text" name='second_data[0][date]'  placeholder='JJ/MM/AAAA' class="form-control"/>
                                </td>
                                <td>
                                    <input type="text" name='second_data[0][address]' placeholder='' class="form-control"/>
                                </td>
                            </tr>
                            <tr id='salary1'></tr>
                            </tbody>
                        </table>
                        <a id="salary_add_row" class="pull-left">Ajouter une date</a>
                    </div>
                </div>
                <table class="table table-bordered table-hover" id="next_tab">
                    <thead>
                    <tr>
                        <th colspan = 2 class="text-center">
                            LES PRESTATAIRES TECHNIQUES PRESSENTIS

                        </th>
                    </tr>
                    <tr >
                        <th colspan="2" class="text-center">
                            PRESTATAIRE TECHNIQUE
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr id='next0'>
                    <tr>
                        <td>
                            Nom de la société
                        </td>
                        <td>
                            <input type="text" name='third_data[0][company]'  placeholder='Dénomination sociale de votre entreprise' class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Numéro Siret
                        </td>
                        <td>
                            <input type="text" name='third_data[0][company_code]'  placeholder='14 chiffres' class="form-control"/>
                        </td>
                    </tr>
                    <tr id='next1'></tr>
                    </tbody>
                </table>
                <a id="add_next_row" class="pull-left">Ajouter un prestataire</a>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <table class="table table-bordered table-hover" id="caxs_tab">
                            <thead>
                            <tr >
                                <th class="text-center" colspan="2">
                                    Frais liés à la création du spectacle
                                </th>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="2">
                                    <ul>
                                        <li>La masse salariale: veuillez indiquer les salaires bruts chargés du personnel permanent et non permanent liés directement à la création du spectacle,
                                        </li>
                                        <li>Autres dépenses liées à la création du spectacle : veuillez indiquer le montant hors taxe.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </thead>
                            <tbody id="caxs">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <table class="table table-bordered table-hover" id="caxs_tab">
                            <thead>
                            <tr >
                                <th class="text-center" colspan="2">
                                    Frais liés à l’exploitation et à la numérisation du spectacle
                                </th>
                             </tr>
                            <tr>
                                <td class="text-center" colspan="2">
                                    <ul>
                                        <li>La masse salariale : veuillez indiquer les salaires bruts chargés du personnel
                                            permanent et non permanent liées à l’exploitation et à la numérisation du
                                            spectacle
                                        </li>
                                        <li>Autres dépenses liées à l’exploitation et à la numérisation du spectacle :
                                            veuillez indiquer le montant hors taxe.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </thead>
                            <tbody id="myuscaxs">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-success">ENVOYER</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    </body>
</html>
<script>
    $(document).ready(function(){
        var i=1;
        var answers = ['Dirigeants', 'Directeurs artistiques', 'Directeurs de production', 'Directeurs musicaux', 'Directeurs de la communication ou des relations publiques', 'Directeurs de la commercialisation', 'Responsables des relations publiques ou de la communication', 'Administrateurs de production, de tournée ou de diffusion', 'Conseillers artistiques', 'Coordinateurs', 'Chargés de production, de diffusion ou de commercialisation', 'Répétiteurs', 'Collaborateurs artistiques', 'Attachés de production ou de diffusion', 'Attachés de presse ou de relations publiques', 'Responsables de la billetterie', 'Gestionnaires de billetterie', 'Responsables de placement', 'Chargés de réservation', "Attachés à l'accueil", "Agents de billetterie et d'accueil", 'Webmasters', 'Artistes', 'Techniciens', 'Graphiste', 'Créateur de costumes', 'Maquilleur', 'Habilleur', 'Coiffeur', 'Couturier', 'Accessoiriste', 'Créateur de décors', 'Créateur de lumières', "Créateur d'effets ou d'ambiances sonores", "Créateur de vidéo ou d'effets spéciaux", 'Metteur en scène', 'Chorégraphe', "Redevances versées aux sociétés de perception et de répartition des droits d'auteur au titre des représentations de spectacle", 'Frais de location de salles de répétition et de salles de spectacles', "Frais de location de matériels utilisés directement ou indirectement dans le cadre du spectacle ou à des fins d'accueil du public", "Frais d'achat du petit matériel utilisé dans le cadre du spectacle ou à des fins d'accueil du public", "Dotations aux amortissements, lorsqu'elles correspondent à des immobilisations corporelles ou incorporelles utilisées exclusivement dans le cadre du spectacle"];
        var answerssecond = ['Dirigeants', 'Directeurs artistiques', 'Directeurs de production', 'Directeurs musicaux', 'Directeurs de la communication ou des relations publiques', 'Directeurs de la commercialisation', 'Responsables des relations publiques ou de la communication', 'Administrateurs de production, de tournée ou de diffusion', 'Conseillers artistiques', 'Coordinateurs', 'Chargés de production, de diffusion ou de commercialisation', 'Répétiteurs', 'Collaborateurs artistiques', 'Attachés de production ou de diffusion', 'Attachés de presse ou de relations publiques', 'Responsables de la billetterie', 'Gestionnaires de billetterie', 'Responsables de placement', 'Chargés de réservation', "Attachés à l'accueil", "Agents de billetterie et d'accueil", 'Webmasters', 'Artistes', 'Techniciens', 'Graphiste', 'Créateur de costumes', 'Maquilleur', 'Habilleur', 'Coiffeur', 'Couturier', 'Accessoiriste', 'Créateur de décors', 'Créateur de lumières', "Créateur d'effets ou d'ambiances sonores", "Créateur de vidéo ou d'effets spéciaux", 'Metteur en scène', 'Chorégraphe', "Redevances versées aux sociétés de perception et de répartition des droits d'auteur au titre des représentations de spectacle", 'Frais de location de salles de répétition et de salles de spectacles', "Frais de location de matériels utilisés directement ou indirectement dans le cadre du spectacle ou à des fins d'accueil du public", "Frais d'achat du petit matériel utilisé dans le cadre du spectacle ou à des fins d'accueil du public", "Dotations aux amortissements, lorsqu'elles correspondent à des immobilisations corporelles ou incorporelles utilisées exclusivement dans le cadre du spectacle", "Frais d'assurance annulation ou d'assurance du matériel directement imputables au spectacle", "Frais d'entretien et de réparation du matériel de tournée", "Frais de régie", "Frais de transport", "Frais de restauration et d'hébergement", "Dépenses engagées pour la création, la réalisation, la fabrication et l'envoi des supports promotionnels physiques ou dématérialisés", "Dépenses liées à la réalisation et à la production d'images permettant le développement de la carrière de l'artiste", "Dépenses liées à la création d'un site internet consacré à l'artiste", "Dépenses engagées au titre de la participation de l'artiste à des émissions de télévision ou de radio", "Frais d'acquisition des droits d'auteur des photographies, des illustrations et créations graphiques, les frais techniques nécessaires à la réalisation de ces créations", "Frais de captation", "Frais d'acquisition d'images préexistantes, les cessions de droits facturés par l'ensemble des ayants droit", "Frais correspondant aux autorisations délivrées par des exploitants de salles ou par des organisateurs de festivals", "Dépenses de postproduction (frais de montage, d'étalonnage, de mixage, de codage et de matriçage), les rémunérations et charges sociales nécessaires à la réalisation de ces opérations", "Dans le cadre d'un support numérique polyvalent musical, les frais de conception technique tels que la création d'éléments d'interactivité ou d'une arborescence ou le recours à des effets spéciaux" ];
        console.log(answers.length);
        for(j = 0; j< answers.length; j++){
            var tr = '<tr><td><input name="data['+j+'][harc]" type= "hidden" value="' +answers[j]+  '" />'+answers[j]+' </td><td><input  name="data['+j+'][gin]" type="text"   class="form-control input-md"></td></tr>';
            $('#caxs').append(tr);
        }
        for(a = 0; a< answerssecond.length; a++){
            var tr = '<tr><td><input name="myusdata['+a+'][nor_harc]" type= "hidden" value="' +answerssecond[a]+  '" />'+answerssecond[a]+' </td><td><input  name="myusdata['+a+'][nor_gin]" type="text"   class="form-control input-md"></td></tr>';
            $('#myuscaxs').append(tr);
        }
        $("#add_row").click(function(){
            $('#addr'+i).html("<td><input name='first_data["+i+"][artist]' type='text' placeholder='' class='form-control input-md'  /> </td><td><input name='first_data["+i+"][name]' type='text' placeholder='' class='form-control input-md'  /> </td><td><input  name='first_data["+i+"][mail]' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='first_data["+i+"][mobile]' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='first_data["+i+"][lyov]' type='text' placeholder=''  class='form-control input-md'></td>");

            $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
            i++;
        });
        $("#add_next_row").click(function(){
             var tr = "<thead><tr><th></th><th>PRESTATAIRE TECHNIQUE</th></tr></thead><tbody><tr><td>Nom de la société</td><td><input name='third_data["+i+"][company]' type='text' placeholder='Dénomination sociale de votre entreprise' class='form-control input-md'  /> </td></tr><tr><td>Numéro Siret</td><td><input name='third_data["+i+"][company_code]' type='text' placeholder='14 chiffres' class='form-control input-md'  /> </td></tr></tbody>";

            $('#next_tab').append(tr);
            i++;
        });

        $("#salary_add_row").click(function(){
            $('#salary'+i).html("<td><input type='text' name='second_data["+i+"][date]'  placeholder='JJ/MM/AAAA' class='form-control'/> </td><td><input type='text' name='second_data["+i+"][address]' placeholder='' class='form-control'/></td>");

            $('#actors').append('<tr id="salary'+(i+1)+'"></tr>');
            i++;
        });

    });
</script>