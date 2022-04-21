<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'title' => "Le président ukrainien Volodymyr Zelensky annonce que l’offensive russe contre l’est de l’Ukraine a débuté",
                "description" => 'Une offensive massive de Moscou était annoncée par l’armée ukrainienne depuis plusieurs semaines contre le Donbass, dont un large pan est sous le contrôle des séparatistes prorusses des républiques autoproclamées de Louhansk et de Donetsk.',
                "url_img" => "https://img.lemde.fr/2022/04/18/417/0/5000/2500/644/322/60/0/e7da2de_59d2302e48624efea1748c330876a833-59d2302e48624efea1748c330876a833-0.jpg",
            ],
            [
                "title" => 'Courir plus vite, sauter plus haut, réduire l’effort : ces scientifiques au service de la performance sportive',
                "description" => 'Le sport comme sujet de recherche. La troisième édition de la conférence Sports Physics, qui s’est déroulée à Lyon fin 2021, a présenté des résultats de science afin de gagner en performance. Des sujets atypiques pour les chercheurs mais qui commencent à faire leurs preuves.',
                "url_img" => "https://img.lemde.fr/2022/04/18/473/0/4611/2305/644/322/60/0/80b0c68_1650273575534-pressesports-144225-0073.jpg",
            ],
            [
                "title" => "Guerre en Ukraine : l’Eglise orthodoxe russe en rangs serrés derrière Vladimir Poutine",
                "description" => "Les évêques russes multiplient les déclarations de soutien à la guerre en Ukraine, tandis que le numéro deux du patriarcat de Moscou mène une offensive diplomatique auprès des pays occidentaux.",
                "url_img" => "https://img.lemde.fr/2022/04/18/582/0/5000/2500/644/322/60/0/694d3a2_1650297694880-224800.jpg",
            ],
            [
                "title" => "Pegasus : des dizaines d’élus et de membres de la société civile catalane ciblés par le logiciel espion",
                "description" => "Le Citizen Lab de Toronto a pu prouver qu’au moins 51 personnes liées au mouvement indépendantiste catalan ont vu leur téléphone infecté par le puissant logiciel de la société NSO. Un chiffre très certainement sous-estimé.",
                "url_img" => "https://img.lemde.fr/2015/09/11/215/0/3500/1750/644/322/60/0/b92d7fa_BAR117_SPAIN-CATALONIA-_0911_1A.JPG",
            ],
            [
                "title" => "Faire ses courses sous l’œil d’une intelligence artificielle ? Comment les supermarchés, profitant d’un flou juridique, sophistiquent la détection des vols",
                "description" => "Face à la recrudescence des vols dans les magasins, les enseignes testent des solutions qui automatisent leur détection. La CNIL vient d’achever une consultation publique afin de prendre position. Son avis est attendu prochainement.",
                "url_img" => "https://img.lemde.fr/2022/04/17/73/0/2185/1092/644/322/60/0/897a9cb_1650236164997-souriez-vous-etes-filmes-copie-1.jpg"
            ],
            [
                "title" => "Entre télétravail et « flex office », Deloitte abandonne un nouvel immeuble à la City de Londres",
                "description" => "En un an, le géant de l’audit et du conseil a cédé un tiers de sa surface de bureaux dans la capitale britannique. Il assure que cela n’aura aucune incidence sur l’emploi",
                "url_img" => "https://img.lemde.fr/2022/04/18/533/0/5184/2592/644/322/60/0/3725afb_1650288347153-deloitte-londres.jpg"
            ],
            [
                "title" => "La suppression du corps diplomatique actée au « Journal officiel », l’opposition proteste",
                "description" => "Les hauts fonctionnaires des affaires étrangères vont entrer dans un pot commun d’administrateurs de l’Etat, qui auront vocation à évoluer d’un ministère à un autre tout au long de leur carrière. Une mesure qui a suscité la colère des diplomates.",
                "url_img" => "https://img.lemde.fr/2022/04/18/408/0/4928/2464/644/322/60/0/7b21503_1650295732424-pns-3510967.jpg"
            ],
            [
                "title" => "Suivez la campagne présidentielle en direct",
                "description" => "A six jours du second tour de l’élection présidentielle, Emmanuel Macron poursuit sa tournée des médias. Après France Culture et « Quotidien », le candidat de La République en marche a répondu aux questions de France 5. Marine Le Pen était, elle, dans le Calvados.",
                "url_img" => "https://img.lemde.fr/2022/04/16/291/0/3500/1750/644/322/60/0/248d326_gggpr02-france-election-0416-11.jpg",

            ],
            [
                "title" => "Guerre en Ukraine : pourquoi la Turquie est devenue l’arbitre du conflit en mer Noire",
                "description" => "La fermeture du Bosphore, décidée par Ankara, empêche la Russie d’envoyer des renforts navals dans la zone.",
                "url_img" => 'https://img.lemde.fr/2022/03/17/577/0/6838/3419/644/322/60/0/6fe9e77_5f6a9d2d11f94e3f8ccdbfa51d69618a-db26b160a4434bec9db67bbe24e4b66a-0.jpg'
            ],
            [
                "title" => "A Paris, un service hospitalier de pointe menacé de fermeture",
                "description" => "A l’hôpital Saint-Louis, le manque d’infirmiers de nuit met en grande difficulté un service d’hématologie, alerte l’équipe soignante, qui craint de devoir fermer « à très court terme",
                "url_img" => "https://img.lemde.fr/2022/04/18/464/0/5568/2784/644/322/60/0/7c21b5b_1650268846009-000-1sf8jh.jpg"
            ],
            [
                "title" => "Football : « la lutte pour le maintien, une vraie compétition et beaucoup d’émotions",
                "description" => "Quand le titre de champion de France de Ligue 1 est joué d’emblée, les joutes du bas de tableau ont des charmes autrement plus puissants.",
                "url_img" => "https://img.lemde.fr/2022/04/10/0/0/4740/2370/644/322/60/0/706437d_5953093-01-06.jpg"
            ],
            [
                "title" => "Au Chili, le nouveau président de gauche annonce un plan de relance pour soutenir l’économie et un nouveau projet de retrait des fonds de pension",
                "description" => "Gabriel Boric, a détaillé une série de mesures destinées aux familles, à la création d’emplois et aux petites et moyennes entreprises. Le plan s’élève à 3,7 milliards de dollars (3,4 milliards d’euros).",
                "url_img" => "https://img.lemde.fr/2022/04/18/615/0/7388/3694/644/322/60/0/d82db3c_1650267994535-000-327q7d3.jpg"
            ],
            [
                "title" => "Guerre en Ukraine : les drones Bayraktar, pomme de discorde entre Ankara et Moscou",
                "description" => "Les appareils fabriqués par une société turque auraient joué un rôle dans l’attaque du croiseur russe « Moskva », qui a coulé jeudi en mer Noire.",
                "url_img" => "https://img.lemde.fr/2022/03/17/136/0/6838/3415/644/322/60/0/6fe9e77_5f6a9d2d11f94e3f8ccdbfa51d69618a-db26b160a4434bec9db67bbe24e4b66a-0.jpg"
            ],
            [
                "title" => "La Turquie lance une nouvelle offensive contre le PKK en Irak",
                "description" => "Ankara mène de façon régulière des raids contre les positions de ce groupe kurde, qu’il qualifie de « terroriste».",
                "url_img" => "https://img.lemde.fr/2022/04/18/4/0/3601/1800/644/322/60/0/673a12a_7281fc53dbb04ef1a589b58427d1784e-7281fc53dbb04ef1a589b58427d1784e-0.jpg",
            ],
            [
                "title" => "On mange quoi ce midi ? 100 restaurants parisiens où déjeuner pour moins de 20 euros",
                "description" => "Envie d’œufs mimosa, d’empanadas, de bobun, de burger, de pâté en croûte ou d’un couscous ? Voici, pour chacun des 20 arrondissements parisiens, notre sélection de 5 tables pour se régaler sans se ruiner.",
                "url_img" => "https://img.lemde.fr/2022/04/05/243/0/4200/2098/644/322/60/0/baa36b1_431199687-36320-0008-f-1532614999.jpg"
            ],
            [
                "title" => "Climat :« Nous sommes pacifistes et allons bloquer l’accès au Mcdonald’s dans le calme »",
                "description" => "Des militants d’Extinction Rebellion ont empêché l’accès à deux fast-food dimanche, « symboles de la malbouffe ». L’action s’est déroulée dans le calme, en marge de l’occupation de la porte Saint-Denis par un millier de manifestants depuis samedi à Paris.",
                "url_img" => "https://img.lemde.fr/2022/04/18/363/0/6543/3271/644/322/60/0/e796af8_1650275359872-170422xr-bloque-strasbourg-saint-denis2b8a1043.jpg"
            ],
            [
                "title" => "En Corse, la recrudescence des incendies fait craindre un retour de la lutte clandestine",
                "description" => "Depuis l’agression d’Yvan Colonna le 2 mars, huit résidences secondaires ont été visées sur l’île.",
                "url_img" => "https://img.lemde.fr/2022/04/18/2098/0/3750/1875/644/322/60/0/6d03dfe_1650273342235-kz-2022-04-03-40.JPG"
            ],
            [
                "title" => "Catherine Spaak, figure de la comédie italienne de l’après-guerre, est morte",
                "description" => "Victime en 2020 d’une hémorragie cérébrale, l’actrice belgo-italienne s’est éteinte à Rome, à l’âge de 77 ans.",
                "url_img" => "https://img.lemde.fr/2022/04/18/279/0/3776/1888/644/322/60/0/e45b4d7_1650272036642-pns-2742298.jpeg"
            ],
            [
                "title" => "En Belgique, Ferrero sous pression après la détection de salmonelles dans son usine Kinder",
                "description" => "L’entreprise reconnaît avoir détecté mi-décembre la présence de bactéries à salmonelle dans son usine d’Arlon, en Belgique, plus de trois mois avant que le site ne soit mis à l’arrêt.",
                "url_img" => "https://img.lemde.fr/2022/04/17/635/0/5568/2784/644/322/60/0/949ccb8_1650207660884-402114.jpg"
            ],
            [
                "title" => "Entretien avec la philosophe Claire Marin : « On peut faire une place à l’autre sans perdre la sienne »",
                "description" => "Dans un entretien au « Monde », la philosophe de l’intime évoque cette inquiétude ontologique d’être remplacé et constate que « nous ne sommes sans doute jamais vraiment dans une pure adéquation à l’instant ou à nous-mêmes ».",
                "url_img" => "https://img.lemde.fr/2022/04/15/237/0/2819/1409/644/322/60/0/e22990b_1650027320979-ent-claire-marin.jpg"
            ],
            [
                "title" => "La croissance chinoise résiste au premier trimestre",
                "description" => "Le produit intérieur brut de l’empire du Milieu a progressé de 4,8 % sur les trois premiers mois de l’année. Mais l’activité devrait se tasser au second trimestre, en raison du confinement de la capitale économique, Shanghaï.",
                "url_img" => "https://img.lemde.fr/2022/04/18/0/0/5384/2692/644/322/60/0/364e88d_1650267365818-000-328h3ua.jpg"
            ],
            [
                "title" => "Didi, le « Uber chinois », annonce sa sortie de Wall Street",
                "description" => "Le régulateur chinois avait lancé une enquête contre le leader local des VTC au lendemain de son introduction en Bourse, en juin 2021.",
                "url_img" => "https://img.lemde.fr/2022/04/18/422/0/5070/2535/644/322/60/0/cd386c4_1650267066661-000-9dp9t6.jpg"
            ],
            [
                "title" => "Le « Magical Mystery Tour » de la romancière Lydie Salvayre à travers la Seine-Saint-Denis",
                "description" => "La 13e édition du festival Hors limites proposait, samedi 16 avril, un astucieux « bibliotourbus » en compagnie de l’écrivaine.",
                "url_img" => "https://img.lemde.fr/2022/04/17/1822/0/5000/2500/644/322/60/0/0688aa9_1650208544277-charlene-yves-photographie-lydie-salvayre-marilyne-canto-img-0256.jpg"
            ],
            [
                "title" => "Le Printemps de Bourges retrouve ses marques",
                "description" => "La programation de cette 46e édition, qui se déroule du 19 au 24 avril, propose un dosage entre vedettes aux découvertes.[La programation de cette 46e édition, qui se déroule du 19 au 24 avril, propose un dosage entre vedettes aux découvertes.",
                "url_img" => "https://img.lemde.fr/2015/06/15/6/0/700/350/644/322/60/0/16dff30_19386-1hkp34o.jpg"
            ],
            [
                "title" => "En Inde, Modi sans réaction face à un déferlement de haine envers les musulmans",
                "description" => "Le nord de Delhi, comme de nombreux Etats dans le pays, a été le théâtre d’affrontements communautaires, samedi, à l’occasion de fêtes hindoues.",
                "url_img" => "https://img.lemde.fr/2022/04/17/436/0/5282/2641/644/322/60/0/6ac0aeb_5995262-01-06.jpg"
            ],
            [
                "title" => "Présidentielle : les risques et les incohérences du programme économique  de Marine Le Pen",
                "description" => "Derrière des propositions d’apparence séduisante sur le pouvoir d’achat, la candidate du RN présente un projet largement inapplicable, inégalitaire et en rupture avec l’Union européenne.",
                "url_img" => "https://img.lemde.fr/2022/04/17/3030/0/4000/2000/644/322/60/0/ac77793_1650235895647-ad013-lepensoucy-dsc05905.jpg"
            ],
            [
                "title" => "Chine : premiers morts dus au Covid-19 à Shanghaï depuis le début du confinement",
                "description" => "Pékin a annoncé un rebond de la croissance économique du pays, mais les défis sont nombreux, alors que la stratégie zéro Covid entrave la production et le commerce.",
                "url_img" => "https://img.lemde.fr/2022/04/17/165/0/3916/1958/644/322/60/0/0300148_5997137-01-06.jpghttps://img.lemde.fr/2022/04/17/165/0/3916/1958/644/322/60/0/0300148_5997137-01-06.jpg"
            ],
            [
                "title" => "A Nevers, la seule maternité du département ferme ses portes temporairement",
                "description" => "En sous-effectif chronique faute de réussir à recruter, le centre hospitalier de la préfecture de la Nièvre a vu ses quatorze sages-femmes partir en arrêt-maladie. La profession s’alarme d’une pénurie de personnel à l’échelle nationale.",
                "url_img" => "https://img.lemde.fr/2022/04/17/468/0/5616/2808/644/322/60/0/4410f4f_1650237035241-img-5751.jpg"
            ],
            [
                "title" => "Guerre en Ukraine : Kiev accuse les Russes de vouloir « détruire le Donbass » qui continuera d’être défendu",
                "description" => "L’est du pays reste sous la menace d’une vaste offensive de l’armée russe. Des frappes ont aussi visé dimanche Kharkiv, la deuxième ville du pays.",
                "url_img" => "https://img.lemde.fr/2022/04/17/291/0/3500/1750/644/322/60/0/2d1b494_ppp-ukraine-crisis-mariupol-0417-11.jpg"
            ],
            [
                "title" => "Ligue 1 : le PSG s’offre Marseille sans panache et se rapproche du titre",
                "description" => "Mathématiquement, les Parisiens ne sont pas encore champions de France, mais avec 15 points d’avance sur le dauphin, ils pourraient être couronnés dès mercredi.",
                "url_img"=> "https://img.lemde.fr/2022/04/17/250/0/3030/1515/644/322/60/0/3804765_5998760-01-06.jpg"
            ],
            [
                "title" => "L’Etat islamique promet de « venger » son ancien chef, tué en Syrie",
                "description" => "Le 3 février, le président américain Joe Biden avait annoncé la mort d’Abou Ibrahim Al-Hachimi Al-Qourachi, qui s’était fait exploser au cours d’une opération des forces spéciales américaines.",
                "url_img" => "https://img.lemde.fr/2018/01/19/333/0/4000/2000/644/322/60/0/3f277ee_8aa36050d2784cc788b1b4940e5862fb-8aa36050d2784cc788b1b4940e5862fb-0.jpg"

            ],
            [
                "title" => "Architecture néoclassique, artistes célèbres, douceur de vivre… Odessa, mythique ville ukrainienne",
                "description" => "Sur les bords de la mer Noire, la ville ukrainienne fait rêver depuis deux siècles. Même si Vladimir Poutine vise l’est du pays, la cité insoumise redoute l’assaut de l’armée russe et se prépare à combattre.",
                "url_img" => "https://img.lemde.fr/2022/04/11/150/0/1500/750/644/322/60/0/67152d2_184489-3268690.jpg"
            ],
            [
                "title" => "PSG-OM : suivez en direct le classique de la L1",
                "description" => "Le Paris-Saint-Germain, grâce à sa victoire (2-1) contre son dauphin l’Olympique de Marseille, se rapproche encore un peu plus d’un dixième titre de champion de France.",
                "url_img" => "https://img.lemde.fr/2022/04/17/133/0/2326/1163/644/322/60/0/5344651_5998614-01-06.jpg"
            ],
            [
                "title" => "A Jérusalem, nouveaux heurts autour de l’esplanade des Mosquées",
                "description" => "De nouveaux incidents ont fait une vingtaine de blessés alors que se tenaient dimanche dans la Vieille Ville de Jérusalem des festivités chrétiennes pour Pâques, des prières pour Pessah, la pâque juive, et pour le mois musulman sacré de ramadan.",
                "url_img" => "https://img.lemde.fr/2022/04/17/484/0/5808/2904/644/322/60/0/773ab37_5995409-01-06.jpg"
            ],
            [
                "title" => "Cyclisme : le Néerlandais Dylan van Baarle remporte la 119e édition de Paris-Roubaix en solitaire",
                "description" => "Le coureur de l’équipe Ineos Grenadiers s’est adjugé la reine des classiques dimanche au vélodrome André-Pétrieux de Roubaix.",
                "url_img" => "https://img.lemde.fr/2022/04/17/71/0/1515/757/644/322/60/0/b85d0ad_fbcaa24f703441d99a1f21cc7b0a6018-fbcaa24f703441d99a1f21cc7b0a6018-0.jpg"
            ],
            [
                "title" => "Tennis : Stefanos Tsitsipas conserve son titre à Monte-Carlo",
                "description" => "Le joueur grec a réalisé le doublé en s’imposant dimanche face à l’Espagnol Alejandro Davidovich Fokina (6/3-7/6) et s’affirme comme l’un des favoris pour la saison sur terre battue",
                "url_img" => "https://img.lemde.fr/2022/04/17/351/0/4218/2109/644/322/60/0/11e5ff1_5996400-01-06.jpg"
            ],
            [
                "title" => "Le cinéaste russe Kirill Serebrennikov : « Désormais, la question des crimes de guerre nous concerne particulièrement, personnellement »",
                "description" => "À l’affiche des prochains festivals de Cannes et d’Avignon, le cinéaste et metteur en scène russe, qui a pu quitter Moscou, où il était assigné à résidence, confie dans un entretien au « Monde » qu’il ne veut pas « être partie prenante de cette guerre ».",
                "url_img" => "https://img.lemde.fr/2022/04/15/693/0/6552/3276/644/322/60/0/ba8fb4b_12241589-5137.jpg"
            ],
            [
                "title" => "Marine Le Pen assure n’avoir « jamais été climatosceptique » et se dit « victime d’anathème » sur l’écologie",
                "description" => "Le programme climatique et écologique de la candidate du Rassemblement national à l’élection présidentielle a été vivement critiqué par Emmanuel Macron, samedi à Marseille.",
                "url_img" => "https://img.lemde.fr/2022/04/11/500/0/6000/3000/644/322/60/0/62e61f5_1649700445201-ad06-lepensoucy-dsc05849.jpg"
            ],
            [
                "title" => "« Les grands médias audiovisuels ont rendu presque impossible l’affirmation d’un débat politique sur l’environnement»",
                "description" => "Pourtant considérée comme une priorité par les Français, l’écologie a été presque absente des débats de la campagne présidentielle qui s’achève. La réticence médiatique à considérer l’urgence climatique comme un sujet politique majeur est l’une des explications à ce paradoxe, estime Stéphane Foucart, journaliste au « Monde », dans sa chronique.",
                "url_img" => "https://img.lemde.fr/2022/04/14/494/0/6204/3102/644/322/60/0/e218122_1649953016152-20220325-marcheclimat-12.jpg"
            ],
            [
                "title" => "Guerre en Ukraine en direct : Marioupol toujours assiégée, bombardements à Kharkiv, calme précaire à Kramatorsk",
                "description" => "Le président ukrainien, qui a qualifié la situation à Marioupol d’« inhumaine », a appelé les Occidentaux à fournir les armes qu’il réclame. La Russie a demandé aux soldats ukrainiens retranchés de se rendre.",
                "url_img" => "https://img.lemde.fr/2022/04/14/494/0/6204/3102/644/322/60/0/e218122_1649953016152-20220325-marcheclimat-12.jpg"
            ],
            [
                "title" => "Guerre en Ukraine en direct : Marioupol toujours assiégée, bombardements à Kharkiv, calme précaire à Kramatorsk",
                "description" => "Guerre en Ukraine en direct : Marioupol toujours assiégée, bombardements à Kharkiv, calme précaire à Kramatorsk",
                "url_img" => "https://img.lemde.fr/2022/04/17/690/0/8286/4143/644/322/60/0/7680b0e_d456177fce7e41a8a180e6e91e227285-1fb717336b374647b966f741f99cb98c-0.jpg"
            ],
            [
                "title" => "Présidentielle : les sympathisants de LFI et les soutiens de Mélenchon privilégient le choix d’un vote blanc au second tour",
                "description" => "Plus de 215 000 personnes ont participé à la consultation organisée par La France insoumise, dont les résultats sont semblables à celle organisée en 2017.",
                "url_img" => "https://img.lemde.fr/2022/04/10/0/0/3840/1920/644/322/60/0/73d666b_5956169-01-06.jpg"
            ]
        ];
        foreach ($articles as $key => $value) {
            DB::table('articles')->insert([
                'title' => $value['title'],
                'description' => $value['description'],
                'url_img' => $value['url_img'],
            ]);
        }
    }
}
