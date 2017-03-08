<?php

?>
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
    <style type="text/css">thead:before, thead:after { display: none; } tbody:before, tbody:after { display: none; }
	    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }
	</style>
</head>
    <body style="margin: 50px 50px 50px 50px; text-align: justify;">
        <br>
        <br>
        <br>
		<br>
		<br>
		<br>
        <p style="text-align: justify; padding-left: 67%"><font size="3.8">
		MINISTERE DE LA CULTURE
		<br>
        DIRECTION GENERALE DE LA
		<br>
		CREATION ARTISTIQUE
		<br>		
		62, RUE BEAUBOURG
		<br>        
		75003 PARIS 
        </p>
		<br>
		<br>
		<p class="text-left"><font size="3.8">
		Objet : Crédit d’impôt pour le spectacle vivant - demande d’agrément à titre provisoire
		<br>
        Lettre Recommandée avec A.R
		<br>
		{{$data['city']}}, le {{$data['date']}}
		<br>
		<br>
        <p > <font size="3.8">Madame, Monsieur,
		<br>
		<br>
            J’ai l’honneur de vous demander par la présente un agrément provisoire dans le cadre du crédit d’impôt au titre des dépenses de création, d'exploitation et de numérisation d'un spectacle vivant musical ou de variétés prévu à l'article 220 quindecies du code général des impôts, pour le spectacle "{{$data['spectacle']}}".
			<br>
			<br>
           Ce spectacle créé et produit par la société {{$data['events']}} appartient à la catégorie "{{$data['stesak']}}". Il est caractérisé par une scénographie identique, un répertoire constant et une distribution stable des interprètes, ainsi remplissant l’ensemble des conditions prévues à l’article 2  du décret n° 2016-1209 du 7 septembre 2016 relatif au crédit d'impôt au titre des dépenses de création, d'exploitation et de numérisation d'un spectacle vivant musical ou de variétés prévu à l'article 220 quindecies du code général des impôts.
			<br>
			<br>
			</p>
			<p style="text-right" page-break-after: "always;"> <font size="3.8">
			Conformément à l’article 5 du décret n° 2016-1209 du 7 septembre 2016, je fournis ci-joints les pièces justificatives suivantes :
			</p>
			<p > <font size="3.8">
			-	Un extrait de K bis de moins de trois mois, 
			<br>
			-	Pour apprécier le respect de la condition prévue au 3° du II de l'article 220 quindecies du code général des impôts: 
			<br>
				o	une déclaration sur l'honneur
                <br>
				o	une liste comprenant les dates, les fréquentations payantes et les salles dans lesquelles les artistes ou groupes d'artistes se sont produits au titre des trois années précédant la demande d'agrément,
            <br>           
		    -	Une déclaration sur l'honneur attestant que le projet de création, d'exploitation et de numérisation d'un spectacle vivant musical ou de variétés remplit les conditions prévues au II de l'article 220 quindecies du code général des impôts,
            <br>    
	        -	Une déclaration sur l'honneur que l'entreprise respecte l'ensemble des obligations légales, fiscales et sociales,
            <br>
         	-	Un devis détaillant les dépenses de création, d'exploitation et de numérisation,
            <br>
			-	La liste nominative des prestataires techniques pressentis,
            <br>
	    	-	La liste prévisionnelle des dates et lieux de représentation du spectacle envisagés à la date du dépôt de la demande d'agrément.
            <br>
			<br>
			</p>
			<p>
			Nous vous remercions par avance pour l’intérêt que vous voudrez bien porter à notre demande d’agrément et vous adressons, Madame, Monsieur, nos plus sincères salutations.
			</p>
			
        <p class="text-right">{{$data['customer_name']}}</p>
        <p class="text-right" style="page-break-after: always;">
		{{$data['place']}}
		</p>
	    <br>
        <br>
        <br>
		<br>
		<br>
    <div class="container">
        <p class="text-center" style="margin-bottom: 200px">DECLARATION SUR L’HONNEUR</p>
        <p > <font size="3.8">
            Je soussigné{{$data['final_gender']}}, {{$data['customer_name']}} agissant en qualité de {{$data['place']}} de la société {{$data['events']}}, {{$data['sarl']}} au
            capital de {{$data['capital']}} euros, dont le siège est situé {{$data['rue']}}, {{$data['postal']}} {{$data['city']}},
            immatriculée au RCS de {{$data['rcs']}} sous le numéro {{$data['siren']}}, déclare sur l’honneur que le
            spectacle "{{$data['spectacle']}}" respecte la condition prévue au 3° du II de l’article 220
            quindecies du code général des impôts, aux termes duquel les dépenses réalisées par l’entreprise
            doivent "porter sur des artistes ou groupes d'artistes dont aucun spectacle n'a comptabilisé plus de
            12 000 entrées payantes pendant les trois années précédant la demande d'agrément mentionnée au
            VI, à l'exception des représentations données dans le cadre de festivals ou de premières parties de
            spectacles". </font>
        </p>
        <p class="text-right" style="margin-top:200px; page-break-after: always;">
            Fait à {{$data['city']}}, le {{$data['date']}}
        </p>
        <br>
        <br>
        <br>
        <p class="text-center"> <font size="3.8"><strong>La liste comprenant les dates, les fréquentations payantes et les salles dans
            lesquelles les artistes ou groupes d'artistes se sont produits au titre des trois
            années précédant la demande d'agrément</strong> </font> </p>
        <br>
        <p class="text-center">Nom du spectacle: "{{$data['spectacle']}}"</p>
        <br>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic" style="page-break-after: always;">
                    <thead style="display: table-row-group">
                    <tr>
                        <th class="text-center" >
                            Artistes princpaux participants à ce spectacle
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
                    @foreach($data['first_data'] as $el)
                        <tr style="text-align: left;">
                            <td>{{$el['artist']}}</td>
                            <td>{{$el['name']}}</td>
                            <td>{{$el['mail']}}</td>
                            <td>{{$el['mobile']}}</td>
                            <td>{{$el['lyov']}}</td>
                        <tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
		<br>
        <br>
        <p class="text-center" style="margin-bottom: 200px">DECLARATION SUR L’HONNEUR</p>
        <p > <font size="3.8">Je soussigné{{$data['final_gender']}}, {{$data['customer_name']}}, agissant en qualité de {{$data['place']}} de la société {{$data['events']}}, {{$data['sarl']}} au
            capital de {{$data['capital']}} euros, dont le siège est situé {{$data['rue']}}, {{$data['postal']}} {{$data['city']}},
            immatriculée au RCS de {{$data['rcs']}} sous le numéro {{$data['siren']}}, déclare sur l’honneur que le projet
            du spectacle "{{$data['spectacle']}}" réalisé par {{$data['events']}} remplit les conditions prévues
            au II de l’article 220 quindecies du code général des impôts, selon lequel : "Ouvrent droit au crédit
            d'impôt les dépenses engagées pour la création, l'exploitation et la numérisation d'un spectacle
            musical ou de variétés remplissant les conditions cumulatives suivantes :
            <br>
			<br>
			1° Etre réalisées par des entreprises établies en France, dans un autre Etat membre de l'Union
            européenne ou dans un autre Etat partie à l'accord sur l'Espace économique européen ayant conclu
            avec la France une convention d'assistance administrative en vue de lutter contre la fraude et
            l'évasion fiscales et qui y effectuent les prestations liées à la réalisation d'un spectacle musical ou de
            variétés ;
            <br>
			<br>
			2° Porter sur un spectacle dont les coûts de création sont majoritairement engagés sur le territoire
            français ;
            <br>
			<br>
			3° Porter sur des artistes ou groupes d'artistes dont aucun spectacle n'a comptabilisé plus de 12 000
            entrées payantes pendant les trois années précédant la demande d'agrément mentionnée au VI, à
            l'exception des représentations données dans le cadre de festivals ou de premières parties de
            spectacles” .</font> </p>
        <p class="text-right" style="margin-top:200px; page-break-after: always;">Fait à {{$data['city']}}, le {{$data['date']}}
        </p>
        <br>
        <br>
        <br>
		<br>
        <br>
        <p class="text-center" style="margin-bottom: 200px">DECLARATION SUR L’HONNEUR</p>
        <p > <font size="3.8">Je soussigné{{$data['final_gender']}}, {{$data['customer_name']}}, agissant en qualité de Gérant de la société {{$data['events']}}, {{$data['sarl']}} au capital
            de {{$data['capital']}} euros, dont le siège est situé {{$data['rue']}}, {{$data['postal']}} {{$data['city']}}, immatriculée au RCS
            de {{$data['rcs']}} sous le numéro {{$data['siren']}}, déclare sur l’honneur que la société {{$data['events']}} respecte
            l’ensemble de ses obligations légales, fiscales et sociales. </font> </p>
        <p class="text-right" style="margin-top:200px; page-break-after: always;">Fait à {{$data['city']}}, le {{$data['date']}}
        </p>
        <br>
        <br>
        <br>
		<br>
        <br>
        <p class="text-center">{{$data['events']}}</p>
        <br>
        <p class="text-center">Nom du spectacle: "{{$data['spectacle']}}"</p>
        <br>
        <p class="text-center"> <font size="3.8"><strong>Le devis détaillant les dépenses de création</strong></font> </p>
        <br>
        <div class="row clearfix" style="page-break-after: always;">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="caxs_tab">
                    <colgroup>
                        <col style="width:80%">
                        <col style="width:20%">
                    </colgroup>
                    <thead style="display: table-row-group">
                    <tr >
                        <th class="text-center" colspan="2">
                            Frais liés à la création du spectacle
                        </th>
                    </tr>
                    </thead>
                    <tbody id="myuscaxs">
                        @foreach($data['data'] as $el)
                            @if($el['gin'] > 0)
                                <tr>
                                    <td>{{$el['harc']}}</td>
                                    <td>{{$el['gin']}}</td>
                                <tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
		<br>
		<br>
        <br>
		<p class="text-center">{{$data['events']}}</p>
        <br>
        <p class="text-center">Nom du spectacle: "{{$data['spectacle']}}"</p>
        <br>
        <p class="text-center"> <font size="3.8"><strong>Le devis détaillant les dépenses d’exploitation et de numérisation</strong></font> </p>
        <br>
        <div class="row clearfix" style="page-break-after: always;">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="caxs_tab">
                    <colgroup>
                        <col style="width:80%">
                        <col style="width:20%">
                    </colgroup>
                    <thead style="display: table-row-group">
                    <tr >
                        <th class="text-center" colspan="2">
                            Frais liés à l’exploitation et à la numérisation du spectacle
                        </th>
                    </tr>
                    </thead>
                    <tbody id="myuscaxs">
                    @foreach($data['myusdata'] as $el)
                        @if($el['nor_gin'] > 0)
                            <tr>
                                <td>{{$el['nor_harc']}}</td>
                                <td>{{$el['nor_gin']}}</td>
                            <tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
		<br>
        <br>
        <p class="text-center">{{$data['events']}}</p>
        <br>
        <p class="text-center">Nom du spectacle: "{{$data['spectacle']}}"</p>
        <br>
        <p class="text-center"> <font size="3.8"><strong>La liste nominative des prestataires techniques pressentis</strong></font> </p>
        <br>
        <table class="table table-bordered table-hover" id="next_tab" style="page-break-after: always;">
            <thead>
                <tr>
                    <th colspan = "2" class="text-center">
                        <p>LES PRESTATAIRES TECHNIQUES PRESSENTIS

                    </th>
                </tr>

            </thead>
            <tbody>
              @foreach($data['third_data'] as $index => $el)
              <tr >
                  <th colspan="2" class="text-center">
                      PRESTATAIRE TECHNIQUE @if(count($data['third_data']) > 1) {{$index + 1}} @endif
                  </th>
              </tr>
                <tr>
                    <td>
                        Nom de la société
                    </td>
                    <td>
                        {{$el['company']}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Numéro Siret
                    </td>
                    <td>
                        {{$el['company_code']}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <br>
		<br>
        <br>
		<p class="text-center">{{$data['events']}}</p>
        <br>
        <p class="text-center">Nom du spectacle: "{{$data['spectacle']}}"</p>
        <br>
        <p class="text-center"> <font size="3.8"><strong>La liste prévisionnelle des dates et lieux de représentation du spectacle</strong></font> </p>
        <br>
        <div class="row clearfix" style="page-break-after: always;">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="actors">
                    <colgroup>
                        <col style="width:50%">
                        <col style="width:50%">
                    </colgroup>
                    <thead>
                    <tr>
                        <th colspan = "2" class="text-center">
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
                    @foreach($data['second_data'] as $el)
                    <tr>
                        <td>
                            {{$el['date']}}
                        </td>
                        <td>
                            {{$el['address']}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
		<br>
        <br>
		<br>
        <p class="text-left" style="padding-left: 67%"><font size="3.8">
		MINISTERE DE LA CULTURE
		<br>
        DIRECTION GENERALE DE LA
		<br>
		CREATION ARTISTIQUE
		<br>		
		62, RUE BEAUBOURG
		<br>        
		75003 PARIS 
        </p>
		<br>
		<br>
		<p class="text-left"><font size="3.8">
		Objet : requête de prise en compte des dépenses engagées entre le 1er janvier 2016 et la publication du décret (9 septembre 2016).
		<br>
		{{$data['city']}}, le {{$data['date']}}</p>
		<br>
		<br>     
        <p>Madame, Monsieur,
		<br>
		<br>
            Par la présente nous vous prions de valider la prise en compte des dépenses
            engagées entre le 1er janvier 2016 et la publication du décret intervenue le 9
            septembre 2016 pour le spectacle "{{$data['spectacle']}}" produit par la
            société {{$data['events']}}.
			<br>
			<br>
            En effet, sans la parution du décret il nous était impossible de demander un
            agrément à titre provisoire avant cette date alors que la loi indique une
            possibilité de prise en compte des dépenses à partir du 1er janvier 2016.
            Nous vous remercions par avance pour l’intérêt que vous voudrez bien porter
            à notre demande et vous adressons, Madame, Monsieur, nos plus sincères
            salutations.
			<br>
			<br>
			</p>
			
        <p class="text-right">{{$data['customer_name']}}</p>
        <p class="text-right">{{$data['place']}}</p>
        

        </div>
    </body>
</html>
