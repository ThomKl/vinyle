<?php
 
namespace App\DataFixtures;
 
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
 
class UserFixtures extends Fixture
{
    private $passwordEncoder;
 
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
 
    public function load(ObjectManager $manager)
    {
        // On configure dans quelles langues nous voulons nos données
        $faker = Faker\Factory::create('fr_FR');
 
        // on créé 10 users
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            
            //SET USERNAME
            $user->setUsername($faker->userName);
            
            //SET PASSWORD
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'userdemo'
            ));
            
            //SET NOM
            $user->setNom($faker->lastName);

            //SET PRENOM
            $user->setPrenom($faker->firstName);

            //SET EMAIL
            $user->setEmail(sprintf('userdemo%d@example.com', $i));
            
            //SET CIVILITE
            $user->setCivilite($faker->title);
            
            //SET VILLE
            $user->setVille($faker->city);
            
            //SET CP
            $user->setCodePostal($faker->postcode);
            
            //SET ADDRESS
            $user->setAdresse($faker->streetAddress);
            

            $manager->persist($user);
        }
 
        $manager->flush();
 
    }
}