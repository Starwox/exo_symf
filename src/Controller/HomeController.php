<?php
/**
 * Created by PhpStorm.
 * User: starwox
 * Date: 19/03/2020
 * Time: 09:58
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{

    /**
     * @Route("/search", name="search")
     */
    public function searchBar(Request $req) {
        $form = $this->createFormBuilder(null)
            ->add('department', TextType::class)
            ->add('type', ChoiceType::class, [
                'choices' => [
                    "Plateforme d'accompagnement et de répit pour les aidants de personnes âgées" => "accompagnement_personnes_agees",
                    "Information sur le logement" => "adil",
                    "Association nationale pour la formation professionnelle des adultes" => "afpa",
                    "Agence nationale de l’habitat" => "anah",
                    "Association pour l’emploi des cadres" => "apec",
                    "Association pour l'emploi des cadres, ingénieurs et techniciens de l'agriculture et de l'agroalimentaire" => "apecita",
                    "Agence régionale de santé" => "ars",
                    "Délégation territoriale de l'Agence régionale de santé" => "ars_antenne",
                    "Banque de France" => "banque_de_france",
                    "Bureau d'aide aux victimes" => "bav",
                    "Bureau ou centre du service national" => "bsn",
                    "Cour administrative d’appel" => "caa",
                    "Caisse d’allocations familiales" => "caf",
                    "Caisse d'assurance retraite et de la santé au travail" => "carsat",
                    "Centre communal d'action sociale" => "ccas",
                    "Chambre de commerce et d’industrie" => "cci",
                    "Centre départemental d'action sociale" => "cdas",
                    "Centre départemental de documentation pédagogique" => "cddp",
                    "Centre de gestion de la fonction publique territoriale" => "cdg",
                    "Centre de détention" => "centre_detention",
                    "Centre des impôts foncier et cadastre" => "centre_impots_fonciers",
                    "Centre pénitentiaire" => "centre_penitentiaire",
                    "Centre social" => "centre_social",
                    "Conseil économique, social et environnemental régional" => "cesr",
                    "Conseil départemental" => "cg",
                    "Chambre d’agriculture" => "chambre_agriculture",
                    "Chambre de métiers et de l’artisanat" => "chambre_metier",
                    "Centre d’information de conseil et d'accueil des salariés" => "cicas",
                    "Centre d’information sur les droits des femmes et des familles" => "cidf",
                    "Information jeunesse" => "cij",
                    "Centre d’information et d’orientation" => "cio",
                    "Commission d'indemnisation des victimes d'infraction" => "civi",
                    "Point d'information local dédié aux personnes âgées" => "clic",
                    "Centre national de la fonction publique territoriale" => "cnfpt",
                    "Centre en route de la navigation aérienne" => "cnra",
                    "Commissariat de police" => "commissariat_police",
                    "Commission départementale de conciliation" => "commission_conciliation",
                    "Conciliateur fiscal" => "conciliateur_fiscal",
                    "Conseil de la culture, de l’éducation et de l’environnement" => "conseil_culture",
                    "Cour d’appel" => "cour_appel",
                    "Caisse primaire d’assurance maladie" => "cpam",
                    "Conseil régional" => "cr",
                    "Chambre régionale ou territoriale des comptes" => "crc",
                    "Centre régional de documentation pédagogique" => "crdp",
                    "Centre régional d’éducation populaire et de sports" => "creps",
                    "Centre ou délégation régionale de recrutement et de formation de la police nationale" => "crfpn",
                    "Centre de ressources et d'information des bénévoles" => "crib",
                    "CROUS et ses antennes" => "crous",
                    "Centre de semi-liberté" => "csl",
                    "Direction de l’aviation civile" => "dac",
                    "Droit des femmes et égalité, mission départementale" => "dd_femmes",
                    "Direction départementale des finances publiques" => "dd_fip",
                    "Direction départementale de la cohésion sociale" => "ddcs",
                    "Direction départementale de la cohésion sociale et de la protection des populations" => "ddcspp",
                    "Direction territoriale de la protection judiciaire de la jeunesse" => "ddpjj",
                    "Protection des populations" => "ddpp",
                    "Direction départementale ou service de la sécurité publique" => "ddsp",
                    "Direction départementale des territoires -et de la mer" => "ddt",
                    "Défenseur des droits" => "defenseur_droits",
                    "Direction interdépartementale des routes" => "did_routes",
                    "Direction interrégionale de la mer" => "dir_mer",
                    "Météo France, direction interrégionale" => "dir_meteo",
                    "Direction interrégionale de la police judiciaire" => "dir_pj",
                    "Direction régionale des entreprises, de la concurrence, de la consommation, du travail et de l'emploi" => "direccte",
                    "Unité territoriale - Direction régionale des entreprises, de la concurrence, de la consommation, du travail et de l'emploi" => "direccte_ut",
                    "Délégation à la mer et au littoral" => "dml",
                    "Délégation régionale aux droits des femmes et à l’égalité" => "dr_femmes",
                    "Direction régionale des finances publiques" => "dr_fip",
                    "Délégation régionale de l’INSEE" => "dr_insee",
                    "Direction régionale des affaires culturelles" => "drac",
                    "Direction régionale de l'alimentation, de l’agriculture et de la forêt" => "draf",
                    "Direction interrégionale et régionale des douanes" => "drddi",
                    "Direction régionale de l’environnement, de l’aménagement et du logement" => "dreal",
                    "Unité territoriale - Direction régionale de l'environnement, de l'aménagement et du logement" => "dreal_ut",
                    "Direction régionale et interdépartementale de l'équipement et de l'aménagement" => "driea",
                    "Unité territoriale - Direction régionale et interdépartementale de l'équipement et de l'aménagement" => "driea_ut",
                    "Direction régionale et interdépartementale de l'environnement et de l'énergie" => "driee",
                    "Unité territoriale - Direction régionale et interdépartementale de l'environnement et de l'énergie" => "driee_ut",
                    "Direction régionale et interdépartementale de l'hébergement et du Hébergement et logement" => "drihl",
                    "Unité territoriale - Direction régionale et interdépartementale de l'hébergement et du logement" => "drihl_ut",
                    "Direction régionale de la jeunesse, des sports et de la cohésion sociale" => "drjscs",
                    "Délégation régionale de l’ONISEP" => "dronisep",
                    "Direction interdépartementale ou régionale de la protection judiciaire de la jeunesse" => "drpjj",
                    "Délégation régionale à la recherche et à la technologie" => "drrt",
                    "Direction interrégionale des services pénitentiaires" => "drsp",
                    "Direction zonale de la police aux frontières" => "dz_paf",
                    "Établissement départemental d'actions sociales" => "edas",
                    "Intercommunalité" => "epci",
                    "Etablissement spécialisé pour mineurs" => "esm",
                    "Fédération départementale pour la pêche et la protection du milieu aquatique" => "fdapp",
                    "Fédération départementale des chasseurs" => "fdc",
                    "Fongecif" => "fongecif",
                    "Brigade de gendarmerie" => "gendarmerie",
                    "Greta" => "greta",
                    "Service de publicité foncière ex-conservation des hypothèques" => "hypotheque",
                    "Direction des services départementaux de l'Éducation nationale" => "inspection_academique",
                    "Mission d’accueil et d’information des associations" => "maia",
                    "Mairie" => "mairie",
                    "Mairie des collectivités d'outre-mer" => "mairie_com",
                    "Mairie mobile de la ville de Paris" => "mairie_mobile",
                    "Maison d'arrêt" => "maison_arret",
                    "Maison centrale" => "maison_centrale",
                    "Maison départementale des personnes handicapées" => "maison_handicapees",
                    "Maison départementale des solidarités" => "mds",
                    "Mission locale et Permanence d’accueil, d’information et d’orientation" => "mission_locale",
                    "Maison de justice et du droit" => "mjd",
                    "Mutualité sociale agricole" => "msa",
                    "Office français de l'immigration et de l'intégration" => "ofii",
                    "Office national des anciens combattants" => "onac",
                    "Direction régionale de l'Office national des forêts" => "onf",
                    "Mairie de Paris, Hôtel de Ville" => "paris_mairie",
                    "Mairie de Paris, mairie d'arrondissement" => "paris_mairie_arrondissement",
                    "Préfecture de police de Paris" => "paris_ppp",
                    "Préfecture de police de Paris, antenne d’arrondissement" => "paris_ppp_antenne",
                    "Préfecture de police de Paris, certificat d'immatriculation" => "paris_ppp_certificat_immatriculation",
                    "Préfecture de police de Paris - Site central de Gesvres" => "paris_ppp_gesvres",
                    "Préfecture de police de Paris, permis de conduire" => "paris_ppp_permis_conduire",
                    "Permanence juridique" => "permanence_juridique",
                    "Point info famille" => "pif",
                    "Centre de protection maternelle et infantile" => "pmi",
                    "Pôle emploi" => "pole_emploi",
                    "Préfecture de police des Bouches-du-Rhône" => "pp_marseille",
                    "Préfecture" => "prefecture",
                    "Greffe des associations" => "prefecture_greffe_associations",
                    "Préfecture de région" => "prefecture_region",
                    "Conseil de prud’hommes" => "prudhommes",
                    "Rectorat" => "rectorat",
                    "Service territorial de l’architecture et du patrimoine" => "sdac",
                    "Services départementaux des solidarités et de l'insertion" => "sdsei",
                    "Service de la navigation" => "service_navigation",
                    "Secrétariat pour l'administration du ministère de l'Intérieur" => "sgami",
                    "Service des impôts des entreprises du Centre des finances publiques" => "sie",
                    "Service des impôts des particuliers du Centre des finances publiques" => "sip",
                    "Sous-préfecture" => "sous_pref",
                    "Service pénitentiaire d'insertion et de probation" => "spip",
                    "Service universitaire d'information et d'orientation" => "suio",
                    "Tribunal administratif" => "ta",
                    "Tribunal pour enfants" => "te",
                    "Tribunal de grande instance" => "tgi",
                    "Tribunal d’instance" => "ti",
                    "Trésorerie" => "tresorerie",
                    "Tribunal de commerce" => "tribunal_commerce",
                    "Urssaf" => "urssaf",
                ]
            ])
            ->add('submit', SubmitType::class)
            ->getForm()
        ;

        $form->handleRequest($req);

        $api = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $dep = $form->get('department')->getData();
            $type = $form->get('type')->getData();

            $get_data = $this->callAPI('GET',
                "https://etablissements-publics.api.gouv.fr/v3/departements/". $dep . "/" . $type,
                false
            );

            $response = json_decode($get_data, true);
            dump($response);
            $api = $response['features'];
        }

        return $this->render('search/index.html.twig', [
            'form' => $form->createView(),
            'api' => $api,
            'controller_name' => 'HomeController'
        ]);
    }




    private function callAPI($method, $url, $data){
        $curl = curl_init();
        switch ($method){
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'APIKEY: 111111111111111111111',
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // EXECUTE:
        $result = curl_exec($curl);
        if(!$result){die("Connection Failure");}
        curl_close($curl);
        return $result;
    }
}