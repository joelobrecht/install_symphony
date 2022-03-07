<?php

namespace App\DataFixtures;

use App\Entity\Plat;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categorie_n1 = new Category();
        $categorie_n1->setName('Entrée');
        $manager->persist($categorie_n1);

        $categorie_n2 = new Category();
        $categorie_n2->setName('Plat');
        $manager->persist($categorie_n2);

        $categorie_n3 = new Category();
        $categorie_n3->setName('Dessert');
        $manager->persist($categorie_n3);


        $plat = new Plat();
        $plat->setNom('Bœuf bourguignon');
        $plat->setDescription("Le bœuf bourguignon est une recette de cuisine d'estouffade de bœuf, traditionnelle de la cuisine bourguignonne, cuisinée au vin rouge de Bourgogne, avec une garniture de champignons, de petits oignons et de lardons. Les variations d'accompagnement sont multiples.");
        $plat->setCategory($categorie_n2);
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Poulet Marengo');
        $plat->setDescription("Le poulet Marengo ou veau Marengo ou lapin Marengo ou sauce Marengo est une recette de cuisine traditionnelle de la cuisine française à base de morceaux de poulet mijotés dans une sauce à la tomate et au vin blanc. ");
        $plat->setCategory($categorie_n2);
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Foie Gras');
        $plat->setDescription("Il est de toutes les tables pour les fêtes de fin d’année. Même si le monde associe cette spécialité à la France, la tradition du gavage d’oie remonte à l’Antiquité. Sur un pain brioché avec un peu de confit d’oignons ou de la confiture de figue, vous dégusterez le foie gras de façon idéale.");
        $plat->setCategory($categorie_n1);
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Huîtres');
        $plat->setDescription("Les huîtres sont le deuxième produit phare que l’on retrouve lors des fêtes de fin d’année. Ce coquillage peut se consommer chaud, mais les amateurs le préfère généralement cru et vivant. Les huîtres peuvent se déguster natures ou avec un filet de jus de citron, de vinaigre ou une sauce à l’échalote.");
        $plat->setCategory($categorie_n1);
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Cassoulet');
        $plat->setDescription("Ce n’est probablement pas le plat le plus léger que vous pourrez déguster en France. Originaire du Languedoc-Roussillon, ce plat est composé de haricots blancs, de cuisses de canard et de viande de porc (sous différentes formes). Consommé pendant des siècles par les familles paysannes, les Français le cuisinent aujourd’hui pour réunir leur famille.");
        $plat->setCategory($categorie_n2);
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Poulet basquaise');
        $plat->setDescription("Le Pays Basque est une des régions françaises les plus riches en terme de gastronomie. On y élève de la volaille, en particulier des races rares de poulet et du canard. Le Poulet Basquaise est un plat complet où la viande est rendue moelleuse par une piperade, une sauce composée de jambon de Bayonne, poivrons, tomates et piment d’Espelette.");
        $plat->setCategory($categorie_n2);
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Galettes bretonnes');
        $plat->setDescription("Suite à un engouement gourmand, les crêperies bretonnes sont presque partout en France. Qu’est-ce qu’une galette ? Il s’agit d’une crêpe salée, réalisée avec de la farine de sarrasin, qui lui donne sa couleur grisée. Même si les garnitures traditionnelles sont jambon/fromage/œuf et Andouille/oignon, les cartes se sont allongées au fil du temps et deviennent, de plus en plus, innovantes.");
        $plat->setCategory($categorie_n2);
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Le baba au rhum');
        $plat->setDescription("Le baba au rhum est un savarin, un gâteau moelleux et aéré qui est imbibé de rhum. Il se présente généralement sous une forme ronde avec une noisette de chantilly sur son dessus. C’est un gâteau traditionnel qui se mange le plus souvent pendant les fêtes religieuses comme pâques ou bien Noël.");
        $plat->setCategory($categorie_n3);
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Macaron');
        $plat->setDescription("Les macarons sont un incontournable si vous venez en France, et plus particulièrement à Paris. En effet les macarons de Paris sont devenus très célèbres vers les années 2000 avec l\’arrivée des macarons avec un goût dont le cœur est différent que le corps. Il existe une multitude de saveurs différentes de macaron allant du simple macaron à la vanille, au macaron à la rose. De nos jours il en existe même des salés.");
        $plat->setCategory($categorie_n3);
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Paris-Brest');
        $plat->setDescription("Le Paris-Brest est une pâtisserie traditionnelle qui se présente sous la forme d’une couronne de pâte à choux fourrée d’une crème mousseline pralinée et saupoudrée d’amandes effilées. Cette pâtisserie a été inventé pour célébrer la course cycliste de Paris-Brest-Paris, d’où lui vient son nom. La forme de la pâtisserie fait d’ailleurs penser à une roue de vélo.");
        $plat->setCategory($categorie_n2);
        $manager->persist($plat);

        $manager->flush();
    }
}
