@extends('modele.layouts.mainadmin')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Auteur</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tableau de bord</a></li>
                            <li class="active">Ajouter</li>
                            <li><a href="{{ route('listaut') }}">Liste</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="col-lg-12">
            <div class="row">
                <form action="{{ route('saveAut') }}" class="form" method="post" media="all" enctype="multipart/form-data" style="margin-top: 15px; margin-left: 5px;">
                    @csrf()
                    <div class="row">
                        <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4">
                            <input type="text" class="form-control" id="nomaut" name="nomaut" value="{{ old('nomaut') }}" pattern="{{ '[A-Za-zÂ-Ûâ-ûà-ùÄ-Üä-üéèÉ\' ]{2,50}' }}" title="Pas de caractères spéciaux , chiffre et la taille doit être comprise entre 2 et 50 caractères" autofocus placeholder="Saisir le nom de l'auteur ici" required>
                        </div>
                        <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
                            <select class="form-control" id="VilAut" name="VilAut" value="{{ old('VilAut') }}" autofocus title="Selectionner le pays de l'auteur ici" required><br>
                                <option value="">Selectionnez un pays</option>
                                <option value="">--------------</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Afrique du Sud">Afrique du Sud</option>
                                <option value="Albanie">Albanie</option>
                                <option value="Algérie">Algérie</option>
                                <option value="Allemagne">Allemagne</option>
                                <option value="Andorre">Andorre</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctique">Antarctique</option>
                                <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                                <option value="Antilles Néerlandaises">Antilles Néerlandaises</option>
                                <option value="Arabie Saoudite">Arabie Saoudite</option>
                                <option value="Argentine">Argentine</option>
                                <option value="Arménie">Arménie</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australie">Australie</option>
                                <option value="Autriche">Autriche</option>
                                <option value="Azerbaïdjan">Azerbaïdjan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahreïn">Bahreïn</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbade">Barbade</option>
                                <option value="Bélarus">Bélarus</option>
                                <option value="Belgique">Belgique</option>
                                <option value="Belize">Belize</option>
                                <option value="Bénin">Bénin</option>
                                <option value="Bermudes">Bermudes</option>
                                <option value="Bhoutan">Bhoutan</option>
                                <option value="Bolivie">Bolivie</option>
                                <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brésil">Brésil</option>
                                <option value="Brunéi Darussalam">Brunéi Darussalam</option>
                                <option value="Bulgarie">Bulgarie</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodge">Cambodge</option>
                                <option value="Cameroun">Cameroun</option>
                                <option value="Canada">Canada</option>
                                <option value="Cap-vert">Cap-vert</option>
                                <option value="Chili">Chili</option>
                                <option value="Chine">Chine</option>
                                <option value="Chypre">Chypre</option>
                                <option value="Colombie">Colombie</option>
                                <option value="Comores">Comores</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Croatie">Croatie</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Danemark">Danemark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominique">Dominique</option>
                                <option value="Égypte">Égypte</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Émirats Arabes Unis">Émirats Arabes Unis</option>
                                <option value="Équateur">Équateur</option>
                                <option value="Érythrée">Érythrée</option>
                                <option value="Espagne">Espagne</option>
                                <option value="Estonie">Estonie</option>
                                <option value="États Fédérés de Micronésie">États Fédérés de Micronésie</option>
                                <option value="États-Unis">États-Unis</option>
                                <option value="Éthiopie">Éthiopie</option>
                                <option value="Fédération de Russie">Fédération de Russie</option>
                                <option value="Fidji">Fidji</option>
                                <option value="Finlande">Finlande</option>
                                <option value="France">France</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambie">Gambie</option>
                                <option value="Géorgie">Géorgie</option>
                                <option value="Géorgie du Sud et les Îles Sandwich du Sud">Géorgie du Sud et les Îles Sandwich du Sud</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Grèce">Grèce</option>
                                <option value="Grenade">Grenade</option>
                                <option value="Groenland">Groenland</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinée">Guinée</option>
                                <option value="Guinée Équatoriale">Guinée Équatoriale</option>
                                <option value="Guinée-Bissau">Guinée-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Guyane Française">Guyane Française</option>
                                <option value="Haïti">Haïti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong-Kong">Hong-Kong</option>
                                <option value="Hongrie">Hongrie</option>
                                <option value="Île Bouvet">Île Bouvet</option>
                                <option value="Île Christmas">Île Christmas</option>
                                <option value="Île de Man">Île de Man</option>
                                <option value="Île Norfolk">Île Norfolk</option>
                                <option value="Îles (malvinas) Falkland">Îles (malvinas) Falkland</option>
                                <option value="Îles Åland">Îles Åland</option>
                                <option value="Îles Caïmanes">Îles Caïmanes</option>
                                <option value="Îles Cocos (Keeling)">Îles Cocos (Keeling)</option>
                                <option value="Îles Cook">Îles Cook</option>
                                <option value="Îles Féroé">Îles Féroé</option>
                                <option value="Îles Heard et Mcdonald">Îles Heard et Mcdonald</option>
                                <option value="Îles Mariannes du Nord">Îles Mariannes du Nord</option>
                                <option value="Îles Marshall">Îles Marshall</option>
                                <option value="Îles Mineures Éloignées des États-Unis">Îles Mineures Éloignées des États-Unis</option>
                                <option value="Îles Salomon">Îles Salomon</option>
                                <option value="Îles Turks et Caïques">Îles Turks et Caïques</option>
                                <option value="Îles Vierges Britanniques">Îles Vierges Britanniques</option>
                                <option value="Îles Vierges des États-Unis">Îles Vierges des États-Unis</option>
                                <option value="Inde">Inde</option>
                                <option value="Indonésie">Indonésie</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Irlande">Irlande</option>
                                <option value="Islande">Islande</option>
                                <option value="Israël">Israël</option>
                                <option value="Italie">Italie</option>
                                <option value="Jamahiriya Arabe Libyenne">Jamahiriya Arabe Libyenne</option>
                                <option value="Jamaïque">Jamaïque</option>
                                <option value="Japon">Japon</option>
                                <option value="Jordanie">Jordanie</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kirghizistan">Kirghizistan</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Koweït">Koweït</option>
                                <option value="L'ex-République Yougoslave de Macédoine">L'ex-République Yougoslave de Macédoine</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Lettonie">Lettonie</option>
                                <option value="Liban">Liban</option>
                                <option value="Libéria">Libéria</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lituanie">Lituanie</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaisie">Malaisie</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malte">Malte</option>
                                <option value="Maroc">Maroc</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Maurice">Maurice</option>
                                <option value="Mauritanie">Mauritanie</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexique">Mexique</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolie">Mongolie</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibie">Namibie</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Népal">Népal</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigéria">Nigéria</option>
                                <option value="Niué">Niué</option>
                                <option value="Norvège">Norvège</option>
                                <option value="Nouvelle-Calédonie">Nouvelle-Calédonie</option>
                                <option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
                                <option value="Oman">Oman</option>
                                <option value="Ouganda">Ouganda</option>
                                <option value="Ouzbékistan">Ouzbékistan</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palaos">Palaos</option>
                                <option value="Panama">Panama</option>
                                <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Pays-Bas">Pays-Bas</option>
                                <option value="Pérou">Pérou</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Pologne">Pologne</option>
                                <option value="Polynésie Française">Polynésie Française</option>
                                <option value="Porto Rico">Porto Rico</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="République Arabe Syrienne">République Arabe Syrienne</option>
                                <option value="République Centrafricaine">République Centrafricaine</option>
                                <option value="République de Corée du nord">République de Corée du nord</option>
                                <option value="République de Corée du sud">République de Corée du sud</option>
                                <option value="République de Moldova">République de Moldova</option>
                                <option value="République Démocratique du Congo">République Démocratique du Congo</option>
                                <option value="République Démocratique Populaire Lao">République Démocratique Populaire Lao</option>
                                <option value="République Dominicaine">République Dominicaine</option>
                                <option value="République du Congo">République du Congo</option>
                                <option value="République Islamique d'Iran">République Islamique d'Iran</option>
                                <option value="République Populaire Démocratique de Corée">République Populaire Démocratique de Corée</option>
                                <option value="République Tchèque">République Tchèque</option>
                                <option value="République-Unie de Tanzanie">République-Unie de Tanzanie</option>
                                <option value="Réunion">Réunion</option>
                                <option value="Roumanie">Roumanie</option>
                                <option value="Royaume-Uni">Royaume-Uni</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Sahara Occidental">Sahara Occidental</option>
                                <option value="Saint-Kitts-et-Nevis">Saint-Kitts-et-Nevis</option>
                                <option value="Saint-Marin">Saint-Marin</option>
                                <option value="Saint-Pierre-et-Miquelon">Saint-Pierre-et-Miquelon</option>
                                <option value="Saint-Siège (état de la Cité du Vatican)">Saint-Siège (état de la Cité du Vatican)</option>
                                <option value="Saint-Vincent-et-les Grenadines">Saint-Vincent-et-les Grenadines</option>
                                <option value="Sainte-Hélène">Sainte-Hélène</option>
                                <option value="Sainte-Lucie">Sainte-Lucie</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa Américaines">Samoa Américaines</option>
                                <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
                                <option value="Sénégal">Sénégal</option>
                                <option value="Serbie-et-Monténégro">Serbie-et-Monténégro</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapour">Singapour</option>
                                <option value="Slovaquie">Slovaquie</option>
                                <option value="Slovénie">Slovénie</option>
                                <option value="Somalie">Somalie</option>
                                <option value="Soudan">Soudan</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Suède">Suède</option>
                                <option value="Suisse">Suisse</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard etÎle Jan Mayen">Svalbard etÎle Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Tadjikistan">Tadjikistan</option>
                                <option value="Taïwan">Taïwan</option>
                                <option value="Tchad">Tchad</option>
                                <option value="Terres Australes Françaises">Terres Australes Françaises</option>
                                <option value="Territoire Britannique de l'Océan Indien">Territoire Britannique de l'Océan Indien</option>
                                <option value="Territoire Palestinien Occupé">Territoire Palestinien Occupé</option>
                                <option value="Thaïlande">Thaïlande</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinité-et-Tobago">Trinité-et-Tobago</option>
                                <option value="Tunisie">Tunisie</option>
                                <option value="Turkménistan">Turkménistan</option>
                                <option value="Turquie">Turquie</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Wallis et Futuna">Wallis et Futuna</option>
                                <option value="Yémen">Yémen</option>
                                <option value="Zambie">Zambie</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>

                        <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4">
                            <button class="btn btn-danger" type="reset">Reprendre</button>&nbsp;
                            <button class="btn btn-primary" type="submit">Ajouter</button>
                        </div>
                    </div>
                </form>

            </div> <!-- .card -->

        </div>
    </div>
</div>
@stop